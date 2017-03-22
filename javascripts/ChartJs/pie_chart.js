	(function(d3) {
			'use strict';
		/*
		var dataset = [
		  { label: 'Abulia', count: 10 },
		  { label: 'Betelgeuse', count: 20 },
		  { label: 'Cantaloupe', count: 30 },
		  { label: 'Dijkstra', count: 40 }];
		*/
		var width = 360;
		var height = 360;
		var radius = Math.min(width,height)/2;
		var donutWidth = 75;
		//定義圖例legend形狀
		var legendRectSize = 18;
		var legendSpacing = 4;
		
		var color = d3.scaleOrdinal(d3.schemeCategory20b);
		//var color = d3.scaleOrdinal().range(["b33040", "#d25c4d", "#f2b447", "#d9d574"]);
		
		var svg = d3.select('#chart')
		.append('svg') //附加svg到我們剛剛select id為#chart的物件上
		  .attr('width', width) 
		  .attr('height', height)
		.append('g') //附加g到svg上
		  .attr('transform', 'translate(' + (width / 2) +  ',' + (height / 2) + ')');
		  //transform是位移，translate是在X,Y軸平移，在原本的座標上加上...
		  //http://www.oxxostudio.tw/articles/201409/svg-19-transform.html 
		var arc = d3.arc()
		  //.innerRadius(0) //內圓半徑
		  .innerRadius(radius - donutWidth) //donut 甜甜圈pie圖
		  .outerRadius(radius);//上面有定義 長寬一半
		//將data的 count欄值給value
		var pie = d3.pie()
			.value(function(d){return d.count;})
			.sort(null); //default descending
		
		var tooltip = d3.select('#chart')          
		  .append('div')  //附加一個div到tooltip(#chart)    
		  .attr('class', 'tooltip');                

		tooltip.append('div')                    
		  .attr('class', 'label');                   

		tooltip.append('div')                    
		  .attr('class', 'count');             

		tooltip.append('div')                 
		  .attr('class', 'percent');        
		
		//讀檔的話，加在這裡 -- 括弧延伸很長，一直到程式碼末
		d3.csv('data/week.csv', function(error, dataset) {  
				dataset.forEach(function(d) {                    
					d.count = +d.count;       
					d.enabled = true; //新增一個property: enabled，好讓程式知道哪些On/Off
				}); 
			
			var path = svg.selectAll('path') //挑svg裡面，g裡面的path
				.data(pie(dataset)) //將選擇的path和data建立關聯
				.enter() //建立資料的位置 placeholder
				.append('path') //用path取代剛剛建立的placeholder
				.attr('d',arc) //定義attribute 'd' 為arc
				.attr('fill',function(d,i){
					return color(d.data.label);//定義attribute 'color' 為填滿color
				})		
				.each(function(d){
					this._current = d;//將path加入此property是necessary for a smooth animation
				});
			//事件 當滑鼠滑到物件上時：
			path.on('mouseover', function(d) { 
				var total = d3.sum(dataset.map(function(d) {
					return (d.enabled) ? d.count : 0 ; //如果enabled就回傳d.count，若是disable就回傳0
				}));
				/*tooptip的傳值*/
				var percent = Math.round(1000 * d.data.count / total) / 10;
				tooltip.select('.label').html(d.data.label);
				tooltip.select('.count').html(d.data.count);
				tooltip.select('.percent').html(percent + '%');
				tooltip.style('display', 'block');  //block為css display的顯示
			});                               
			path.on('mouseout', function(d) {
				tooltip.style('display', 'none');  //離開的時候要將tootip設為none 不顯示
			});
			path.on('mousemove', function(d) {
				tooltip.style('top', (d3.event.layerY + 10) + 'px')
				.style('left', (d3.event.layerX + 10) + 'px');
			}); //調整讓tooptip不要一直顯示在同一個位置，讓D3去偵測滑鼠在此chart上的位置
			
			//legend 圖例
			var legend = svg.selectAll('.legend')
			  .data(color.domain()) // 在建立path時，有用Color(d.data.label)填滿，所以會回傳an array of labels 
			  .enter()
			  .append('g')
			  .attr('class', 'legend')
			  .attr('transform', function(d, i) { //定位legend
				var height = legendRectSize + legendSpacing;
				var offset =  height * color.domain().length / 2;
				var horz = -2 * legendRectSize;
				var vert = i * height - offset;
				return 'translate(' + horz + ',' + vert + ')';
			  });
			legend.append('rect')
			  .attr('width', legendRectSize)
			  .attr('height', legendRectSize)
			  .style('fill', color)
			  .style('stroke', color)
			  .on('click',function(label){
			    //在圖例上新增點擊動作
					var rect = d3.select(this); //表是被點擊的那個rect
					var enabled= true; //預設=TRUE
					var totalEnabled = d3.sum(dataset.map(function(d) {
						return (d.enabled) ? 1 : 0; //計算有幾個是enabled的 回傳一個sum值，方便下面進行控制
					}));
					if (rect.attr('class') === 'disabled') {
						rect.attr('class', ''); //
					} else {
						if (totalEnabled < 2) return;
						rect.attr('class', 'disabled');
						enabled = false; //怕使用者惡搞，如果小於兩個就要禁止使用者再Disable，畫不出來
						//就將enabled開關改成不可變更
					}
					//以下重新定義pie獲得dataset的值
					pie.value(function(d) {
						if (d.label === label) d.enabled = enabled;
						return (d.enabled) ? d.count : 0;
					});
					path = path.data(pie(dataset)); //update path的值
					path.transition()
					.duration(750)
					.attrTween('d', function(d) { //第一個d表示我們要用來動畫的參數，在此為更新後的data point
						  var interpolate = d3.interpolate(this._current, d);
						  this._current = interpolate(0);
						  return function(t) {
							  return arc(interpolate(t));
						  };
					});
			  });
			legend.append('text')
			  .attr('x', legendRectSize + legendSpacing)
			  .attr('y', legendRectSize - legendSpacing)
			  .text(function(d) { return d; });
		})
	})(window.d3);