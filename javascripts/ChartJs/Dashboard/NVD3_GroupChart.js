//Data 預載
nv.addGraph(function() {
    var chart = nv.models.multiBarChart()
      .duration(350)
      .reduceXTicks(true)   //If 'false', every single x-axis tick label will be rendered.
      .rotateLabels(0)      //Angle to rotate x-axis labels.
      .showControls(true)   //Allow user to switch between 'Grouped' and 'Stacked' mode.
      .groupSpacing(0.1)    //Distance between each group of bars.
    ;
		chart.xAxis
			.tickFormat(d3.format(',f'));

		chart.yAxis
			.tickFormat(d3.format(',.1f'));

		d3.select('#GroupBarChart svg')
			.datum(exampleData())
			.call(chart);

		nv.utils.windowResize(chart.update);

		return chart;
});
	
function handleFileSelect_groupchart(evt) {
	var file = evt.target.files[0];
	var inputdata = [];
	Papa.parse(file, {
			  header: true,
			  dynamicTyping: true,
			  delimiter:",",
			  complete: function(results) {
			
				nv.addGraph(function() {
				var chart = nv.models.multiBarChart()
				  .duration(350)
				  .reduceXTicks(true)   //If 'false', every single x-axis tick label will be rendered.
				  .rotateLabels(0)      //Angle to rotate x-axis labels.
				  .showControls(true)   //Allow user to switch between 'Grouped' and 'Stacked' mode.
				  .groupSpacing(0.1)    //Distance between each group of bars.
				;
					chart.xAxis
						.axisLabel('Which Spot');
					chart.yAxis
						.axisLabel('Avg stay hours (hour)')
						.tickFormat(d3.format(',.3f'));
					d3.select('#GroupBarChart svg')
						.datum(data_tran(results.data))
						.call(chart);

					nv.utils.windowResize(chart.update);

					return chart;
				});
			 }
	});


}
//Generate some nice data.
function exampleData() {
  return stream_layers(3,10+Math.random()*100,.1).map(function(data, i) {
    return {
      key: 'Stream #' + i,
      values: data
    };
  });
}

function data_tran(data) {
	console.log(data);
	var keyDistinct = 1;
	var returnValue=[];
	
	for (var i=0;i<data.length;i++){
		if (i == 0){}
		else if (data[i].datetype != data[i-1].datetype) {
			keyDistinct = keyDistinct+1;
			console.log("KD:",keyDistinct);
			console.log(data[i].datetype,data[i-1].datetype);
		}
		else {}
	}
	console.log(data.length);
	console.log(keyDistinct);
	
	for(var i=0;i < keyDistinct; i++){
		var values=[];
		for (var j=i * (data.length/keyDistinct) ; j<(i+1)*(data.length/keyDistinct) ; j++){
			console.log(data[j].spot);
			values.push({ x : data[j].spot, y : data[j].avg});
		}
		console.log(values);
		returnValue.push({key : data[(i*(data.length/keyDistinct))].datetype, values: values})
	}
	console.log(returnValue);
	return returnValue;
}