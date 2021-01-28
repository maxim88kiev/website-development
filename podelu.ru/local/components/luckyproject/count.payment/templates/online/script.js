(function() {
    $(document).ready(function() {
        window.step = 0;

        $('input[type="range"]').rangeslider({
            polyfill: false,

            onSlide: function(position, value) {
                var block = $('.count-payment-value, .count-payment-mobile');

				if(value > 10) {
					if(value == 11) { $(block).text(20); window.step = 20; }
					if(value == 12) { $(block).text(30); window.step = 30; }
					if(value == 13) { $(block).text(40); window.step = 40; }
					if(value == 14) { $(block).text(50); window.step = 50; }
					if(value == 15) { $(block).text(60); window.step = 60; }
					if(value == 16) { $(block).text(70); window.step = 70; }
					if(value == 17) { $(block).text(80); window.step = 80; }
					if(value == 18) { $(block).text(90); window.step = 90; }
					if(value == 19) { $(block).text(100); window.step = 100; }
				} else {
                    if(value == 0) {
                        $(block).text("Не знаю");
                        window.step = 0;
                    } else {
                        window.step = value;
                        $(block).text(value);
                    }
				}

				if(value == 0) { $('.count-payment-subtext').text(''); }
				if(value == 1) { $('.count-payment-subtext').text('Платеж'); }
				if(value == 2 || value == 3 || value == 4) { $('.count-payment-subtext').text('Платежа'); }
				if(value >= 5) { $('.count-payment-subtext').text('Платежей'); }
            },

            onSlideEnd: function(position, value) {
                $.ajax({
                    method: 'GET',
                    url: '/ajax/calculator.php?state=online&step=' + window.step,

                    beforeSend: function() {
                        $('.main-table-container').addClass('ajax-loading');
                        $('.mobile-main-table-container').addClass('ajax-loading');
                    },

                    success: function(data) {
                        $('#content-bank-ajax').html(data);
                    }
                });
            }
        });
    });
})();