
$(document).ready(function(){

			$("#contact").submit(function() {
				var str = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "https://keis.com.ua/mail/calculation_mail.php", // здесь указываем путь ко второму файлу
					data: str,
					success: function(msg) {
						if(msg == 'OK') {
							result = '<div class="ok">Сообщение отправлено</div>'; // текст, если сообщение отправлено
							$("#fields").hide();
							location.href = 'thank-you/';
						}
						else {result = msg;}
						$('#note').html(result);
						 $('.input', '#contact') // очищаем поля после того, как сообщение отправилось
						 .not(':button, :submit, :reset, :hidden')
						 .val('')			 
					}
				});
				return false;
			});
			
			$("#questions_form").submit(function() {
				var str = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "https://keis.com.ua/mail/questions_mail.php",
					data: str,
					success: function(msg) {
						if(msg == 'OK') {
							result = '<div class="ok">Сообщение отправлено</div>';
							$("#banner_home_fields").hide();
							location.href = 'thank-you/';
						}
						else {result = msg;}
						$('#banner_home_note').html(result);
						 $('.input', '#questions_form')
						 .not(':button, :submit, :reset, :hidden')
						 .val('')			 
					}
				});
				return false;
			});
			
			
			
			$("#consultation_form").submit(function() {
				var str = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "https://keis.com.ua/mail/consultation_mail.php",
					data: str,
					success: function(msg) {
						if(msg == 'OK') {
							result = '<div class="ok">Сообщение отправлено</div>';
							$("#consultation_fields").hide();
							location.href = 'thank-you/';
						}
						else {result = msg;}
						$('#consultation_note').html(result);
						 $('.input', '#consultation_form')
						 .not(':button, :submit, :reset, :hidden')
						 .val('')			 
					}
				});
				return false;
			});

			$("#call_form").submit(function() {
				var str = $(this).serialize();
				console.log('ok');
				$.ajax({
					type: "POST",
					url: "https://keis.com.ua/mail/consultation_mail.php",
					data: str,
					success: function(msg) {
						if(msg == 'OK') {
							result = '<div class="ok">Сообщение отправлено</div>';
							$("#call_fields").hide();
							location.href = 'thank-you/';
						}
						else {result = msg;}
						$('#call_note').html(result);
						 $('.input', '#consultation_form')
						 .not(':button, :submit, :reset, :hidden')
						 .val('')			 
					}
				});
				return false;
			});
	
	
	
	function modal_click(value){
		event.preventDefault();
        $('#myOverlay').fadeIn(297, function(){
			$('#myModal').css('display', 'block').animate({opacity: 1}, 198);
        });
		
		if(value !== ''){
			$('#service_name').attr('value', value);	
		}
	}

	$('.modal_js').click( function(event){
      modal_click()
    });
	
	$('.clients__blocks-button').click( function(event){
       modal_click()
    });
	
	$('.tariffs__item-buttom').click( function(event){
		var data_value = $(this).attr('data-value');
        modal_click(data_value)
    });
	
	$('.cost-table-but').click( function(event){
		var data_value = $(this).attr('data-value');
        modal_click(data_value)
    });

	$('.tariffs__table-column-order').click( function(event){
		var data_value = $(this).attr('data-value');
        modal_click(data_value)
    });

    $('#myModal__close, #myOverlay').click( function(){
        $('#myModal').animate({opacity: 0}, 198,
      function(){
        $(this).css('display', 'none');
        $('#myOverlay').fadeOut(297);
        });
    });
	
    $(".calk").on("click", function (event) {
        event.preventDefault();
        var id  = $('#calculator_txt'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    $('.mob_menu').on("click", function (event) {
        if($('#menu-keis').toggle().css('display')=='block'){
            $('#menu-keis').css('display','flex');
        }
		
		if($('#menu-menu_uk').toggle().css('display')=='block'){
            $('#menu-menu_uk').css('display','flex');
        }
		
        if($('#menu-keis').css('display') == 'flex' || $('#menu-menu_uk').css('display') == 'flex'){
			$('.mob_menu_bg').css('background-image', 'url("/images/img_menu_mob_close.svg")');
			$('.top_phone').css('display', 'block');
            $('div.mob_menu i.fa').removeClass('fa-bars');
            $('div.mob_menu i.fa').addClass('fa-chevron-up');
			$('body').css('position','fixed');
			
        }else{
			$('.mob_menu_bg').css('background-image', 'url("/images/img_menu_mob.svg")');
            $('div.mob_menu i.fa').removeClass('fa-chevron-up');
            $('div.mob_menu i.fa').addClass('fa-bars');
			$('body').css('position','inherit');
			$('.top_phone').css('display', 'none');
        }
    });
	
	

	
	
	

    let width_screen = window.screen.availWidth;
    if(width_screen < 768){
        $(document).mouseup(function (e){
            /*var div = $(".main-navigation .sub-menu");
            if (!div.is(e.target) && div.has(e.target).length === 0) {
                div.removeClass('hover_nav');
            }*/
			
        });
		
        $("#menu-item-115").removeClass('menu-item-has-children');
        $(".submenu-expand").on("touchend", function (event) {
			
			if($(".main-navigation .sub-menu").hasClass('hover_nav')){
				$(".main-navigation .sub-menu").removeClass('hover_nav');
			}else{
				$(".main-navigation .sub-menu").addClass('hover_nav');
			}
			
        });

    }else{
        $("#menu-item-115").addClass('menu-item-has-children');
    }

});

$(document).ready(function(){
    var one_time_price_car = "#one-time-price-car";
    var one_time_price_car_options = {
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
                items:1,
                nav:true,
                loop:true,
                autoplay:true,
                dots:false
            }
        }
    };
    $(one_time_price_car).owlCarousel(one_time_price_car_options);
});


$(".submit-button").on("click", function (event) {
    $.validator.addMethod("checkboxes", function(value, element) {
        return $('input[type=radio]:checked').length > 0;
    });
    $("form.form-container").each(function() {
        $(this).validate({
            rules: {
                'adw-domen': {
                    required: true,
                    minlength: 3
                },
                'adw-urls': {
                    required: true,
                    minlength: 3
                },
                'site_age': {
                    required: true,
                    minlength: 3
                },
                'comments': {
                    required: true,
                    minlength: 3
                },
                'prom-uslugi' : {
                    required : true,
                    checkboxes: true
                }
            },
            messages: {
                'adw-domen': {
                    required: "Поле не может быть пустым",
                    minlength: jQuery.validator.format("Введите не менее {0} символов.")
                },
                'adw-urls': {
                    required: "Поле не может быть пустым",
                    minlength: jQuery.validator.format("Введите не менее {0} символов.")
                },
                'site_age': {
                    required: "Поле не может быть пустым",
                    minlength: jQuery.validator.format("Введите не менее {0} символов.")
                },
                'comments': {
                    required: "Поле не может быть пустым",
                    minlength: jQuery.validator.format("Введите не менее {0} символов.")
                },
                'prom-uslugi' : {
                    required: "Выберите Желаемые результаты"
                }
            },
            submitHandler: function(form) {
                var domen = $("#domen-id").val();
                var urls = $("#urls-id").val();
                var uslugi = $(".form-check-input:checked").val();
                var age = $("#site_age_id").val();
                var comments = $("#comments-id").val();
                $.ajax({
                    url: "/wp-admin/admin-ajax.php",
                    method: 'post',
                    data: {
                        action: 'ajax_order',
                        domen: domen,
                        urls: urls,
                        uslugi: uslugi,
                        age: age,
                        comments: comments
                    },
                    success: function (response) {
                        $("#domen-id").val('');
                        $("#urls-id").val('');
                        $(".form-check-input:checked").prop('checked', false);
                        $("#site_age_id").val('');
                        $("#comments-id").val('');
                        $("#feedback").html(response);
                        $("#feedback").fancybox().trigger('click');
                    }
                });
            }
        });
    });
});