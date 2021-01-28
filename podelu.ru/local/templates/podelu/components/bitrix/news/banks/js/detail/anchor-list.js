$(function() {
    function onClickItem() {
        const $item = $(this);
        const id = $item.data('faq');

        const $faqItem = $('.faq-item[data-faq="'+ id +'"]');
        const offsetTop = $faqItem.offset().top;

        $("html, body").animate({
            scrollTop: offsetTop - $('.navbar').outerHeight()
        }, 1000);
    }

    $('.anchor-list__item').on('click', onClickItem);
});