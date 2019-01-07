$(function(){
	//回到顶部
	topFun();
	//首页轮播
	!$('.index_slider').length>0||(function(){
		$('.index_slider').slidesjs({
            width: 1920,
            height: 670,
            play: {
              auto: true,
            },
            navigation: false,
            pagination: {
              effect: "fade"
            },
            effect: {
              fade: {
                speed: 400
              }
            }
        }); 	
	})();

	//tab切换
	// fnTabCon('.in_tab .li','mouseover','.in_content','active');

})


//回到顶部
function topFun(){
	var topObj = $('.return_top');
	var left=($(window).width()-1200)/2-topObj.width()-20;
	var top=($(window).height()-topObj.height())/2;
	topObj.click(function(){
		$("html,body").animate({scrollTop: 0});
	});
	$(window).bind('scroll', function(e){
		if($(window).scrollTop()>=$(window).height()){
			topObj.stop().animate({opacity:1});
		}else{
			topObj.stop().animate({opacity:0});
		}
	})
}

//tab切换
function fnTabCon(obj,oEvent,oCon,className)
{
	$(obj).live(oEvent,function(){
		var index = $(this).index();
		$(this).addClass(className).siblings().removeClass(className);
		$(oCon).hide();
		$(oCon).eq(index).show();
	});
};
