$(document).ready(function() {
	$(".yby_nr_div>div").hide();
	$(".yby_nr_div>div").eq(0).show();
	$("#flagSilde").val("swiper1");
    //点击选项卡切换
	$(".title_div ul li").click(function(){
		$(this).attr("class","now_title");
		$(this).siblings().attr("class","other_title");
		//显示对应的div内容
		var indexVal = $(this).index();
		$(".yby_nr_div>div").eq(indexVal).show().siblings().hide();
		var valId = $(this).attr("id");
		$("#flagSilde").val(valId);
	});
	});

/*
	功能：动态生成线行情、多空对决、区间参考内容
	参数：obj表示当前对象
*/
function createData2(obj){
	$(obj).addClass("now_li").siblings().removeClass("now_li");//点击当前对象时，改变当前title li的样式
	$(".kx_nr").empty();//清空点击前的内容
	//动态生成点击后的内容，即当前点击状态的下的内容
	var newHtml;
	newHtml = createSinge2(obj);
	$(".kx_nr").html(newHtml);//生成新的内容
	
}
/*
	功能：根据当前对象动态生成线行情、多空对决、区间参考内容
	参数:obj当前对象
	返回值:字符串
*/
function createSinge2(obj){
	var nowId = $(obj).attr("id");//获取当前点击li的ID
	newHtml = "<div class='kx_tu_div'>"
  			 +"<div><img src='images/kxt1.png'/></div>"//此处为对应的数据
			 +" </div>";	 	        
	if(nowId == 'kxId'){//判断是不是k线行情id，如果是再生成时线按钮
		newHtml = newHtml+" <div class='kx_fs_div'>"
					+"<ul><li><a href='javascript:void(0)'  class='now_a' onClick='createFsx(this)'>分时线</a></li>"
					+"<li><a href='javascript:void(0)' onClick='createFsx(this)'>5分钟线</a></li>"
					+"<li><a href='javascript:void(0)' onClick='createFsx(this)'>15分钟线</a></li>"
					+"<li><a href='javascript:void(0)' onClick='createFsx(this)'>30分钟线</a></li>"
					+"</ul></div>"
	}
	return newHtml;
}
/*
	功能：动态生成分时线、5分钟线、15分钟线、30分钟线
	参数：obj表示当前对象
*/
function createFsx(obj){
	$(obj).addClass("now_a").parent().siblings().find("a").removeClass("now_a");//点击当前对象时，改变当前分时线的样式
	$(".kx_tu_div").empty();//清空点击前的内容
	//动态生成点击后的内容，即当前点击状态的下的内容
	var newHtml;
	newHtml = createFsxData(obj);
	$(".kx_tu_div").html(newHtml);//生成新的内容
}
/*
	动态生成分时线
*/
function createFsxData(obj){
	var newHtml="";
	newHtml = "<div><img src='images/kxt1.png'/></div>";
	return newHtml;
}
/*
	功能：动态生成最新资讯、理财师说、系统公告
	参数：obj表示当前对象
*/
function createData(obj){
	$(obj).addClass("now_li").siblings().removeClass("now_li");//点击当前对象时，改变当前title li的样式
	$(".zx_nr_div").empty();//清空点击前的内容
	//动态生成点击后的内容，即当前点击状态的下的内容
	var newHtml;
	newHtml = "<ul>"+creatLi(obj)+"</ul><div class='ckgd_div'><a href=''>查看更多</a></div>";
	$(".zx_nr_div").html(newHtml);//生成新的内容
}
/*
	功能：根据当前对象动态生成最新资讯、理财师说、系统公告下的Li
	参数:obj当前对象
	返回值:多个li包含的字符串
*/
function creatLi(obj){
	var newHtml="";
	var arr = [ "", "", "" ]; //当前内容的数组
	  $.each(arr, function(i,val){//循环出每个内容的值
		newHtml = newHtml+"<li>"
  			 +"<div class='zx_nr_li_left'>多</div>"//生成li中的第一个div
			 +"<div class='zx_nr_li_mid'><p class='nr_p'>世界黄金协会：中国和俄罗斯央行持...</p><p class='nr_sj'>2016-10-11 11:20:15</p></div>"//生成li中的第2个div
			 +" <div class='zx_nr_li_right'><a href='#'><img src='images/0_03.png'/></a></div>"//生成li中的第3个div
			 +"</li>";
	  });  
   return newHtml;
}
//买涨的弹窗框
function mz(){
	//弹出买涨窗口
	 $('#overlay').fadeIn('fast', function () {
            $('#box').animate({ 'top': '150px' }, 500);
      });
	//将当前商品与此窗口进行关联
	var pjId = $("#flagSilde").val();
		pjId = "."+pjId+" .swiper-slide-active .dwp";
	var slval = $(pjId).text();//当前商品的单位
	$(".pzdiv input").val(slval);//把当前商品赋值给对应的text
	var msjgwz =  "."+$("#flagSilde").val()+" .swiper-slide-active .msp .big_size";
	var jgval = $(msjgwz).text();//获取当前商品的每手价格
	//将每手价格赋值的对应的显示位置
	$("#mz_spanId").html(jgval);
}
//买涨添加商品数量
function tjsl(){
	var nowVal = $("#mz_inputId").val();//获取当前数量的值
	if(nowVal >= 10){
		return ;
	}
	var newVal = parseInt(nowVal)+1;
	$("#mz_inputId").val(newVal);//赋值到input框中
	var msjgwz =  "."+$("#flagSilde").val()+" .swiper-slide-active .msp .big_size";
	var dqmsjg = $(msjgwz).text();//获取当前商品的每手价格
	var newFy = parseFloat(dqmsjg)*parseFloat(newVal);
	$("#mz_spanId").html(newFy);//把费用进行修
}
//买涨减少商品数量
function jssl(){
	var nowVal = $("#mz_inputId").val();//获取当前数量的值
	if(nowVal == 1){
		return ;
	}
	var newVal = parseInt(nowVal)-1;
	$("#mz_inputId").val(newVal);//赋值到input框中
	var msjgwz =  "."+$("#flagSilde").val()+" .swiper-slide-active .msp .big_size";
	var dqmsjg = $(msjgwz).text();//获取当前商品的每手价格
	var newFy = parseFloat(dqmsjg)*parseFloat(newVal);
	$("#mz_spanId").html(newFy);//把费用进行修
}

function gbtck(){
	 $('#box').animate({ 'top': '-500px' }, 500, function () {
            $('#overlay').fadeOut('fast');
        });
}

//买跌弹出框
function md(){
	 $('#mdoverlay').fadeIn('fast', function () {
            $('#mdbox').animate({ 'top': '150px' }, 500);
      });
	//将当前商品与此窗口进行关联
	var pjId = $("#flagSilde").val();
		pjId = "."+pjId+" .swiper-slide-active .dwp";
	var slval = $(pjId).text();//当前商品的单位
	$(".pzdiv input").val(slval);//把当前商品赋值给对应的text
	var msjgwz =  "."+$("#flagSilde").val()+" .swiper-slide-active .msp .big_size";
	var jgval = $(msjgwz).text();//获取当前商品的每手价格
	//将每手价格赋值的对应的显示位置
	$("#md_spanId").html(jgval);
}
//买跌返回
function mdgbtck(){
	 $('#mdbox').animate({ 'top': '-500px' }, 500, function () {
            $('#mdoverlay').fadeOut('fast');
        });
}
//买跌添加商品数量
function mdtjsl(){
	var nowVal = $("#mz_inputId").val();//获取当前数量的值
	if(nowVal >= 10){
		return ;
	}
	var nowVal = $("#md_inputId").val();//获取当前数量的值
	var newVal = parseInt(nowVal)+1;
	$("#md_inputId").val(newVal);//赋值到input框中
	var msjgwz =  "."+$("#flagSilde").val()+" .swiper-slide-active .msp .big_size";
	var dqmsjg = $(msjgwz).text();//获取当前商品的每手价格
	var newFy = parseFloat(dqmsjg)*parseFloat(newVal);
	$("#md_spanId").html(newFy);//把费用进行修
}
//买跌减少商品数量
function mdjssl(){
	var nowVal = $("#md_inputId").val();//获取当前数量的值
	if(nowVal == 1){
		return ;
	}
	var newVal = parseInt(nowVal)-1;
	$("#md_inputId").val(newVal);//赋值到input框中
	var msjgwz =  "."+$("#flagSilde").val()+" .swiper-slide-active .msp .big_size";
	var dqmsjg = $(msjgwz).text();//获取当前商品的每手价格
	var newFy = parseFloat(dqmsjg)*parseFloat(newVal);
	$("#md_spanId").html(newFy);//把费用进行修
}
