(function() {
    String.prototype.ucFirst = function() {
        var str = this;
        if(str.length) {
            str = str.charAt(0).toUpperCase() + str.slice(1);
        }
        return str;
    };

    $(document).keyup(function() {
        if(event.keyCode === 27) {
            // Устаналиваем список городов по-умолчанию
            $('.select-region ul').html(window.cityStorage);
            // Очищаем поле ввода города
            $('.select-region input').val('');

            $('.select-region').hide();
            $('.select-region-layer').hide();
        }
    });

    $(document).ready(function() {
        window.cityStorage = $('.select-region ul').html();

        $(document).on('keyup', '.select-region input', function(event) {
            event.preventDefault();

            var query = $(this).val();

            query = query.toLowerCase();
            query = query.ucFirst();

            $(".select-region li").hide();
            $(".select-region li:contains('" + query + "')").show();

            /*
                $.ajax({
                    method: 'GET',
                    url: '/ajax/region.php?query=' + query,
                    dataType: 'json',

                    success: function(data) {
                        $('.select-region ul').html('');

                        if(data.length == 0) {
                            $('.select-region ul').append('<li>Ничего не найдено</li>');
                        } else {
                            for(var key in data) {
                                $('.select-region ul').append('<li><a href="/ajax/region.php?region=' + data[key].region + '&city=' + data[key].city + '">' + data[key].region + ', ' + data[key].city + '</a></li>');
                            }
                        }
                    }
                });
            */
        });

        // Показываем список городов
        $(document).on('click', '.city-close, .select-region-layer', function(event) {
            event.preventDefault();

            // Устаналиваем список городов по-умолчанию
            $('.select-region ul').html(window.cityStorage);
            // Очищаем поле ввода города
            $('.select-region input').val('');

            $('.select-region').hide();
            $('.select-region-layer').hide();
        });

        // Выбираем опрделенные город
        $(document).on('click', '[data-geo="open"]', function(event) {
            event.preventDefault();

            document.getElementById("menuElement").classList.remove("active");
            $('.select-region').show();
            $('.select-region-layer').show();
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
    });
})();