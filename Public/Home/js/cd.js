// 菜单js
$(document).ready(function(e) {
    $(".top_div > div img").click(function(){
		$(".ycdcdDiv").animate({ left: '0px' }, "slow");
		//让内容向右边移动
		$(".main").addClass("mainxyy");
		$(".main").animate({ left: '80%' }, "slow");
	});
	$(".ycdcdDiv .gbtb img").click(function(){
		$(".main").animate({ left: '0' }, "slow");
		$(".ycdcdDiv").animate({ left: '-85%' }, "slow");
		$(".main").removeClass("mainxyy");
	});
});