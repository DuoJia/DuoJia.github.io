//參考資料： https://bl.ocks.org/mbostock/3886208 
var margin = {top: 20, right: 20, bottom: 100, left: 40};
var width3= 1000;
var height3 = 900;
var svg_percentage_barchart = d3.select('#area2_percentage_bar_chart')
  .append('svg')
    .attr('width', width3 )
    .attr('height',height3)
  .append("g")
	//.attr('transform', 'translate(' + (width3 / 2) +  ',' + (height3/ 2) + ')');  
	.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

var x = d3.scaleBand()
    .rangeRound([0, width3*0.8])
    .paddingInner(0.05)
    .align(0.1);

var y = d3.scaleLinear()
    .rangeRound([height3*0.8, 0]);

var z = d3.scaleOrdinal()
    .range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00"]);

d3.csv("data/America_state_year.csv", function(d, i, columns) {
  for (i = 1, t = 0; i < columns.length; ++i) t += d[columns[i]] = +d[columns[i]];
  d.total = t;
  return d;
}, function(error, data) {
  if (error) throw error;

  var keys = data.columns.slice(1);

  data.sort(function(a, b) { return b.total - a.total; });
  x.domain(data.map(function(d) { return d.State; }));
  y.domain([0, d3.max(data, function(d) { return d.total; })]).nice();
  z.domain(keys);

  console.log(data);   

  svg_percentage_barchart.append("g")
    .selectAll("g")
    .data(d3.stack().keys(keys)(data))
    .enter().append("g")
      .attr("fill", function(d) { return z(d.key); })
    .selectAll("rect")
    .data(function(d) { return d; })
    .enter().append("rect")
      .attr("x", function(d) { return x(d.data.State); })
      .attr("y", function(d) { return y(d[1]); })
      .attr("height", function(d) { return y(d[0]) - y(d[1]); })
	  //.attr("width", 15);
      .attr("width", x.bandwidth());

  svg_percentage_barchart.append("g")
      .attr("class", "axis")
      .attr("transform", "translate(0," + (height3*0.8)+ ")")
      .call(d3.axisBottom(x));

  svg_percentage_barchart.append("g")
      .attr("class", "axis")
      .call(d3.axisLeft(y).ticks(null, "s"))
    .append("text")
      .attr("x", 2)
      .attr("y", y(y.ticks().pop()) + 0.5)
      .attr("dy", "0.32em")
      .attr("fill", "#000")
      .attr("font-weight", "bold")
      .attr("text-anchor", "start")
      .text("Population");

  var legend = svg_percentage_barchart.append("g")
      .attr("font-family", "sans-serif")
      .attr("font-size", 10)
      .attr("text-anchor", "end")
    .selectAll("g")
    .data(keys.slice().reverse())
    .enter().append("g")
      .attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; });

  legend.append("rect")
      .attr("x", width3 - 100)
      .attr("width", 19)
      .attr("height", 19)
      .attr("fill", z);

  legend.append("text")
      .attr("x", width3 - 150)
      .attr("y", 0)
      .attr("dy", "0.32em")
      .text(function(d) { return d; });
});