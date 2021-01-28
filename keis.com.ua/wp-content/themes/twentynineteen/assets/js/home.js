$(document).ready(function(){
	
	$("#modal__home_form").submit(function() {
				var str = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "https://keis.com.ua/mail/back_call_home.php", // здесь указываем путь ко второму файлу
					data: str,
					success: function(msg) {
						if(msg == 'OK') {
							result = '<div class="ok">Сообщение отправлено</div>'; // текст, если сообщение отправлено
							$("#modal_home_fields").hide();
							location.href = 'thank-you/';
						}
						else {result = msg;}
						$('#modal_home_note').html(result);
						 $('.input', '#contact') // очищаем поля после того, как сообщение отправилось
						 .not(':button, :submit, :reset, :hidden')
						 .val('')			 
					}
				});
				return false;
	});
	
	
	$('.map__info-button').click( function(event){
        $('#myOverlay_home').fadeIn(297, function(){
		  $('#myModal_home').css('display', 'block').animate({opacity: 1}, 198);
        });
    });
	
    $('#myModal__close_home, #myOverlay_home').click( function(){
        $('#myModal_home').animate({opacity: 0}, 198,function(){
			$(this).css('display', 'none');
			$('#myOverlay_home').fadeOut(297);
        });
    });
	
    var command_slider = "#command-slider";
    var command_slider_options = {
        lazyLoad: true,
        dots:false,
        autoplayHoverPause:true,
        autoplaySpeed:500,
        navText:['',''],
        responsive:{
            0:{
                items:1,
                nav:false,
                loop:true,
                autoplay:true,
				dots:true
            },
            768:{
                items:1,
                nav:false,
                loop:true,
                autoplay:true,
                dots:true
            }
        }
    };
    $(command_slider).owlCarousel(command_slider_options);
	
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
			menu_click('.advantages__quantity');
	});
	
	$('#menu-item-43 > a:nth-child(1)').on("click", function (event) {
			menu_click('#promotion_txt');
	});
	
	$('#menu-item-56 > a:nth-child(1)').on("click", function (event) {
			menu_click('.cases');
	});
	
	$('#menu-item-55 > a:nth-child(1)').on("click", function (event) {
			//menu_click('.command__block');
	});
	
	/*$('#menu-item-54 > a:nth-child(1)').on("click", function (event) {
			menu_click('.map__block-container');
	});*/

	
});