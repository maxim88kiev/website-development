(function() {
    $(document).ready(function() {
        //var elem = document.querySelector('.js-count-payment-range');



        $('input[type="range"]').rangeslider({
            polyfill: false,

            onSlide: function(position, value) {
                $('.count-payment-value, .count-payment-mobile').text(value);
            },

            onSlideEnd: function(position, value) {
                $.ajax({
                    method: 'GET',
                    url: '/ajax/calculator.php?step=' + value,

                    beforeSend: function() {
                        $('.count-payment-value, .count-payment-mobile').text(value);
                        $('.main-table-container').addClass('ajax-loading');
                    },

                    success: function(data) {
                        $('#content-bank-ajax').html(data);
                    }
                });
            }
        });
    });
})();