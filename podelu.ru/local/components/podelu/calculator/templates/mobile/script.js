$(function(){

    $(document).on('click' , '.js-calculator-tariff-popup' , function(){
        var query = {
            c: 'podelu:calculator',
            action: 'getTariffInfo',
            mode: 'class'
        };

        var tariffId = $(this).closest('.search-results__tariff-item').data('tariff-id');

        var data = {
            tariffId: tariffId,
            template: 'popup',
            SITE_ID: 's1',
            params: window.NEW_CALCULATOR_MOBILE_PARAMS
        };

        var request = $.ajax({
            url: '/bitrix/services/main/ajax.php?' + $.param(query, true),
            method: 'POST',
            data: data
        });
        $("body").addClass('ajax-loading');
        request.done(function (response) {
            $("body").removeClass('ajax-loading');
            if(response.status == 'success') {
                $.fancybox.open(response.data);
            }
        });

    });
    $(document).on('click' , '.js-filter-option' , requestMobileFiltrate);


    //$(document).on('click' , '.navbar-menu__mobile-banks .checkbox-filter' , requestMobileFiltrate);

    $(document).on('click' , '#banks-popup .apply' , function(){
        requestMobileFiltrate(function(){
            $.fancybox.close();
        });
    });
    $(document).on('click' , '#banks-popup .clear-all' , function(){
        $('#banks-popup .checkbox[data-bank-id]').find('input:checked').each(function(){
            if(in_array($(this).closest('label').data('bank-id') , [10 , 1679 , 1678 , 1690 , 1688 , 1681 , 1682])){
                $(this).prop('checked' , false);
            }
        });
        requestMobileFiltrate(function(){
            $.fancybox.close();
        });
    });
});

function in_array(needle, haystack){
    for(var i=0; i<haystack.length; i++)
    {
        if(haystack[i] == needle)
            return true;
    }
    return false;
}

function requestMobileFiltrate(callback){
    var filters = {};
    filters['BANK'] = [];
    $(".js-filter-option.selected").each(function(){
        filters[$(this).data('name')] = {FROM: $(this).data('value-from') , TO: $(this).data('value-to')};
    });

    $("#banks-popup .checkbox-filter:checked").each(function(){
        if($(this).attr('name') == "BANK"){
            var bankId = $(this).closest('label').data('bank-id');
            filters['BANK'].push(bankId);
        }
    });

    var query = {
        c: 'podelu:calculator',
        action: 'getTariffs',
        mode: 'class'
    };

    var data = {
        filters: filters,
        template: 'mobile',
        SITE_ID: 's1',
        params: window.NEW_CALCULATOR_MOBILE_PARAMS
    };

    var request = $.ajax({
        url: '/bitrix/services/main/ajax.php?' + $.param(query, true),
        method: 'POST',
        data: data
    });

    $("body").addClass('ajax-loading');
    var self = this;
    request.done(function (response) {
        $("body").removeClass('ajax-loading');
        if(response.status == 'success') {
            $('.search-results__container').html($(response.data).find('.search-results__container').html());
            $(self).siblings().removeClass('selected');
            $(self).addClass('selected');
            if(callback){
                callback();
            }
        }
    });
}