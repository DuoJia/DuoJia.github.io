//預載資料
nv.addGraph(function() {
	var chart = nv.models.discreteBarChart()
	  .x(function(d) { return d.label })    //Specify the data accessors.
	  .y(function(d) { return d.value })
	  .staggerLabels(true)    //Too many bars and not enough room? Try staggering labels.
	  //.tooltips(false)        //Don't show tooltips
	  .showValues(true)       //...instead, show the bar value right on top of each bar.
	  .duration(350)
	;
    d3.select('#chart svg')
	  .datum(BarChartExampleData())
	  .call(chart);
	  nv.utils.windowResize(chart.update);

				  return chart;
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
				  var chart = nv.models.discreteBarChart()
					  .x(function(d) { return d.label })    //Specify the data accessors.
					  .y(function(d) { return d.value })
					  .staggerLabels(true)    //Too many bars and not enough room? Try staggering labels.
					  //.tooltips(false)        //Don't show tooltips
					  .showValues(true)       //...instead, show the bar value right on top of each bar.
					  .duration(350)
					  ;
				  chart.xAxis     //Chart x-axis settings
					  .axisLabel('Which Month');

				  chart.yAxis     //Chart y-axis settings
					  .axisLabel('Amounts of tourists (people)');
					  
				  d3.select('#chart svg')
					  .datum(bardata_tran(results.data))
					  .call(chart);

				  nv.utils.windowResize(chart.update);

				  return chart;
				});
			}
	});
};
function bardata_tran(data) {
	console.log(data);
	var returnValue=[];
	var values=[];
	
	// 不同的Key值有幾個
	var keyDistinct = 1;
	for (var i=0;i<data.length;i++){
		if (i == 0){}
		else if (data[i].cmonth != data[i-1].cmonth) {
			keyDistinct = keyDistinct+1;
			console.log("KD:",keyDistinct);
			console.log(data[i].cmonth,data[i-1].cmonth);
		}
		else {}
	}

	for (var i = 0 ; i < data.length/keyDistinct ; i++){
		var cntsum=[];
		for( var j = 0; j < data.length; j++){
			if (data[i].cmonth ==  data[j].cmonth){
				cntsum[i] = cntsum[i] + data[j].cnt;
			}
		}
		console.log(data[i].cmonth);
		console.log(cntsum[i]);
		values.push({ label : data[i].cmonth, value : cntsum[i]});
	}
	console.log(values);
	returnValue.push({key : "大溪2016總人數", values: values})
	
	console.log(returnValue);
	return returnValue;
}


//Each bar represents a single discrete quantity.
function BarChartExampleData() {
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