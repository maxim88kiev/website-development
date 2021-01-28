$(document).ready(function(){
    var cases_slider_id = "#cases-slider";
    var cases_slider_options = {
        lazyLoad: true,
        dots:false,
        autoplayHoverPause:true,
        autoplaySpeed:500,
        navText:['',''],
        responsive:{
            0:{
                items:1,
                nav:true,
                loop:true,
                autoplay:true
            },
            768:{
                items:2,
				nav:true,
                loop:true,
                autoplay:true
            },
            992:{
                items:3,
				nav:true,
                loop:true,
                autoplay:true
            }
        }
    };
    $(cases_slider_id).owlCarousel(cases_slider_options);
	
	
	$('.question__item-img').on("click", function (event) {
		
		if($(this).hasClass('active')){
			
			$(this).removeClass('active');
			$(this).parent().next().css('display','none');
			$(this).parent().css('background','#fff');
			
		}else{
		
			$(this).addClass('active');
			$(this).parent().next().css('display','block');
			$(this).parent().css('background','rgb(246, 248, 249, 0.5)');
		}
			
	});
	
	
	function menu_click(element){
		event.preventDefault();
		if($(window).width() < 767){
			$('.mob_menu').trigger( "click" );
		}
		$('html, body').animate({
				scrollTop: $(element).offset().top 
		    }, 1000);
	}
	
	$('#menu-item-115 > a:nth-child(1)').on("click", function (event) {
			menu_click('.container__advertising');
	});
	
	$('#menu-item-43 > a:nth-child(1)').on("click", function (event) {
			menu_click('.container__advantages');
	});
	
	$('#menu-item-56 > a:nth-child(1)').on("click", function (event) {
			menu_click('.cases');
	});
	
	$('#menu-item-55 > a:nth-child(1)').on("click", function (event) {
			//event.preventDefault();
	});
	
	/*$('#menu-item-54 > a:nth-child(1)').on("click", function (event) {
			event.preventDefault();
	});*/
	
	
	
});