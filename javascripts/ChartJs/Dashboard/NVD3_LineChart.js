/*These lines are all chart setup.  Pick and choose which chart features you want to utilize. */
//資料預載
nv.addGraph(function() {
	var linechart = nv.models.lineChart()
								.margin({left: 100})  //Adjust chart margins to give the x-axis some breathing room.
								.useInteractiveGuideline(true)  //We want nice looking tooltips and a guideline!
								.duration(350)  //how fast do you want the lines to transition?
								.showLegend(true)       //Show the legend, allowing users to turn on/off line series.
								.showYAxis(true)        //Show the y-axis
								.showXAxis(true)        //Show the x-axis
								;

	linechart.xAxis     //Chart x-axis settings
					  .axisLabel('Which Month');
					  //.tickFormat(d3.format(',r'));

	linechart.yAxis     //Chart y-axis settings
					  .axisLabel('Amounts of tourists (people)');
					  //.tickFormat(d3.format('.00f'));

	d3.select('#LineChart svg')    //Select the <svg> element you want to render the chart in.   
					  .datum(sinAndCos())         //Populate the <svg> element with chart data...
					  .call(linechart);          //Finally, render the chart!
				  //console.log(results.data);
				  //console.log(sinAndCos());
				  //Update the chart when window resizes.
	nv.utils.windowResize(function() { linechart.update() });
				  return linechart;
});
//讀檔
function handleFileSelect_Linechart(evt) {
	var file = evt.target.files[0];
	//papa-parse使用來parse這個檔案
	Papa.parse(file, {
			  header: true,
			  dynamicTyping: true,
			  delimiter:",",
			  complete: function(results) {
				
				nv.addGraph(function() {
				  var linechart = nv.models.lineChart()
								.margin({left: 100})  //Adjust chart margins to give the x-axis some breathing room.
								.useInteractiveGuideline(true)  //We want nice looking tooltips and a guideline!
								.duration(350)  //how fast do you want the lines to transition?
								.showLegend(true)       //Show the legend, allowing users to turn on/off line series.
								.showYAxis(true)        //Show the y-axis
								.showXAxis(true)        //Show the x-axis
								;

				  linechart.xAxis     //Chart x-axis settings
					  .axisLabel('Which Month');
					  //.tickFormat(d3.format(',r'));

				  linechart.yAxis     //Chart y-axis settings
					  .axisLabel('Amounts of tourists (people)');
					  //.tickFormat(d3.format('.00f'));

				  d3.select('#LineChart svg')    //Select the <svg> element you want to render the chart in.   
					  .datum(data_tran(results.data))         //Populate the <svg> element with chart data...
					  .call(linechart);          //Finally, render the chart!
				  //console.log(results.data);
				  //console.log(sinAndCos());
				  //Update the chart when window resizes.
				  nv.utils.windowResize(function() { linechart.update() });
				  return linechart;
				});
			}
	});
};


/**************************************
 * Simple test data generator
 */
function sinAndCos() {
  var sin = [],sin2 = [],
      cos = [];

  //Data is represented as an array of {x,y} pairs.
  for (var i = 0; i < 100; i++) {
    sin.push({x: i, y: Math.sin(i/10)});
    sin2.push({x: i, y: Math.sin(i/10) *0.25 + 0.5});
    cos.push({x: i, y: .5 * Math.cos(i/10)});
  }

  //Line chart data should be sent as an array of series objects.
  return [
    {
      values: sin,      //values - represents the array of {x,y} data points
      key: 'Sine Wave', //key  - the name of the series.
      color: '#ff7f0e'  //color - optional: choose your own line color.
    },
    {
      values: cos,
      key: 'Cosine Wave',
      color: '#2ca02c'
    },
    {
      values: sin2,
      key: 'Another sine wave',
      color: '#7777ff',
      area: true      //area - set to true if you want this line to turn into a filled area chart.
    }
  ];
}

function data_tran(data) {
	console.log(data);
	var keyDistinct = 1;
	var returnValue=[];
	
	for (var i=0;i<data.length;i++){
		if (i == 0){}
		else if (data[i].spot != data[i-1].spot) {
			keyDistinct = keyDistinct+1;
			//console.log(keyDistinct);
			//console.log(data[i].spot,data[i-1].spot);
		}
		else {}
	}
	//console.log(data.length);
	//console.log(keyDistinct);
	
	for(var i=0;i < keyDistinct; i++){
		var values=[];
		for (var j=i * (data.length/keyDistinct) ; j<(i+1)*(data.length/keyDistinct) ; j++){
			//console.log(data[j].cmonth);
			values.push({ x : data[j].cmonth, y : data[j].cnt});
		}
		//console.log(values);
		returnValue.push({key : data[(i*(data.length/keyDistinct))].spot, values: values})
	}
	//console.log(returnValue);
	return returnValue;
}

