BX.namespace("AMBase.Podelu.Rko");

BX.AMBase.Podelu.Rko.Filter = function(selector, requestFiltrate) {
    this.$el = $(selector);
    this.requestFiltrate = requestFiltrate;
    this.init();
};


BX.AMBase.Podelu.Rko.Filter.prototype = {
    constructor: BX.AMBase.Podelu.Rko.Filter,

    init: function() {
        this.$filterBankItems = this.$el.find('[data-filter-banks]');
        this.$filterBanks = this.$el.find('.banks-container input');

        this.bindEvents();
    },

    bindEvents: function() {
        this.$filterBankItems.on('click', this.filterBanks.bind(this));
    },

    filterBanks: function(e) {
        this.$filterBanks.prop('checked', false);
        const filterBy = $(e.currentTarget).data('filter-banks');
        this.$el.find('[data-bank-' + filterBy + '="true"]').prop('checked', true);

        this.requestFiltrate();
    },
};

BX.AMBase.Podelu.Rko.Results = function(selector) {
    this.$el = $(selector);
    this.init();
};

BX.AMBase.Podelu.Rko.Results.prototype = {
    constructor: BX.AMBase.Podelu.Rko.Results,

    init() {
        this.initItems();
    },

    initItems() {
        const $items = this.$el.find('.calculator-rko__item');

        for (let i = 0; i < $items.length; i++) {
            const item = $items[i];
            new BX.AMBase.Podelu.Rko.ResultItem(item);
        }
    }
};

BX.AMBase.Podelu.Rko.ResultItem = function(selector) {
    this.$el = $(selector);
    this.$detail = this.$el.find('.calculator-rko__detail');

    this.isOpened = false;


    this.init();
};

BX.AMBase.Podelu.Rko.ResultItem.prototype = {
    constructor: BX.AMBase.Podelu.Rko.ResultItem,

    init: function() {
        this.bindEvents();
    },

    bindEvents: function() {
      this.$el.find('.calculator-rko__preview, .calculator-rko__link_detail')
          .on('click', this.onClickLinkDetail.bind(this));
    },

    onClickLinkDetail: function(e) {
        if (e.target.tagName === 'A') {
            return;
        }

        if (this.isOpened) {
            return this.closeDetail();
        }

        return this.openDetail();
    },

    openDetail: function() {
        this.$detail.slideDown(function() {
            this.isOpened = true;
            this.$el.addClass('calculator-rko__item_opened');
        }.bind(this));
    },

    closeDetail: function() {
        this.$detail.slideUp(function() {
            this.isOpened = false;
            this.$el.removeClass('calculator-rko__item_opened');
        }.bind(this));
    },

};

$(function(){
    $(document).on('click' , '.result-table .main-table tr.main-row' ,  function(){
        var id = $(this).data("bank-id");
        // $(this).siblings().each(function(){
        //     $(this).removeClass('selected');
        //     var id = $(this).data("bank-id");
        //     $('.tariff-info-row[data-bank-id="'+id+'"]').hide();
        //     $('.tariff-info-row[data-bank-id="'+id+'"]').hide();
        // });
        if($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('.tariff-info-row[data-bank-id="'+id+'"]').removeClass('selected');
            $('.tariff-info-row[data-bank-id="'+id+'"]').hide();
        } else {
            $(this).addClass('selected');
            $('.tariff-info-row[data-bank-id="'+id+'"]').addClass('selected');
            $('.tariff-info-row[data-bank-id="'+id+'"]').show();
        }
    });

    $(document).on('click' , '.hide-detail' ,  function(){
        var id = $(this).data("bank-id");

        $('.tariff-info-row[data-bank-id="'+id+'"]').removeClass('selected');
        $('.tariff-info-row[data-bank-id="'+id+'"]').hide();
    });

    function in_array(needle, haystack){
        for(var i=0; i<haystack.length; i++)
        {
            if(haystack[i] == needle)
                return true;
        }
        return false;
    }

    function requestFiltrate(){
        var filters = {};
        filters['BANK'] = [];
        $(".filter .checkbox-filter:checked").each(function(){
            if($(this).attr('name') == "BANK"){
                var bankId = $(this).closest('label').data('bank-id');
                filters['BANK'].push(bankId);
            } else if(in_array($(this).attr('name') , ['CONTRAGENTS' , 'CASH_WITHDRAW' , 'TRANSFER'])) {
                filters[$(this).attr('name')] = {FROM: $(this).data('value-from') , TO: $(this).data('value-to')};
            } else {
                filters[$(this).attr('name')] = $(this).val();
            }
        });
        var query = {
            c: 'podelu:calculator',
            action: 'getTariffs',
            mode: 'class'
        };

        var data = {
            filters: filters,
            SITE_ID: 's1',
            template: '.default',
            params: window.NEW_CALCULATOR_DESKTOP_PARAMS
        };

        var request = $.ajax({
            url: '/bitrix/services/main/ajax.php?' + $.param(query, true),
            method: 'POST',
            data: data
        });

        $(".calculator-rko__results").addClass('ajax-loading');
        $(".banks-container").addClass('ajax-loading');

        request.done(function (response) {
            $(".calculator-rko__results").removeClass('ajax-loading');
            $(".banks-container").removeClass('ajax-loading');
            if(response.status === 'success') {
                const resultsSelector = '.calculator-rko__results';
                const results = $(response.data).find(resultsSelector).html();
                $(resultsSelector).html(results);

                const filterSelector = '.calculator-rko__filter';
                const filter = $(response.data).find(filterSelector).html();
                $(filterSelector).html(filter);

                new BX.AMBase.Podelu.Rko.Filter('.calculator-container .filter', requestFiltrate);
                new BX.AMBase.Podelu.Rko.Results('.calculator-rko__results');
            }
        });
    }

    $(document).on('click' , '.calculator-container .checkbox-filter' , requestFiltrate);

    $(document).on('click' , '.filter .select-all' , function(){
        $('.checkbox[data-bank-id]').find('input').attr('checked' , 'checked');
        requestFiltrate();
    });
    $(document).on('click' , '.filter .clear-all' , function(){
        $('.checkbox[data-bank-id]').find('input').removeAttr('checked');
        requestFiltrate();
    });

    new BX.AMBase.Podelu.Rko.Filter('.calculator-container .filter', requestFiltrate);
    new BX.AMBase.Podelu.Rko.Results('.calculator-rko__results');
});
