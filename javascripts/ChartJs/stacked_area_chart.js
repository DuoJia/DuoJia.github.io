//參考資料：
//最高級版本：http://nvd3.org/examples/stackedArea.html

var tsvData = null;

var margin4 = {top: 100, right: 60, bottom: 30, left: 30},
    width4 = 700 - margin4.left - margin4.right, 
    height4 = 700 - margin4.top - margin4.bottom;

var parseDate4 = d3.timeParse('%Y');
var formatSi4 = d3.format(".3s");
var formatNumber4 = d3.format(".1f"),
    formatBillion4 = function(x) { return formatNumber4(x / 1e9); };

var x4 = d3.scaleTime()
    .range([0, width4]);
var y4 = d3.scaleLinear()
    .range([height4, 0]);

var color4 = d3.scaleOrdinal(d3.schemeCategory20);

var xAxis4 = d3.axisBottom()
    .scale(x4);
var yAxis4 = d3.axisLeft()
    .scale(y4)
    .tickFormat(formatBillion4);

var area4 = d3.area()
    .x(function(d) { 
      return x4(d.data.date); })
    .y0(function(d) { return y4(d[0]); })
    .y1(function(d) { return y4(d[1]); });

var stack4 = d3.stack()

var svg_stacked_area_chart = d3.select('#area3_stacked_area_chart').append('svg')
    .attr('width', width4 + margin4.left + margin4.right)
    .attr('height', height4 + margin4.top + margin4.bottom)
  .append('g')
    .attr('transform', 'translate(' + margin4.left + ',' + margin4.top + ')');

d3.csv('data/year_country.csv', function(error, data) {
  color4.domain(d3.keys(data[0]).filter(function(key) { return key !== 'date'; }));
  var keys = data.columns.filter(function(key) { return key !== 'date'; })
  data.forEach(function(d) {
    d.date = parseDate4(d.date); 
  });
  tsvData = (function(){ return data; })();


  var maxDateVal = d3.max(data, function(d){
    var vals = d3.keys(d).map(function(key){ return key !== 'date' ? d[key] : 0 });
    return d3.sum(vals);
  });
  
  // Set domains for axes
  x4.domain(d3.extent(data, function(d) { return d.date; }));
  y4.domain([0, maxDateVal])

  stack4.keys(keys);

  stack4.order(d3.stackOrderNone);
  stack4.offset(d3.stackOffsetNone);

  console.log(stack4(data));

  var browser = svg_stacked_area_chart.selectAll('.browser')
      .data(stack4(data))
    .enter().append('g')
      .attr('class', function(d){ return 'browser ' + d.key; })
      .attr('fill-opacity', 0.5);

  browser.append('path')
      .attr('class', 'area')
      .attr('d', area4)
      .style('fill', function(d) { return color4(d.key); });
      
  browser.append('text')
      .datum(function(d) { return d; })
      .attr('transform', function(d) { return 'translate(' + x4(data[13].date) + ',' + y4(d[13][1]) + ')'; })
      .attr('x', -6) 
      .attr('dy', '.35em')
      .style("text-anchor", "start")
      .text(function(d) { return d.key; })
      .attr('fill-opacity', 1);

  svg_stacked_area_chart.append('g')
      .attr('class', 'x axis')
      .attr('transform', 'translate(0,' + height4 + ')')
      .call(xAxis4);

  svg_stacked_area_chart.append('g')
      .attr('class', 'y axis')
      .call(yAxis4);

  svg_stacked_area_chart.append ("text")
    .attr("x", 0-margin.left)
    .text("Billions of liters")
});
