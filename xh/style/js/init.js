var chart_model = chart_model ? chart_model : 0;
var chart_model_config={};
chart_model_config[0] ={
    'Crosshair_x_text': true,
    'Crosshair_y_text': true,
    'Crosshair':[
            {
              width:1,
              color:"#333",  
              dashStyle:"longdash",
              zIndex:5
              ,label: { 
                  style: {
                    color: '#fff'
                  },
                  text: '111' , // Content of the label. 
                  align: 'right', // Positioning of the label. 
                  x: +50 
                }
            },
            {
              width:1,
              color:"#333",  
              dashStyle:"longdash",
              zIndex:5
            }
      ]
};
chart_model_config[1] ={
    'Crosshair_x_text': false,
    'Crosshair_y_text': false,
    'Crosshair':[
            {

              width:1,
              color:"#ccc",  
              zIndex:5
              ,label: { 
                  style: {
                    color: '#fff'
                  },
                  text: '' , // Content of the label. 
                  align: 'right', // Positioning of the label. 
                  x: +50 
                }
            }
      ]
};


function get_alldata_url(interval){
  switch(interval){
      case '1':
      case '5':
      case '15':
      case '30':
      case '1h':
      case '4h':
          return url_h;
          break;
      case '1d':
      case '1w':
      case '1m':
          return url_d;
  }
}
var alldata_url = get_alldata_url(interval);
$(function() {
var UNDEFINED,
  VISIBLE = 'visible';
/**
 * Check for number
 * @param {Object} n
 */
function isNumber(n) {
  return typeof n === 'number';
}
function defined(obj) {
  return obj !== UNDEFINED && obj !== null;
}
/**
 * Return the first value that is defined. Like MooTools' $.pick.
 */
function pick() {
  var args = arguments,
    i,
    arg,
    length = args.length;
  for (i = 0; i < length; i++) {
    arg = args[i];
    if (arg !== UNDEFINED && arg !== null) {
      return arg;
    }
  }
}


$.extend(Highcharts.Tick.prototype,{

  /**
   * Get the x and y position for ticks and labels //重构Y轴对齐 2015.1.29
   */
  getPosition: function (horiz, pos, tickmarkOffset, old) {
    var axis = this.axis,
      chart = axis.chart,
      cHeight = (old && chart.oldChartHeight) || chart.chartHeight;

        if(!horiz){
            var ohlc = axis.series[0].yData;
            if(chart_type == 'candlestick'){
              var Close_price =ohlc[ohlc.length-1][3];
            }else{
              var Close_price =ohlc[ohlc.length-1];
            }
            //Y轴对齐
            if(  ! Close_price.toString().split(".")[1] || Close_price.toString().split(".")[1].length < 2 ){
              Close_price = Close_price.toFixed(2);
            }
            var Close_price_width = Close_price.toString().visualLength(12);
          }
        return (
          {
          x: horiz ?
            axis.translate(pos + tickmarkOffset, null, null, old) + axis.transB :
            // axis.left + axis.offset + (axis.opposite ? ((old && chart.oldChartWidth) || chart.chartWidth) - axis.right - axis.left : 0),
              chart.plotSizeX+chart.plotLeft+Close_price_width+3,

          y: horiz ?
            cHeight - axis.bottom + axis.offset - (axis.opposite ? axis.height : 0) :
            cHeight - axis.translate(pos + tickmarkOffset, null, null, old) - axis.transB
          }

        );
    
    return {
      x: horiz ?
        axis.translate(pos + tickmarkOffset, null, null, old) + axis.transB :
        axis.left + axis.offset + (axis.opposite ? ((old && chart.oldChartWidth) || chart.chartWidth) - axis.right - axis.left : 0),

      y: horiz ?
        cHeight - axis.bottom + axis.offset - (axis.opposite ? axis.height : 0) :
        cHeight - axis.translate(pos + tickmarkOffset, null, null, old) - axis.transB
    };

  }
});

  $.extend(Highcharts.Series.prototype, {

    translate: function () {
      if (!this.processedXData) { // hidden series
        this.processData();
      }
      this.generatePoints();
      var series = this,
        options = series.options,
        stacking = options.stacking,
        xAxis = series.xAxis,
        categories = xAxis.categories,
        yAxis = series.yAxis,
        points = series.points,
        dataLength = points.length,
        hasModifyValue = !!series.modifyValue,
        i,
        pointPlacement = options.pointPlacement,
        dynamicallyPlaced = pointPlacement === 'between' || isNumber(pointPlacement),
        threshold = options.threshold;

      // Translate each point
      for (i = 0; i < dataLength; i++) {
        var point = points[i],
          xValue = point.x,
          yValue = point.y,
          yBottom = point.low,
          stack = stacking && yAxis.stacks[(series.negStacks && yValue < threshold ? '-' : '') + series.stackKey],
          pointStack,
          stackValues;

        // Discard disallowed y values for log axes
        if (yAxis.isLog && yValue <= 0) {
          point.y = yValue = null;
        }

        // Get the plotX translation
        point.plotX = xAxis.translate(xValue, 0, 0, 0, 1, pointPlacement, this.type === 'flags'); // Math.round fixes #591


        // Calculate the bottom y value for stacked series
        if (stacking && series.visible && stack && stack[xValue]) {

          pointStack = stack[xValue];
          stackValues = pointStack.points[series.index + ',' + i];
          yBottom = stackValues[0];
          yValue = stackValues[1];

          if (yBottom === 0) {
            yBottom = pick(threshold, yAxis.min);
          }
          if (yAxis.isLog && yBottom <= 0) { // #1200, #1232
            yBottom = null;
          }

          point.total = point.stackTotal = pointStack.total;
          point.percentage = pointStack.total && (point.y / pointStack.total * 100);
          point.stackY = yValue;

          // Place the stack label
          pointStack.setOffset(series.pointXOffset || 0, series.barW || 0);

        }

        // Set translated yBottom or remove it
        point.yBottom = defined(yBottom) ?
          yAxis.translate(yBottom, 0, 1, 0, 1) :
          null;

        // general hook, used for Highstock compare mode
        if (hasModifyValue) {
          yValue = series.modifyValue(yValue, point);
        }

        // Set the the plotY value, reset it for redraws
        point.plotY = (typeof yValue === 'number' && yValue !== Infinity) ?
          //mathRound(yAxis.translate(yValue, 0, 1, 0, 1) * 10) / 10 : // Math.round fixes #591
          yAxis.translate(yValue, 0, 1, 0, 1) :
          UNDEFINED;
        point.plotYclose = (typeof point.close === 'number' && point.close !== Infinity) ?
          //mathRound(yAxis.translate(yValue, 0, 1, 0, 1) * 10) / 10 : // Math.round fixes #591
          yAxis.translate(point.close, 0, 1, 0, 1) :
          UNDEFINED;

            // Set client related positions for mouse tracking
        point.clientX = dynamicallyPlaced ? xAxis.translate(xValue, 0, 0, 0, 1) : point.plotX; // #1514

        point.negative = point.y < (threshold || 0);

        // some API data
        point.category = categories && categories[point.x] !== UNDEFINED ?
          categories[point.x] : point.x;

      }

      // now that we have the cropped data, build the segments
      series.getSegments();
    }
  });

  $.extend(Highcharts.Axis.prototype,{
    drawCrosshair: function (e, point) {
        if (!this.crosshair) { return; }// Do not draw crosshairs if you don't have too.

        if ((defined(point) || !pick(this.crosshair.snap, true)) === false) {
          this.hideCrosshair();
          return;
        }
        var path,
          options = this.crosshair,
          animation = options.animation,
          pos;

        // Get the path
        if (!pick(options.snap, true)) {
          pos = (this.horiz ? e.chartX - this.pos : this.len - e.chartY + this.pos);
        } else if (defined(point)) {
          /*jslint eqeq: true*/
          if(chart_type == 'candlestick'){
            // pos = (this.chart.inverted != this.horiz) ? point.plotX : this.len - point.plotYclose;
            pos = (this.chart.inverted != this.horiz) ? point.plotX : (this.len - point.plotYclose);
     
          }else{
            // pos = (this.chart.inverted != this.horiz) ? point.plotX : this.len - point.plotY;
            pos = (this.chart.inverted != this.horiz) ? point.plotX : this.len - point.plotY;
          }
          /*jslint eqeq: false*/
        }
       if(chart_type == 'candlestick'){
        pointClose= point.close;
        coordinateY = point.plotYclose;
       }else{

        pointClose= point.y;
        coordinateY = point.plotY;

       }
       pointClose = parseFloat(pointClose)

       pointClose = pointClose.toFixed(2);
    /*  if(pointClose.length)
      switch( pointClose.length){
        case 4:
          pointClose= '<font color="#27415E">_</font>'+pointClose+'';
        case 5:
          pointClose= '<font color="#27415E">_</font>'+pointClose;
        case 6:
          pointClose= '<font color="#27415E">_</font>'+pointClose;
      }*/

      if(this.chart.inverted == this.horiz){
        if( chart_model_config[chart_model]['Crosshair_y_text'] ){
          $('#rect_Crosshair_y').remove();
          $('#text_Crosshair_y').remove();
          

          this.chart.renderer.rect(this.chart.plotSizeX+this.chart.plotLeft , coordinateY, 50, 20, 0).attr({
                fill: '#27415E',
                        zIndex: 7,
                        id:'rect_Crosshair_y'
                      }).add();

          this.chart.renderer.text(pointClose, this.chart.plotSizeX+this.chart.plotLeft , coordinateY+15)
              .attr({
                  id:'text_Crosshair_y',
                  // rotation: -25,
                  zIndex:8
              })
              .css({
                  color: '#fff'
                  // ,fontSize: '16px'
              })
              .add();

        }

      }else{
        if( chart_model_config[chart_model]['Crosshair_x_text'] ){
          $('#rect_Crosshair_x').remove();
          $('#text_Crosshair_x').remove();
          date = Highcharts.dateFormat("%Y/%m/%d %H:%M",point.x,false);


          this.chart.renderer.rect(point.plotX +this.chart.plotLeft , this.chart.plotSizeY+this.chart.plotTop , 115, 20, 0).attr({
          fill: '#27415E',
                  zIndex: 7,
                  id:'rect_Crosshair_x'
                }).add();

            this.chart.renderer.text(date, point.plotX +this.chart.plotLeft +2, this.chart.plotSizeY+this.chart.plotTop+15 )
              .attr({
                  id:'text_Crosshair_x',
                  // rotation: -25,
                  zIndex:8
              })
              .css({
                  color: '#fff'
                  // ,fontSize: '16px'
              })
              .add();
        }
      }



        if (this.isRadial) {
          path = this.getPlotLinePath(this.isXAxis ? point.x : pick(point.stackY, point.y));
        } else {
          path = this.getPlotLinePath(null, null, null, null, pos);
        }

        if (path === null) {
          this.hideCrosshair();
          return;
        }

        // Draw the cross
        if (this.cross) {
          this.cross
            .attr({ visibility: VISIBLE })[animation ? 'animate' : 'attr']({ d: path }, animation);
        } else {
          var attribs = {
            'stroke-width': options.width || 1,
            stroke: options.color || '#C0C0C0',
            zIndex: options.zIndex || 2
          };
          if (options.dashStyle) {
            attribs.dashstyle = options.dashStyle;
          }
          this.cross = this.chart.renderer.path(path).attr(attribs).add();
        }
      },
      hideCrosshair: function () {
        if (this.cross) {
          $('#rect_Crosshair_x').remove();
          $('#text_Crosshair_x').remove();
          $('#rect_Crosshair_y').remove();
          $('#text_Crosshair_y').remove();
          this.cross.hide();
        }
      }
  });

  $.extend(Highcharts.Pointer.prototype,{
    getIndex: function (e) {
        var chart = this.chart;
        width = $(window).width();
        height = $(window).height();
        if (width < height) {
          return chart.inverted ? 
            e.chartX - chart.plotLeft:
            $(window).width() - (chart.plotHeight + chart.plotTop  - e.chartY+50 )
          ;
        }else{
          return chart.inverted ? 
          chart.plotHeight + chart.plotTop - e.chartY : 
          e.chartX - chart.plotLeft;  
        }

      }


  });










});








$(function() {

    //获取字宽
    $('body').append('<span id="ruler" style="white-space: nowrap;font-family: \'Lucida Grande\', \'Lucida Sans Unicode\', Arial, Helvetica, sans-serif;"></span>');
    String.prototype.visualLength = function(size){ 
      var ruler = $("#ruler"); 
      $("#ruler").css('font-size',size+'px');
      ruler.text(this); 
      var ruler_width = ruler[0].offsetWidth; 
      ruler.text('');
      return ruler_width;
    }




  $(container).attr('code',code);

  $.ajax({
    url :alldata_url,
    dataType : 'jsonp',

    data : {
        type : chart_type,
                code : code,
                rows : rows,
                interval : interval
            },
    success: function(result){
      loadData(result);
    }
  });
});   

var iosocket = io.connect(socket_url,{multiplex:false});



function loadData(result) {
  ohlc = sort_data(result);


  Highcharts.setOptions({ global : { useUTC : false } });
 
  // create the chart
  $(container).highcharts('StockChart', { legend:{width:100},
    chart : {
      plotBorderWidth:1,plotBorderColor:'#eee',
      events : {
        load : function() {
          var series = this.series[0];
          var series1 = this.series[1];
          var yAxis = this.yAxis[0];
          var renderer = this.renderer;
          if(chart_type == 'candlestick'){
            var Close_price =ohlc[ohlc.length-1][4];
          }else{
            var Close_price =ohlc[ohlc.length-1][1];
          }

          SChart.nowLine(Close_price);

          //Y轴对齐
          if(  ! Close_price.toString().split(".")[1] || Close_price.toString().split(".")[1].length < 2 ){
            Close_price = Close_price.toFixed(2);
          }
          var Close_price_width = Close_price.toString().visualLength(12);
          
          yaxis_position(chart.plotSizeX+chart.plotLeft+Close_price_width+3);
          //Y轴对齐 end

          if(chart_type == 'candlestick'){
            var update_time =result[result.length-1][5];
          }else{
            var update_time =result[result.length-1][2];
          }
          update_time = update_time.substring(0,update_time.length-3);

          renderer.text('' , 220, this.containerHeight-150)
          .attr({
              id:'website',
              zIndex:-18
          })
          .css({
              color: '#EFE8E6',
              fontSize:'46px'
          })
          .add();
          

          var update_text = '更新时间:' + update_time ;

          var Update_width = update_text.toString().visualLength(10);
          renderer.text( update_text , this.containerWidth-Update_width, this.containerHeight-2)
          .attr({
              id:'update_time',
              zIndex:8
          })
          .css({
              color: '#ccc',
              fontSize:'10px'
          })
          .add();

          var num = series.data.length;
          var plotSizeX= this.plotSizeX;
          var plotLeft = this.plotLeft;
          iosocket.on('connect', function () {});
          iosocket.on('disconnect', function () {
            window.location.reload();
          });
          iosocket.emit('login',code);
          iosocket.on('hqinfo',function(response){
            try{
                    if(window.parent.now_price != undefined){
                      window.parent.now_price(response);
                    }

                    response = $.parseJSON(response);
                    response.last = parseFloat(response.last);
                    response.price = parseFloat(response.price);
                    response.timestamp = parseInt(response.timestamp);

                    SChart.series = series;
                    SChart.chart_type = chart_type;

                    var temp_data = SChart.getAllData();

                    var time_range =  timeRange.get(response.timestamp, interval);
                    response.start = time_range.start;
                    response.end = time_range.end;
                    var momentObj = moment.unix(time_range.start);
                    var minute = momentObj.format('YYYYMMDDHHmm');

                    var lastMomentObj = moment.unix(parseInt(temp_data[temp_data.length - 1][0]/1000));
                    var lastMinute = lastMomentObj.format('YYYYMMDDHHmm');


                    SChart.response = response;

                    if(minute == lastMinute){ //时间一样时
                      SChart.setLastPrice();
                    }else{
                      SChart.shiftData();
                    }

                    var Close_price =response.last;
             
                    SChart.nowLine(Close_price,true);


                    var update_text = '更新时间:' + Highcharts.dateFormat("%Y-%m-%d %H:%M", Date.parse(new Date()) ) ;
                    var Update_width = update_text.toString().visualLength(10);

                    $('#update_time').remove();
                    renderer.text( update_text  , chart.containerWidth-Update_width, chart.containerHeight-2)
                    .attr({
                        id:'update_time',
                        zIndex:8
                    })
                    .css({
                        color: '#ccc',
                        fontSize:'10px'
                    })
                    .add();
                  var Close_price_width = SChart.Close_price_width;
                  yaxis_position(chart.plotSizeX+chart.plotLeft+Close_price_width+3);
                  }catch(e){
                    //alert(e.message()+'分隔数据出错');  
                  }
          });

        },
/*        redraw: function() {
          var series = this.series[0];
          var num = series.data.length;


          temp_data = SChart.getAllData();
          if( chart_type =='candlestick'){
            var Close_price = temp_data[temp_data.length-1][4];
          }else{
            var Close_price = temp_data[temp_data.length-1][1];
          }

          SChart.nowLine(Close_price,true);
        

          update_time = $('#update_time').text();
          $('#update_time').remove();
          renderer.text(update_time , this.containerWidth-140, this.containerHeight-2)
          .attr({
              id:'update_time',
              zIndex:8
          })
         .css({
              color: '#ccc',
              fontSize:'10px'
          })
          .add();

        },*/
        click:function(e){
          // console.log(e.xAxis,e.yAxis)
        // date = Highcharts.dateFormat("%Y/%m/%d %H:%M",e.xAxis[0].value,false);
        // console.log( date);

                    // chart = $(container).highcharts();

          // c= chart.xAxis.translate(e.xAxis[0].value, 0, 0, 0, 1, undefined, false); 
          // console.log(chart)
          // console.log(c)
        }

      }

           
    },

    plotOptions: {
        area: {
              fillColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1},
                    stops: [
                        [0, 'rgba(234,238,243,1)'],
                        [1, 'rgba(234,238,243,0)']
                    ]
                },
              lineWidth: 2,
              marker: {
                  enabled: false
              },
              shadow: false,
              states: {
                  hover: {
                      lineWidth: 2
                  }
              },
            threshold: null,

            marker: {
                symbol: 'circle' //曲线点类型："circle", "square", "diamond", "triangle","triangle-down"，默认是"circle"
            
            }
        }
     /*   ,candlestick:{
          pointWidth:1
        }*/
    },


    tooltip:{
      // crosshairs: [true, true],
      crosshairs: chart_model_config[chart_model]['Crosshair'],
      shape: 'square',
      positioner: function (boxWidth, boxHeight, point) {
          var chart = this.chart,
          distance = this.distance,
          ret = {},
          swapped,
          first = ['y', chart.chartHeight, boxHeight, point.plotY + chart.plotTop],
          second = ['x', chart.chartWidth, boxWidth, point.plotX + chart.plotLeft],
          // The far side is right or bottom
          preferFarSide = point.ttBelow || (chart.inverted && !point.negative) || (!chart.inverted && point.negative),
          /**
           * Handle the preferred dimension. When the preferred dimension is tooltip
           * on top or bottom of the point, it will look for space there.
           */
          
          secondDimension = function (dim, outerSize, innerSize, point) {
            var roomLeft = innerSize < point - distance,
              roomRight = point + distance + innerSize < outerSize,
              alignedLeft = point - distance - innerSize,
              alignedRight = point + distance;

            if (preferFarSide && roomRight) {
              ret[dim] = alignedRight;
            } else if (!preferFarSide && roomLeft) {
              ret[dim] = alignedLeft;
            } else if (roomLeft) {
              ret[dim] = alignedLeft;
            } else if (roomRight) {
              ret[dim] = alignedRight;
            } else {
              return false;
            }
          },
          /**
           * Handle the secondary dimension. If the preferred dimension is tooltip
           * on top or bottom of the point, the second dimension is to align the tooltip
           * above the point, trying to align center but allowing left or right
           * align within the chart box.
           */
           firstDimension= function (dim, outerSize, innerSize, point) {
            
            // Too close to the edge, return false and swap dimensions
            if (point < distance || point > outerSize - distance) {
              return false;
            
            // Align left/top
            } else if (point < innerSize / 2) {
              ret[dim] = 1;
            // Align right/bottom
            } else if (point > outerSize - innerSize / 2) {
              ret[dim] = outerSize - innerSize - 2;
            // Align center
            } else {
              ret[dim] = point - innerSize / 2;
            }
          },
          /**
           * Swap the dimensions 
           */
          swap = function (count) {
            var temp = first;
            first = second;
            second = temp;
            swapped = count;
          },
          run = function () {
            if (firstDimension.apply(0, first) !== false) {
              if (secondDimension.apply(0, second) === false && !swapped) {
                swap(true);
                run();
              }
            } else if (!swapped) {
              swap(true);
              run();
            } else {
              ret.x = ret.y = 0;
            }
          };

        // Under these conditions, prefer the tooltip on the side of the point
        if (chart.inverted || this.len > 1) {
          swap();
        }
        run();
        return ret;
      },


      formatter:function(){  


        if(chart_type == 'candlestick'){
        var tip = "";
          // tip = this.points[0].series.name+"<br/> ";
          tip += Highcharts.dateFormat("%Y-%m-%d %H:%M",this.points[0].point.x,false)+"<br/>";
          tip += "开盘价："+this.points[0].point.open+"<br/>";
          tip += "收盘价："+this.points[0].point.close+"<br/>";
          tip += "最高价："+this.points[0].point.high+"<br/>";
          tip += "最低价："+this.points[0].point.low+"<br/>";
          return tip;
        }else{
          var tip = "";
          // tip = this.points[0].series.name+"<br/> ";
          tip += Highcharts.dateFormat("%Y-%m-%d %H:%M",this.points[0].point.x,false)+"<br/>";
          tip += "现价："+this.points[0].point.y+"<br/>";
          return tip;
        }
      }
    },

    scrollbar: {
      enabled: false
    },
    navigator: {
       enabled : false
    },
    credits: {
      enabled: false
    },
    exporting: {
      enabled: false
    },
    rangeSelector: {
      enabled : false
        // selected: 1
    },

    xAxis:{

          offset:0,
          tickLength: 1 ,
          labels:{
            fontSize:'20px'
          },
          dateTimeLabelFormats: {
              millisecond: '%H:%M',
              second: '%H:%M',
              minute: '%H:%M',
              hour: '%H:%M',
              day: '%b/%e',
              week: '%b/%e',
              month: '%Y-%b',
              year: '%Y'
          },
            gridLineColor: '#f4f4f4',
            gridLineWidth: 1

      },
      yAxis:{
          // offset:40,
          offset:60,
          labels:{
            zIndex:4


            ,formatter:function(){
              if(this.value>10){
                return this.value.toFixed(2);
              }else{
                return this.value.toFixed(4);
              }
            }


          },
          gridLineColor: '#f4f4f4',
          gridLineWidth: 1
/*          ,plotLines:[{
                color:'black',           //线的颜色，定义为红色
                // dashStyle:'solid',     //默认值，这里定义为实线
                id: 'plot-line' ,
                value:ohlc[ohlc.length-1][1],               //定义在那个值上显示标示线，这里是在x轴上刻度为3的值处垂直化一条线
                width:1                //标示线的宽度，2px
                ,zIndex:6
                ,label: { 
                  style: {
                    color: '#fff'
                  },
                  text: ohlc[ohlc.length-1][1] , // Content of the label. 
                  align: 'right', // Positioning of the label. 
                  x: +50 
                }
            }]*/
      },

      series: [{

          type: chart_type,
          name: 'AAPL',
          data: ohlc
      }
/*      ,{

          name: 'AAPL',
          data: ohlc
      }*/
      ]

  });
}

var SChart ={response:[],temp_data:[],temp_data:[],chart_type:'',Close_price_width:0};

SChart.setLastPrice = function (){
    var temp=[];
    var response = this.response;
    var temp_data = this.temp_data;
    var chart_type = this.chart_type;

    temp[0] =temp_data[temp_data.length-1][0];

    if(chart_type =='candlestick'){
      price = temp[4] =  response['last'];
      temp[1] = temp_data[temp_data.length-1][1];

      high = temp_data[temp_data.length-1][2];
      low = temp_data[temp_data.length-1][3];

      high = temp[2] = price > high ? price : high;
      low = temp[3]  = price < low ? price : low;
    }else{
      temp[1] = response['last'];
    }

    temp_data[temp_data.length-1] = temp;
    this.series.setData(temp_data);
    this.temp_data=temp_data;
    // return temp_data;

}

SChart.shiftData = function (){
    var temp=[];
    var response = this.response;
    var temp_data = this.temp_data;
    var chart_type = this.chart_type;

    temp[0] = parseInt( response.start ) *1000;
    temp[1] = response['last'];
    if(chart_type =='candlestick'){
      temp[2] = response['last'];
      temp[3] = response['last'];
      temp[4] = response['last'];
    }
    // console.log(temp)
    temp_data.shift();
    temp_data.push(temp);
    this.series.setData(temp_data);
    this.temp_data=temp_data;

    
  }
SChart.getAllData = function (){
    var series = this.series;
    chart_type = this.chart_type;

    xData = series.xData;
    yData = series.yData;
    var temp_data = [];
    if(chart_type == 'candlestick'){/*console.log('x', xData);console.log('y',yData);*/
      for(i=0;i < xData.length;i++){
        var temp1=[];
        temp1 = [ xData[i],yData[i][0],yData[i][1],yData[i][2],yData[i][3] ];
        temp_data[i]=temp1;
      }
    }else{
      for(i=0;i < xData.length;i++){
        var temp1=[];
        temp1 = [ xData[i],yData[i]];
        temp_data[i]=temp1;
      }
    }
    this.temp_data = temp_data;
    return temp_data;
}


SChart.nowLine = function(Close_price,remove){
    chart = $(container).highcharts();
    var series = chart.series[0];
    var renderer = chart.renderer;
    var yAxis = chart.yAxis[0];


    if(remove==true){
      yAxis.removePlotLine('plot-line');
      $('#rect_backgroud').remove();
    }

    if(  ! Close_price.toString().split(".")[1] || Close_price.toString().split(".")[1].length < 2 ){
      Close_price = Close_price.toFixed(2);
    }

    var Close_price_width = Close_price.toString().visualLength(12);
    SChart.Close_price_width = Close_price_width;

    yAxis.addPlotLine({             //在x轴上增加
        value:Close_price,                           //在值为2的地方
        width:1,                             //标示线的宽度为2px
        color: '#000',                       //标示线的颜色
        id: 'plot-line',                //标示线的id，在删除该标示线的时候需要该id标示
        label:Close_price,
        zIndex:6
        
        ,label: { 
          style: {
            color: '#fff'
          },
          text: Close_price, // Content of the label. 
          align: 'right', // Positioning of the label. 
          x: +Close_price_width+5 
        }
    });
    num = series.data.length;

    if(chart_type == 'candlestick'){
      if( num ){
        var plotClose = series.data[num-1].plotClose;
      }else{
        // var plotClose = yAxis.plotLinesAndBands[0].svgElem.element.animatedPathSegList[0].y - 10;
        var plotClose = yAxis.plotLinesAndBands[0].svgElem.d.toString().split(' ')[2]-10;

      }
    }else{
      var plotClose = series.data[num-1].plotY;
    }


    renderer.rect(chart.plotSizeX+chart.plotLeft , plotClose-8 , Close_price_width+10, 20, 0).attr({
      fill: '#27415E',
      zIndex: 5,
      id:'rect_backgroud'
    }).add();
}

function updateChartSize() {

  var width1 = (width =='auto') ? $(window).width() : width;
  var height1 = (height =='auto') ? $(window).height() : height;

  // width1 = width1 >500 ? width1 : 500;
  // height1 = height1 >500 ? height1 : 500;
  if (width1 < height1) {
      var temp = width1;
      width1 = height1;
      height1 = temp;

      var ml = (width1-height1)/2
 
      $(container).css({
        '-moz-transform':'rotate(90deg)',
        '-webkit-transform':'rotate(90deg)',
        'margin-top': ml+'px',
        'margin-left': '-'+ml+'px'
      });
  }else{
    $(container).css({
        '-moz-transform':'rotate(0deg)',
        '-webkit-transform':'rotate(0deg)',
        'margin-top': '0px',
        'margin-left': '0px'
      });
  }


  $('#debug').html('width1:' +width1 +' height1:' +height1);
  $(container).height(height1);
  $(container).width(width1);
  // $('#debug').text('height'+ height1 +"width"+width1);
  chart = $(container).highcharts();
  if(!chart) return;
  



  var yAxis = chart.yAxis[0];

  yAxis.removePlotLine('plot-line');
  $('#rect_backgroud').remove();

  // chart.redraw();

/* 
  var series = chart.series[0];
  var num = series.data.length;
  var renderer = chart.renderer;

  SChart.series = series;
  SChart.chart_type = chart_type;

  if( chart_type =='candlestick'){
    var Close_price = temp_data[temp_data.length-1][4];
  }else{
    var Close_price = temp_data[temp_data.length-1][1];
  }

  SChart.nowLine(Close_price,true);


  update_time = $('#update_time').text();
  $('#update_time').remove();
  renderer.text(update_time , chart.containerWidth-140, chart.containerHeight-2)
  .attr({
      id:'update_time',
      zIndex:8
  })
 .css({
      color: '#ccc',
      fontSize:'10px'
  })
  .add();*/


}
   
$(document).ready(function(){
   updateChartSize();
   //监听窗体大小变更事件
   $(window).resize(updateChartSize);
   $(document).resize(updateChartSize);
});


    function changeData(code){
      chart_type = 'area';
        $.ajax({
          url :alldata_url,
          dataType : 'jsonp',
          data : {
              type : chart_type,
                      code : code,
                      rows : rows,
                      interval : interval
                  },
          success: function(result){
            ohlc = sort_data(result);

            chart = $(container).highcharts();
            chart.series[0].setData(ohlc);
            old_code = $(container).attr('code') 
            $(container).attr('code',code);


            if(chart_type == 'candlestick'){
              var Close_price =ohlc[ohlc.length-1][4];
            }else{
              var Close_price =ohlc[ohlc.length-1][1];
            }
            SChart.nowLine(Close_price,true);



            iosocket.emit('logout',old_code);
            iosocket.emit('login',code);

            //Y轴对齐
            if(  ! Close_price.toString().split(".")[1] || Close_price.toString().split(".")[1].length < 2 ){
              Close_price = Close_price.toFixed(2);
            }
            
            var Close_price_width = Close_price.toString().visualLength(12);
            x = chart.plotSizeX+chart.plotLeft+Close_price_width+3;

            setTimeout("yaxis_position("+x+")",400);
      
            //Y轴对齐 end

          }
        });
    }



    function changeInterval(interval){
        alldata_url = get_alldata_url(interval);
        $.ajax({
          url :alldata_url,
          dataType : 'jsonp',
          data : {
              type : chart_type,
                      code : code,
                      rows : rows,
                      interval : interval
                  },
          success: function(result){
            ohlc = sort_data(result);
            
            window.interval = interval;

            chart = $(container).highcharts();
            chart.series[0].setData(ohlc);
            old_code = $(container).attr('code') 
            $(container).attr('code',code);


            if(chart_type == 'candlestick'){
              var Close_price =ohlc[ohlc.length-1][4];
            }else{
              var Close_price =ohlc[ohlc.length-1][1];
            }
            SChart.nowLine(Close_price,true);

            iosocket.emit('logout',old_code);
            iosocket.emit('login',code);

            //Y轴对齐
            if(  ! Close_price.toString().split(".")[1] || Close_price.toString().split(".")[1].length < 2 ){
              Close_price = Close_price.toFixed(2);
            }
            
            var Close_price_width = Close_price.toString().visualLength(12);
            x = chart.plotSizeX+chart.plotLeft+Close_price_width+3;

            setTimeout("yaxis_position("+x+")",400);

          }
        });
    }







    function yaxis_position(x){
           // $('.highcharts-yaxis-labels text').attr('x',x);
    }

    function sort_data(result){
      var data = result;
      var ohlc = [],
        volume = [],
        dataLength = data.length;
      if(chart_type == 'candlestick'){
        for (var i = 0; i < dataLength; i++) {
          ohlc.push([
            data[i][0], // the date
            parseFloat( data[i][1] ), // open
            parseFloat( data[i][2] ), // high
            parseFloat( data[i][3] ), // low
            parseFloat( data[i][4] ) // close
          ]);
        }
      }else{
        for (var i = 0; i < dataLength; i++) {
          ohlc.push([
            data[i][0], // the date
            parseFloat(data[i][1]) // close
          ]);
        }
      }
      return ohlc;
    }
