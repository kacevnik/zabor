jQuery(document).ready(function ($) {

	$('.show-a').click(function(){
		var val = 'Нужна цена на: ';
    	$('#hidden_price').find('[name="form"]').attr('value', val+$(this).parent().find('.desc').text());
    });	

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

    $('.galaey_frame_item').click(function(){
    	$(this).parent().parent().find('.galaey_frame_show img').attr('src',$(this).find('img').attr('src'));
    });

    $("form").ajaxForm(function(){
		//$("a[title='Close']").trigger("click");
		$("form").clearForm();
		$(".fancybox-close-small").trigger("click");
		$("#modal_view_thanks").trigger("click");		
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

  	$(".phone").mask("+7 (999) 999-99-99");

    $(".header_back").fancybox({
        padding     : 0,
        height      : 410,
        maxWidth    : 320,
        fitToView   : false,
        width       : '70%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none'
    });

});

$(document).ready(function(){
    $('#owl-work1,#owl-work2,#owl-work3,#owl-work4,#owl-work5,#owl-work6').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
		items:1
    });
});