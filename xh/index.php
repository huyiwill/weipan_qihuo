 <?php 
 if($_GET['code'] != ''){
	 $fundcode=$_GET['code'];
	//www-zhe-yi-tian-shi-com

include_once("functions.php");
$data = getData($fundcode);
//print_r($data);
	 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
<meta name="MobileOptimized" content="320">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta name="HandheldFriendly" content="true" />
<title>行情</title>
<meta name="keywords" content="">
<meta name="description" content="">

<link href="style/css/wap.css?version=1512292146" rel="stylesheet" type="text/css">
<script type="text/javascript" src="style/js/jquery.js"></script>

<script>
	code='<?php echo $fundcode ?>';
	$(function(){
            url ='tu.php';
            $('.TimeMenu a').click(function(){
           


                if( $('.TimeMenu a.cur').attr('data-type') != $(this).attr('data-type') || $(this).attr('data-type')=='area' ){
                    $('.TimeMenu a.cur').removeClass('cur');
                    $(this).addClass('cur');
                    get_url(1);
                }else {
                  
                    interval = $(this).attr('data-interval');
                    $('.TimeMenu a.cur').removeClass('cur');
                    $(this).addClass('cur');
                    get_url(0);

                    //document.getElementById('chart').contentWindow.changeInterval(interval);
                    //$url = $('.bigPicShow').attr('href');
                    //$('#chart').attr('src',$url);
                    //$('.showdiv').text('Loading...');	//折H翼H天H使H资H源H社H区H提H供
                    //$('.showdiv').html('<iframe id="chart" class="efc" width="100%" height="260" scrolling="no" frameborder="0" src="'+ $url +'"></iframe>');
                    document.getElementById('chart').contentWindow.changeInterval(interval);
                    

                }

            });

            get_url = function(is_iframe){
                rows=45;
                interval = $('.TimeMenu a.cur').attr('data-interval');
                type = $('.TimeMenu a.cur').attr('data-type');
                // type = $('.Linemenu li.cur').attr('data-type');
                if( !type ){
                    type = 'candlestick';
                }

                parameter ={'interval':interval,'type':type,'rows':rows,'code':code};

                parameter_str=""
                for ( var i in parameter){
                    parameter_str += '&'+i +'='+parameter[i];
                }
                parameter_str = parameter_str.substr(1);
                if(is_iframe==1){
                    $('.data-container').text('Loading...');

                    $('.data-container').html('<iframe id="chart" class="efc" width="100%" height="260" scrolling="no" frameborder="0" src="'+ url + '?' + parameter_str +'"></iframe>');
                }
                //$('.bigPicShow').attr('href',url + '?' + parameter_str);

            }
            get_url(1);

        });

</script>
</head>
<body>
<div class="wrap">

<div class="hxcontent eurusd" code="eurusd" >
<div class="price-info">
<h1><?php echo $data['name']; ?></h1>
<?php echo $data['class']; ?>
<h2><?php echo $data['price']; ?></h2>
<p><span><?php echo $data['diff']; ?></span>
<span><?php echo $data['diffRate']; ?></span></p>
</div>
</div>

<div class="data-info">
<ul>
<li>今开<i><?php echo $data['jk']; ?></i></li>
<li>昨收<i><?php echo $data['zk']; ?></i></li>
<li>最高<i><?php echo $data['zg']; ?></i></li>
<li>最低<i><?php echo $data['zd']; ?></i></li>
</ul>
</div>
<script>
//只处理海峡数据，其他数据会报错
//作者QQ：2698295603 
//淘宝：https://zaixuasd.taobao.com/  致力于金融数据
$(function(){
	window.setInterval(function(){
		$.getJSON("json.php",{"code":"<?php echo $fundcode ?>","rand":Math.random()},function(data){
			$(".price-info h1").html(data.name);
			$(".price-info h2").html(data.price);
			$(".price-info p span").eq(0).html(data.diff);
			$(".price-info p span").eq(1).html(data.diffRate);
			//$(".data-info ul li").eq(0).find("i").html(data.jk);
			//$(".data-info ul li").eq(1).find("i").html(data.zk);
			$(".data-info ul li").eq(2).find("i").html(data.zg);
			$(".data-info ul li").eq(3).find("i").html(data.zd);
		});
	},1000);
});
</script>


<div class="data-container"><img src="#" alt="分时图"/></div>
<div class="data-nav TimeMenu">
<a href="javascript:void(0)" data-interval='1' data-type="area" class="cur">分时</a>
<a href="javascript:void(0)" data-interval='5' data-type="candlestick" >5分</a>
<a href="javascript:void(0)" data-interval='30' data-type="candlestick" >30分</a>
<a href="javascript:void(0)" data-interval='1d' data-type="candlestick" >日K</a>
<a href="javascript:void(0)" data-interval='1w' data-type="candlestick" >周K</a>
</div>
</div><!--/ HXmain End -->



</div>
<script>
/** 
 * 返回前一页（或返回首页） 
 */  
function goBack(){  
    if ((navigator.userAgent.indexOf('MSIE') >= 0) && (navigator.userAgent.indexOf('Opera') < 0)){ // IE  
        if(history.length > 0){  
            window.history.go( -1 );  
        }else{  
            window.opener=null;window.location.href='/index.php';  
        }  
    }else{ //非IE浏览器  
        if (navigator.userAgent.indexOf('Firefox') >= 0 ||  
            navigator.userAgent.indexOf('Opera') >= 0 ||  
            navigator.userAgent.indexOf('Safari') >= 0 ||  
            navigator.userAgent.indexOf('Chrome') >= 0 ||  
            navigator.userAgent.indexOf('WebKit') >= 0){  
  
            if(window.history.length > 1){  
                window.history.go( -1 );  
            }else{  
                window.opener=null;window.location.href='/index.html';  
            }  
        }else{ //未知的浏览器  
            window.history.go( -1 );  
        }  
    }  
}  
</script>
</body>
</html>
 <?php 

 }else{
	 echo '参数不正确'; 
	 header("Location: index.html");
	 }
	 ?>
	 