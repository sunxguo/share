// JavaScript Document
$(function(){
	//商户页主页
	$(".x_c").click(function(){
		if($(this).hasClass("x_f")){
			$(this).removeClass("x_f");	
		}else{
			$(this).addClass("x_f");	
		}
	});
	$(".x_w").click(function(){
		$(".x_w").removeClass("x_x");
		$(this).addClass("x_x");
	});
	
	//商户页主页
	
});