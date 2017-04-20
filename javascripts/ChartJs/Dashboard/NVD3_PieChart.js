d3.csv("data/景點人數.csv", 
function(error, data) {
  if (error) throw error;
    console.log(data);
	//Regular pie chart example
	nv.addGraph(function() {
	  var chart = nv.models.pieChart()
		  .x(function(d) { return d.spot })
		  .y(function(d) { return d.cnt })
		  .showLabels(true);

		d3.select("#PieChart1 svg")
			.datum(data)
			.transition().duration(350)
			.call(chart);

	  return chart;
	});

	//Donut chart example
	nv.addGraph(function() {
	  var chart = nv.models.pieChart()
		  .x(function(d) { return d.spot })
		  .y(function(d) { return d.cnt })
		  .showLabels(true)     //Display pie labels
		  .labelThreshold(.05)  //Configure the minimum slice size for labels to show up
		  .labelType("percent") //Configure what type of data to show in the label. Can be "key", "value" or "percent"
		  .donut(true)          //Turn on Donut mode. Makes pie chart look tasty!
		  .donutRatio(0.35)     //Configure how big you want the donut hole size to be.
		  ;

		d3.select("#PieChart2 svg")
			.datum(data)
			.transition().duration(350)
			.call(chart);

	  return chart;
	});
});