(function() {
	function canUseWebP() {
		var elem = document.createElement('canvas');

		if (!!(elem.getContext && elem.getContext('2d'))) {
			// was able or not to get WebP representation
			return elem.toDataURL('image/webp').indexOf('data:image/webp') == 0;
		}

		// very old browser like IE 8, canvas not supported
		return false;
	}
	if (canUseWebP()) {
		document.getElementsByTagName('html')[0].classList.add('webp');
	} else {
		document.getElementsByTagName('html')[0].classList.add('webp-no');
	}


	$(document).ready(function() {
		$("img.lazy").lazyload();

        $(document).on('click' , '.js-popup-city-form' , function(e){
            e.preventDefault();
            $('.select-region').show();
            $('.select-region-layer').show();
        });

		if ( $('.tableFixHead').length ) {
			$(document).on('scroll', function() {
				var havbarHeight = $('.navbar').outerHeight();
				var tableHeaderOffsetTop = $('.tableFixHead').offset().top;
				var offetScrollTop = $(document).scrollTop();

				if(offetScrollTop > tableHeaderOffsetTop - havbarHeight) {
					$('.tableFixHead thead').addClass('dynamic-head');
					$('.tableFixHead thead.dynamic-head').css({
						'width': $('.main-table').width(),
						'top': havbarHeight
					});

					if(offetScrollTop - tableHeaderOffsetTop + havbarHeight > $('.tableFixHead').height()) {
						$('.tableFixHead thead').hide();
					} else {
						$('.tableFixHead thead').show();
					}
				} else {
					$('.tableFixHead thead').removeClass('dynamic-head');
				}
			});
		}

		if( $(window).width() < 992 ) {
			$('.count-payment-numbers li').last().text('>100');
		}

		function checkTariffHeight() {
			var maxHeight = 0;
			$('.mobile-main-card').each(function() {
				if( $(this).height() > maxHeight ) {
					maxHeight = $(this).height();
				}
			});
			$('.mobile-main-card').css('min-height', maxHeight);
		}

		if( $('.mobile-main-table-container').is(":visible") && ($(window).width() > 600) ) {
			console.log($(window).width());
			checkTariffHeight();
		}

		$(document).click(function(e) {
			if ( $(e.target).closest('.navbar').length === 0 && !$(e.target).hasClass('js-popup-city-form')) {
				$('.navbar').removeClass('navbar-open');
			}
		});

		$('.container-article-text img').click(function() {
			var src = $(this).attr('src');
			var alt = $(this).attr('alt');

			$.fancybox.open([
				{
					src  : src,
					opts : {
						caption : alt,
						thumb   : src
					}
				}
			], {
				loop : false
			});
		});

		$('.navbar-toggle').click(function() {
			$('.navbar').toggleClass('navbar-open');
		});

		$(document).on('click', '.faq-item:not(.faq-item--open, .faq-item_clean)', function() {
			$(this).addClass('faq-item--open');
			$(this).next('.faq-answer').fadeIn();
		});

		$(document).on('click', '.faq-item--open:not(.faq-item_clean)', function() {
			$(this).removeClass('faq-item--open');
			$(this).next('.faq-answer').fadeOut();
		});

		$(document).on('click', '.js-show-more-bank', function(event) {
			event.preventDefault();

			var contentBlock = $(this).parents('.mobile-main-card').find('.card-bank-content');

			if( $(contentBlock).is(':visible') ) {
				$(this).parents('.mobile-main-card').find('.card-bank-content').hide();
				$(this).text('Посмотреть детали');
			} else {
				$(this).parents('.mobile-main-card').find('.card-bank-content').show();
				$(this).text('Скрыть');
			}
		});

		$('.article-navigation li').click(function() {
			$('.article-navigation li').removeClass('active');
			$(this).addClass('active');

			var name = $(this).data('name');

			if(name == 'all') {
				$('.js-article-item').show();
			} else {
				$('.js-article-item').hide();
				$('.js-article-item[data-category="'+name+'"]').show();
			}
		});

		$('.js-article-slider').slick({
			centerMode: true,
			infinite: true,
			centerPadding: '10px',
			slidesToShow: 3,
			adaptiveHeight: true,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '40px',
						slidesToShow: 2
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows: false,
						centerMode: false,
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			]
		});


		$(document).on('mousedown', '.right-block__right', function() {
			var leftValue = document.getElementsByClassName('bank-table-container')[0].scrollLeft;

			document.getElementsByClassName('bank-table-container')[0].scroll(leftValue + 240, 0);
		});

		$(document).on('mousedown', '.right-block__left', function() {
			var leftValue = document.getElementsByClassName('bank-table-container')[0].scrollLeft;

			if(leftValue >= 50) {
				document.getElementsByClassName('bank-table-container')[0].scroll(leftValue - 240, 0);
			}
		});

		$('.nav-mobile-show-all-category').click(function(event) {
			event.preventDefault();

			$('.js-category-container').toggle();
		});

		$(document).mouseup(function (e){ // событие клика по веб-документу
			if (document.body.clientWidth <= 480) {
				var div = $(".js-category-container");
				if (!div.is(e.target) // если клик был не по нашему блоку
					&& div.has(e.target).length === 0) { // и не по его дочерним элементам
					div.hide(); // скрываем его
				}
			}
		});

		function hideBtnWhenNotNeed(){
			$('.js-hide-more-banks').hide();
		}
		hideBtnWhenNotNeed();

		$('.js-show-more-banks').click(function(event) {
			event.preventDefault();

			$('.row-bank .hidden').removeClass('hidden');

		  //  $('.js-show-more-banks-container').show();
			$('.js-show-more-banks').hide();
			$('.js-hide-more-banks').show();
		});

		$('.js-hide-more-banks').click(function(event){
			event.preventDefault();
			$('.row-bank .hide-bank-item').addClass('hidden');
			$('.js-show-more-banks').show();
			$('.js-hide-more-banks').hide();
		});


//Вторые функции для скрытия список банков на самой странице /podelu.ru/banks

		// $('.js-show-more-banks').click(function(event) {
		//     event.preventDefault();

		//     $('.desktop-main-table-container .main-table-container .main-table .hide-item').removeClass('hide-item');

		//   //  $('.js-show-more-banks-container').show();
		//     $('.js-show-more-banks').hide();
		//     $('.js-hide-more-banks').show();
		// });

		// $('.js-hide-more-banks').click(function(event){
		//     event.preventDefault();
		//     $('.desktop-main-table-container .main-table-container .main-table tr').addClass('hide-item');
		//     $('.js-show-more-banks').show();
		//     $('.js-hide-more-banks').hide();
		// });


		window.positionX = 0;
		window.mouseMutex = false;

		$('.bank-table-container').on('mousedown', function(event) {
			window.mouseMutex  = true;
		});

		$('.bank-table-container').on('mouseup mouseleave', function(event) {
			window.mouseMutex  = false;
		});

		$('.bank-table-container').on('mousemove', function(event) {
			if(window.mouseMutex == true) {
				var container = document.getElementsByClassName('bank-table-container')[0];

				var scrollLeft = container.scrollLeft;
				var step = 15;

				if(window.positionX > event.clientX && scrollLeft >= 0) {
					container.scroll(scrollLeft + step, 0);
				}

				if(window.positionX < event.clientX && scrollLeft >= 0) {
					container.scroll(scrollLeft - step, 0);
				}

				window.positionX = event.clientX;
			}
		});
	});

	$('#ask-help-popup').poshytip({
		className:'popup-for-help',
		showTimeout: 1,
		alignTo: 'target',
		alignX: 'center',
		offsetY: 5,
		allowTipHover: false,
	});

	$('body').on('click', '.select-region ul [data-url]', function(e) {
		e.preventDefault();
		e.stopPropagation();
		var href = $(this).attr('data-url');
		$.get(href, function(data) {
			data = JSON.parse(data);
			if (0 < data.REDIRECT_URL.length)
				window.location.href = data.REDIRECT_URL;
		});
	});

	$('[data-href]').on('click', function() {
		window.location.href = $(this).data('href');
	})
})();