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
	  .datum(BarChartExampleData())
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
	var cntsum=[];
	// 不同的Key值有幾個
	var keyDistinct;
	var KDV = [];
	for (var i=0;i<data.length;i++){
		KDV[i] = data[i].cmonth;
		keyDistinct = KDV.filter(function(itm, i, KDV) {
			return i == KDV.indexOf(itm);
		});
	}
	console.log(keyDistinct); //會印出 Distinct 的值有哪一些
	console.log(keyDistinct.length);
	console.log(data.length)
	
	//按照cmonth 相加值
	var holder = {};
	data.forEach(function (d) {
		if(holder.hasOwnProperty(d.cmonth)) {
		   holder[d.cmonth] = holder[d.cmonth] + d.cnt;
		} else {       
		   holder[d.cmonth] = d.cnt;
		}
	});
	
	for(var prop in holder) {
		values.push({label: prop, value: holder[prop]});   
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