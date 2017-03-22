//參考資料 https://bl.ocks.org/seemantk/ec245e1f4e824e685982dd5d3fbb2fcc
// d3 scale band...https://github.com/d3/d3-scale/blob/master/README.md#band_bandwidth
var dataset_barchart;
function handleFileSelect_barchart1(evt) {
	var file = evt.target.files[0];
	//papa-parse使用來parse這個檔案
	Papa.parse(file, {
			  header: true,
			  dynamicTyping: true,
			  delimiter:",",
			 complete: function(results) {
			    console.log("results:", results);
				console.log("results.data:", results.data);
			    console.log("results.data[0].spot:", results.data[0].spot);
				dataset_barchart = results.data;
				draw_barchart1(dataset_barchart);
			 }
	});
};

var legendRectSize = 18;
var legendSpacing = 4;
var margin = {top: 50, right: 100, bottom: 30, left: 100}, //邊留太小 Y軸字會看不到
    width2 = 700 +margin.left +margin.right ,
    height2 = 650 +margin.top +margin.bottom ;
var color = d3.scaleOrdinal(d3.schemeCategory20b);
var x2 = d3.scaleBand() //Constructs a new band scale
	//.rangeRound([0, 300])
    .rangeRound([0, width2/2], .5) // = .range([range] 每個band條的寬度).round(true)
	.paddingInner(0.1)// range [0, 1] 表示bands之間的空格距離
	.paddingOuter(0.001);//表示band 頭尾與前後的間距

var y2 = d3.scaleLinear()
    .range([height2, 0]);

var xAxis2 = d3.axisBottom() //已定義 orient 為 Bottom
    .scale(x2);
	//.tickFormat(function(d){return d+'n';}); 可以改X軸的格式，此為在文字後加上n

var yAxis2 = d3.axisLeft()
    .scale(y2)
	//.tickValues([200000,250000,300000,350000,400000,450000])//加了就要自己定義Y軸 距離
	.tickPadding(15); //之間的間隔距離 
    //.ticks(10, "%"); 加入轉百分比單位	

var svg_barchart = d3.select("#area1").append("svg")
    .attr("width", width2)
    .attr("height", height2+100 )
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top +")");//置中一點

var tooltip2 = d3.select('#area1')          
		  .append('rect')  //附加一個div到tooltip(#area1)    
		  .attr('class', 'tooltip') 
		  .style("display", "none");
		
		tooltip2.append("rect")
		  .attr("width", 30)
		  .attr("height", 20)
		  .attr("fill", "white")
		  .style("opacity", 0.5);         
		
		tooltip2.append("text")
		  .attr("x", 15)
		  .attr("dy", "1.2em")
		  .style("text-anchor", "middle")
		  .attr("font-size", "12px")
		  .attr("font-weight", "bold");
		  

function draw_barchart1(data_in){
			var dataset=data_in;
			console.log("data:", dataset); 		  
			//console.log("data.0:", dataset[0]); 	
			//console.log(dataset[0].cmonth); 	
			
			//domain帶入的是一串陣列值，陣列的第一個值會對應到第一個元素的的輸出範圍，第二個則會對應到第二個範圍，依此類推。
			//d3.map用來拆Object為陣列
			console.log(d3.map(dataset,function(d) { return d.cmonth; }));
			console.log(d3.map(dataset, function(d) { return d.cnt; }));
			x2.domain(d3.map(dataset,function(d) { return d.cmonth; }));
			y2.domain([0, d3.map(dataset, function(d) { return d.cnt; })]);
			
			svg_barchart.transition();

		  console.log(dataset);
		  var bars = svg_barchart.selectAll(".bar").data(dataset, function(d) { return d.cmonth; }) ;
		  
		  bars.exit()
			.transition()
			  .duration(300)
			.attr("y", y2(0))
			.attr("height", height2 - y2(0))
			.style('fill-opacity', 1e-6)
			.remove();
		  
		  bars.enter().append("rect")
			.attr("class", "bar");
		  
		  bars.transition().duration(1000)
			  .attr("x", function(d) { return x2(d.cmonth); })
			  .attr("width", x2.bandwidth())
			  .attr("y", function(d) { return y2(d.cnt); })
			  .attr("height", function(d) { return height2 - y2(d.cnt); })
			  .attr('fill',function(d,i){
					return color(d.cmonth);//根據label上色，不過若是css的Bar有定義，就會以css優先
			  });
};

d3.csv("data/week.csv", type, 
function(error, data) {
  if (error) throw error;
  x2.domain(data.map(function(d) { return d.label; }));
  y2.domain([0, d3.max(data, function(d) { return d.count; })]);

 // console.log(data); 	
  
  svg_barchart.append("g")
      .attr("class", "x axis")
	  .attr("transform", "translate(0,"+ height2 +")")
      .call(xAxis2)
	.append("text")
	  .attr("x", 7)
      .attr("dy", ".31em")
      .style("text-anchor", "end")
	  .text("label");
	  
  svg_barchart.append("g")
      .attr("class", "y axis")
      .call(yAxis2)
    .append("text")
      .attr("transform", "translate(100, 100) rotate(-90)")
      .attr("y", 7)
      .attr("dy", ".31em")
      .style("text-anchor", "end")
      .text("count");
  
  svg_barchart.selectAll(".bar")
      .data(data)
    .enter().append("rect")
      .attr("class", "bar")
      .attr("x", function(d) { return x2(d.label); })
	  .attr("width", x2.bandwidth())// Returns the width of each band the width of each band
      .attr("y", function(d) { return y2(d.count); })
      .attr("height", function(d) { return height2 - y2(d.count); })
	  .attr('fill',function(d,i){
			return color(d.label);//根據label上色，不過若是css的Bar有定義，就會以css優先
	  });

	var rect2 = svg_barchart.selectAll("rect")
		.on("mouseover", function() { tooltip2.style("display", 'block'); })
		.on("mouseout", function() { tooltip2.style("display", "none"); })
		.on("mousemove", function(d) {
			var xPosition = d3.mouse(this)[0] - 15;
			var yPosition = d3.mouse(this)[1] - 25;
			tooltip2.attr("transform", "translate(" + xPosition + "," + yPosition + ")");
			tooltip2.select("text").text(d.label + ' ' + d.count);
			tooltip2.style('top', (d3.event.layerY + 10) + 'px')
					  .style('left', (d3.event.layerX + 10) + 'px');//調整讓tooptip不要一直顯示在同一個位置，讓D3去偵測滑鼠在此chart上的位置
		});
	//圖例
	var legend = svg_barchart.selectAll('.legend')
			  .data(color.domain()) // 
			  .enter()
			  .append('g')
			  .attr('class', 'legend_barchart')
			  .attr('transform', function(d, i) { //定位legend
				var height = legendRectSize + legendSpacing;
				var offset =  height * color.domain().length / 2;
				var horz = -2 * legendRectSize;
				var vert = i * height - offset;
				return 'translate(' + horz + ',' + vert + ')';
			  });
	  //圖例位置
	  legend.append('rect')
			  .attr("x", width2 - 100)	
			  .attr('width', legendRectSize)
			  .attr('height', legendRectSize)
			  .style('fill', color)
			  .style('stroke', color);  
	 legend.append('text')
			  .attr('x', width2 - 100+legendRectSize + legendSpacing)
			  .attr('y', legendRectSize - legendSpacing)
			  .text(function(d) { return d; });
});

function type(d) {
  d.count = +d.count;
  return d;
}