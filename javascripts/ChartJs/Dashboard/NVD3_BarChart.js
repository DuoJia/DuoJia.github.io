//預載資料
nv.addGraph(function() {
	var barchart = nv.models.discreteBarChart()
	  .x(function(d) { return d.label })    //Specify the data accessors.
	  .y(function(d) { return d.value })
	  .staggerLabels(true)    //Too many bars and not enough room? Try staggering labels.
	  //.tooltips(false)        //Don't show tooltips
	  .showValues(true)       //...instead, show the bar value right on top of each bar.
	  .duration(350)
	;
    d3.select('#BarChart svg')
	  .datum(exampleData())
	  .call(barchart);
	  nv.utils.windowResize(barchart.update);

				  return barchart;
});

function handleFileSelect_Barchart(evt) {
	var file = evt.target.files[0];
	//papa-parse使用來parse這個檔案
	Papa.parse(file, {
			  header: true,
			  dynamicTyping: true,
			  delimiter:",",
			  complete: function(results) {
				  
				nv.addGraph(function() {
				  var barchart = nv.models.discreteBarChart()
					  .x(function(d) { return d.label })    //Specify the data accessors.
					  .y(function(d) { return d.value })
					  .staggerLabels(true)    //Too many bars and not enough room? Try staggering labels.
					  //.tooltips(false)        //Don't show tooltips
					  .showValues(true)       //...instead, show the bar value right on top of each bar.
					  .duration(350)
					  ;
				  barchart.xAxis     //Chart x-axis settings
					  .axisLabel('Which Month');

				  barchart.yAxis     //Chart y-axis settings
					  .axisLabel('Amounts of tourists (people)');
					  
				  d3.select('#BarChart svg')
					  .datum(bardata_tran(results.data))
					  .call(barchart);

				  nv.utils.windowResize(barchart.update);

				  return barchart;
				});
			}
	});
};
function bardata_tran(data) {
	console.log(data);
	var returnValue=[];
	var values=[];
	for (var j = 0 ; j < data.length ; j++){
		console.log(data[j].cmonth);
		values.push({ label : data[j].cmonth, value : data[j].cnt});
	}
	console.log(values);
	returnValue.push({key : "大溪2016總人數", values: values})
	
	console.log(returnValue);
	return returnValue;
}


//Each bar represents a single discrete quantity.
function exampleData() {
 return  [ 
    {
      key: "Cumulative Return",
      values: [
        { 
          "label" : "A Label" ,
          "value" : -29.765957771107
        } , 
        { 
          "label" : "B Label" , 
          "value" : 0
        } , 
        { 
          "label" : "C Label" , 
          "value" : 32.807804682612
        } , 
        { 
          "label" : "D Label" , 
          "value" : 196.45946739256
        } , 
        { 
          "label" : "E Label" ,
          "value" : 0.19434030906893
        } , 
        { 
          "label" : "F Label" , 
          "value" : -98.079782601442
        } , 
        { 
          "label" : "G Label" , 
          "value" : -13.925743130903
        } , 
        { 
          "label" : "H Label" , 
          "value" : -5.1387322875705
        }
      ]
    }
  ]

}