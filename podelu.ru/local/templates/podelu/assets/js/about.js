$(function () {

    $('.content-list__items').owlCarousel({
        center: true,
        items: 4,
        loop: true,
        margin: 32,
        autoWidth: true,
        lazyLoad: true,
        autoplayHoverPause: true,
        autoplaySpeed: 500,
        autoplay: true
    });

    $('.team__container-items').owlCarousel({
        lazyLoad: true,
        autoplayHoverPause: true,
        autoplaySpeed: 500,
        responsive: {
            0: {
                items: 1,
                loop: true,
                autoplay: true
            },
            768: {
                items: 2,
                loop: true,
                autoplay: true
            },
            991: {
                items: 3,
                loop: true,
                autoplay: true
            },
            1199: {
                items: 4
            }
        }
    });

    $('.about-us__items').owlCarousel({
        lazyLoad: true,
        autoplayHoverPause: true,
        autoplaySpeed: 500,
        responsive: {
            0: {
                items: 1,
                loop: true,
                autoplay: true
            },
            768: {
                items: 2,
                loop: true,
                autoplay: true
            },
            991: {
                items: 3,
                loop: true,
                autoplay: true
            },
            1199: {
                items: 4
            }
        }
    });

});
$(document).ready(function () {

    $(window).scroll(function () {
        let header_element = $('.header');
        const height_scroll = 600;
        let winScrollTop = $(this).scrollTop();
        if (winScrollTop > height_scroll) {
            header_element.css('background', 'white');
        } else {
            header_element.css('background', '#FAF5F2');
        }
    });

    $('.header__container-menu-mob').on('click', function () {
        $('.header__menu').toggle('slow');
    });

    $('.benefits__container-img > svg:nth-child(1) > path:nth-child(2)').hover(
        function () {
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(3)').css('stroke', '#fff');
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(4)').css('stroke', '#fff');
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(5)').css('stroke', '#fff');
        }, function () {
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(3)').css('stroke', '#0D291C');
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(4)').css('stroke', '#0D291C');
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(5)').css('stroke', '#0D291C');
        }
    );
    $('.benefits__container-img > svg:nth-child(1) > path:nth-child(10)').hover(
        function () {
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(11)').css('stroke', '#fff');
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(12)').css('stroke', '#fff');
        }, function () {
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(11)').css('stroke', '#0D291C');
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(12)').css('stroke', '#0D291C');
        }
    );
    $('.benefits__container-img > svg:nth-child(1) > path:nth-child(14)').hover(
        function () {
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(15)').css('stroke', '#fff');
        }, function () {
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(15)').css('stroke', '#0D291C');
        }
    );
    $('.benefits__container-img > svg:nth-child(1) > path:nth-child(20)').hover(
        function () {
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(21)').css('stroke', '#fff');
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(22)').css('stroke', '#fff');
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(23)').css('stroke', '#fff');
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(24)').css('stroke', '#fff');
        }, function () {
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(21)').css('stroke', '#0D291C');
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(22)').css('stroke', '#0D291C');
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(23)').css('stroke', '#0D291C');
            $('.benefits__container-img > svg:nth-child(1) > path:nth-child(24)').css('stroke', '#0D291C');
        }
    );

});