jQuery(document).ready(function ($) {	
	$('.top').css({"margin-top": $('header').height()*-1+'px'});
	$('.bottom_line_right').css({"border-right-width": $(window).width()/2+'px'});
	$('.bottom_line_right').css({"border-top-width": $(window).height()/2/3+'px'});
	$('.bottom_line_left').css({"border-left-width": $(window).width()/2+'px'});
	$('.bottom_line_left').css({"border-top-width": $(window).height()/2/3+'px'});
	$('.arrow_next').css({"left": $(window).width()/2-33+'px'});
	$('.top h1').css({"margin-top":$('header').height()+50+'px'});
	$('.video_top a').height($('.video_top a').width()/1.2666);//Динамическая высота блока видео
	$('.exemple .bottom').css({"border-left-width": $('.exemple .bottom').parent().width()+'px'});//Динамическая ширина треугольника 
	$('.exemple .bottom').css({"border-bottom-width": $('.exemple .bottom').parent().width()/7.744+'px'});//Динамическая ширина треугольника 
	$('.scene').css({"min-height":$(window).height()+'px'});

	$(window).resize(function(){
		$('.top').css({"margin-top": $('header').height()*-1+'px'});
		$('.bottom_line_right').css({"border-right-width": $(window).width()/2+'px'});
		$('.bottom_line_right').css({"border-top-width": $(window).height()/2/3+'px'});
		$('.bottom_line_left').css({"border-left-width": $(window).width()/2+'px'});
		$('.bottom_line_left').css({"border-top-width": $(window).height()/2/3+'px'});
		$('.arrow_next').css({"left": $(window).width()/2-33+'px'});
		$('.top h1').css({"margin-top":$('header').height()+50+'px'});
		$('.video_top a').height($('.video_top a').width()/1.2666);//Динамическая высота блока видео
		$('.exemple .bottom').css({"border-left-width": $('.exemple .bottom').parent().width()+'px'});//Динамическая ширина треугольника 
		$('.exemple .bottom').css({"border-bottom-width": $('.exemple .bottom').parent().width()/7.744+'px'});//Динамическая ширина треугольника 
		$('.scene').css({"min-height":$(window).height()+'px'});
	});

	$('.img').hover(function(){
		$(this).find('.shadow').hide();
	}, function(){
		$(this).find('.shadow').show();
	});

    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
    });


  	$(".owl-carousel").owlCarousel({
  		items : 1,
  		loop:true,
  		autoplaySpeed:1200,
  		navSpeed:1200,
  		autoplay:5000,
  		nav:true,
  		navText: ['<div class="arrow_prev_owl"></div>', '<div class="arrow_next_owl"></div>']
  	});

});