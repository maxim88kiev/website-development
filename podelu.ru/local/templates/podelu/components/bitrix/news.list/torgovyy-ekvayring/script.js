function Acquiring(selector, params) {
    this.$el = $(selector);
    this.params = params;
    this.$banks = null;
    this.banks = [];

    this.isShowMobileFilter = false;

    if (!this.$el.length) {
        return;
    }

    this.init();
}

Acquiring.prototype = {
    constructor: Acquiring,

    init: function() {
        this.$title = this.$el.find('.acquiring__title');
        this.$titleCity = this.$title.find('span');
        this.$banks = this.$el.find('.acquiring__bank:not(.acquiring__bank_header)');
        this.$mobileTitle = this.$el.find('.filter-left-block__mobile-title');
        this.$mobileFilters = this.$el.find('.filter-left-block__mobile-filters');

        this.initBanks();

        setTimeout(() => {
            this.setFilterBanksHeight();
        }, 200);

        this.bindEvents();
    },

    initBanks: function() {
        this.$banks.each(this.initBank.bind(this));
    },

    initBank: function(index, el) {
        console.log(index);
        const params = this.params[index];
        this.banks.push(new AcquiringBank(el, params));
    },

    bindEvents() {
        this.$mobileTitle.on('click', this.toggleMobileFilter.bind(this));

        $(window).on('resize', this.setFilterBanksHeight.bind(this));

        this.$titleCity.on('click', this.onClickTitleCity.bind(this));
    },

    toggleMobileFilter: function() {
        if (this.isShowMobileFilter) {
            this.closeMobileFilter();
        } else {
            this.openMobileFilter();
        }
    },

    openMobileFilter: function() {
        this.$mobileFilters.slideDown(function() {
            this.isShowMobileFilter = true;
            this.$mobileTitle.text('Скрыть');
        }.bind(this));
    },

    closeMobileFilter: function() {
        this.$mobileFilters.slideUp(function() {
            this.isShowMobileFilter = false;
            this.$mobileTitle.text('Другие параметры');
        }.bind(this));
    },

    setFilterBanksHeight() {
        const $filterLeftBlock = $('.filter-left-block');
        const $banksContainer = $('.filter-left-block__banks-container');

        const height = $filterLeftBlock.outerHeight() - $banksContainer.position().top - 8;
        $banksContainer.css('height', height <= 76 ? 76 : height);
    },

    onClickTitleCity() {
        console.log(document.body.clientWidth);
        if (document.body.clientWidth < 1024) {
            $('.select-region').show();
            $('.select-region-layer').show();
        }
    },
};

function AcquiringBank(el, params) {
    this.$el = $(el);
    this.params = params;
    this.$detail = null;
    this.$linkDetail = null;
    this.$selectIndustry = null;

    this.isOpened = false;
    this.regionId = null;
    this.region = null;

    this.industryId = null;
    this.industry = null;

    this.init();
}

AcquiringBank.prototype = {
    constructor: AcquiringBank,

    init: function () {
        this.$detail = this.$el.find('.acquiring__bank-detail');
        this.$link = this.$el.find('.acquiring__bank-link');
        this.$linkDetail = this.$el.find('.acquiring__bank-link-detail');
        this.$selectIndustry = this.$el.find('.acquiring__bank-industry-select');

        this.regionId = this.params['REGION_INDEX'];
        this.region = this.params['REGIONS'][this.regionId];

        this.industryId = Object.keys(this.region['INDUSTRIES'])[0];
        this.industry = this.region['INDUSTRIES'][this.industryId];

        this.$rate = this.$el.find('.acquiring__bank-rate');
        this.$industrySelect = this.$el.find('.nice-select');

        this.$preview = this.$el.find('.acquiring__bank-row');
        this.$detailHide = this.$el.find('.acquiring__bank-detail-hide');


        this.$equipmentList = this.$el.find('.acquiring__bank-equipment-list');
        this.$equipmentPrev = this.$el.find('.acquiring__bank-equipment-prev');
        this.$equipmentNext = this.$el.find('.acquiring__bank-equipment-next');

        this.bindEvents();
    },

    bindEvents: function() {
        this.$linkDetail.on('click', this.clickLinkDetail.bind(this));
        this.$preview.on('click', function(e) {
            if ($(e.target).closest('.nice-select, .acquiring__bank-col_equipment').length) {
                return;
            }

            this.clickLinkDetail();
        }.bind(this));

        this.$detailHide.on('click', this.close.bind(this));

        if (this.$selectIndustry) {
            this.$selectIndustry.on('change', this.onChangeIndustry.bind(this));
        }

        // if (document.body.clientWidth > 1024) {
        if (this.$industrySelect.length) {
            this.$el.find('.acquiring__bank-industry-select').niceSelect();
            this.niceSelectSetMaxWidth();
        }
        // }

        if (document.body.clientWidth < 1024) {
            //this.$el.find('.acquiring__bank-equipment-list').slick();

            const settings = {
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            };
            // this.$el.find('.acquiring__bank-equipment-list').slick(settings);
        }



        this.$equipmentPrev.on('click', this.onClickEquipmentPrev.bind(this));
        this.$equipmentNext.on('click', this.onClickEquipmentNext.bind(this));

        this.$equipmentList.on('scroll', this.onScrollequipmentList.bind(this));
    },

    clickLinkDetail: function() {
        if (document.body.clientWidth < 1024) {
            return this.openMobileDetail();
        }

        if (this.isOpened) {
            return this.close();
        }

        return this.open();
    },

    open: function() {
        this.$detail.slideDown(function() {
            this.isOpened = true;
            this.$el.addClass('acquiring__bank_opened');
        }.bind(this));
    },

    close: function () {
        this.$el.removeClass('acquiring__bank_opened');

        this.$detail.slideUp(function() {
            this.isOpened = false;
        }.bind(this));
    },

    onChangeIndustry: function(e) {
        $('.acquiring-table-container').addClass('acquiring-table-container--ajax-loading');

        this.industryId = e.currentTarget.value;
        this.industry = this.region['INDUSTRIES'][this.industryId];

        this.render();

        const url = '/api/v1/acquiring/industry/set.php';
        const data = {
            bankId: this.params.ID,
            industryId: this.industryId,
        };
        $.post(url, data);

        setTimeout(function() {
            $('.acquiring-table-container').removeClass('acquiring-table-container--ajax-loading');
        }, 200);
    },

    render: function() {
        this.$rate.text(this.industry['RATE']);
        this.renderDetail();
    },

    renderDetail: function() {
        let html = '';
        html += '<div class="acquiring__bank-detail-col">';
        html += '<div class="acquiring__bank-detail-title">Комиссия эквайринга</div>';
        html += this.getLayoutTariffList();
        html += '</div>';

        html += '<div class="acquiring__bank-detail-col">';
        html += '<div class="acquiring__bank-detail-title">Дополнительно</div>';
        html += this.getLayoutBankOptions();
        html += '</div>';

        html += '<div class="acquiring__bank-detail-hide">Скрыть детали</div>';

        this.$el.find('.acquiring__bank-detail').html(html);
    },

    getLayoutTariffList: function() {
        const keys = Object.keys(this.industry['TARIFFS']);
        let emptyName = 1;

        let html = '';

        html += '<div class="acquiring__bank-tariff-list">';

        for (let i = 0; i < keys.length; i++) {
            let key = keys[i];
            let tariff = this.industry['TARIFFS'][key];
            let name = tariff['name'];
            if (!name) {
                name = 'Тариф ' + emptyName++;
            }

            html += '<div class="acquiring__bank-tariff">';

            html += '<div class="acquiring__bank-tariff-name">';
            html += '<span>' + name + ':</span>' + tariff['terms'];
            html += '</div>';

            html += '<div class="acquiring__bank-tariff-description">';
            html += this.formatTariffRates(tariff['rates']);
            html += '</div>';

            html += '</div>';
        }

        html += '</div>';

        return html;
    },

    getLayoutBankOptions: function() {
        const keys = Object.keys(this.industry['TARIFFS']);
        const tariff = this.industry['TARIFFS'][keys[0]];

        const deletePaysystems = ['Visa', 'Mastercard', 'Мир'];
        let paysystems = tariff['paysystems'].split(',').map(t => t.trim()).filter(t => !~deletePaysystems.indexOf(t));
        paysystems = paysystems.join(', ');
        let html = '';

        html += '<div class="acquiring__bank-options">';

        html += '<div class="acquiring__bank-option">';
        html += '<span class="acquiring__bank-option-name">Прочие платежные системы</span>';
        html += '<span class="acquiring__bank-option-value">' + paysystems + '</span>';
        html += '</div>';

        html += '<div class="acquiring__bank-option">';
        html += '<span class="acquiring__bank-option-name">Подключение</span>';
        html += '<span class="acquiring__bank-option-value">' + tariff['connection_price'] + '</span>';
        html += '</div>';

        html += '<div class="acquiring__bank-option">';
        html += '<span class="acquiring__bank-option-name">Сроки зачисления</span>';
        html += '<span class="acquiring__bank-option-value">' + tariff['dates'] + '</span>';
        html += '</div>';

        html += '</div>';

        return html;
    },

    formatTariffRates: function(rates) {
        let html = '';
        html += '<div class="acquiring__bank-tariff-rate-list">';

        for (let i=0; i < rates.length; i++) {
            const rate = rates[i];

            html += '<div class="acquiring__bank-tariff-rate">';

            html += '<div class="acquiring__bank-tariff-rate-name">';
            html += this.getRateName(rate);
            html += '</div>';

            html += '<div class="acquiring__bank-tariff-rate-value">';

            if (rate['text']) {
                html += rate['text'];
            } else {
                html += rate['value'] + '%';
            }

            html += '</div>';

            html += '</div>';
        }

        html += '</div>';

        return html;
    },

    getRateName: function(rate) {
        const min = parseInt(rate['min']);
        const max = parseInt(rate['max']);

        if (min === 0 && max === 9999) {
            return 'любой оборот';
        }

        if (min === 0) {
            return 'менее ' + max + ' тыс. руб/мес.';
        }

        if (max === 9999) {
            return 'при обороте свыше ' + min + ' тыс. руб /мес.';
        }

        return 'при обороте от ' + min + ' до ' + max + ' тыc. руб/мес.';
    },

    openMobileDetail: function() {
        const info = this.$el.find('.acquiring__bank-col_info').html();
        const link = this.$link.attr('href');

        const main = this.$el.find('.acquiring__bank-detail-col').eq(0).html();
        const extra = this.$el.find('.acquiring__bank-detail-col').eq(1).html();

        let html = '<div class="acquiring__bank-detail">';

        html += '<div class="acquiring__bank-col acquiring__bank-col_info">';
        html += info;
        html += '</div>';

        html += main;
        html += this.getHtmlEquipments();
        html += extra;

        html += '<div class="acquiring__bank-detail-col acquiring__bank-detail-col_link">';
        html += '<a class="acquiring__bank-detail-modal" href="' + link + '" target="_blank">';
        html += 'Оформить на сайте банка';
        html += '</a>';
        html += '</div>';

        html += '</div>';

        $.magnificPopup.open({
            mainClass: 'mfp-acquiring-bank',
            items: {
                src: html,
                type: 'inline'
            },
            callbacks: {
                open: function() {
                    setTimeout(function() {
                        const settings = {
                            dots: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        };
                        $('.acquiring__bank-detail-equipment-list').slick(settings);
                    }, 0)
                },
            }
        });
    },

    niceSelectSetMaxWidth() {
        const width = document.body.clientWidth;
        const offset = this.$industrySelect.offset();
        const maxWidth = width - offset.left;

        // this.$industrySelect.find('.list').css('width', maxWidth > 320 ? 320 : maxWidth);
    },

    getHtmlEquipments: function () {
        let html = '';
        html += '<div class="acquiring__bank-detail-col acquiring__bank-detail-col_equipment">';

        html += '<div class="acquiring__bank-detail-title">';
        html += 'Оборудование';
        html += '</div>';


        html += '<div class="acquiring__bank-detail-equipment-card">';
        html += this.getHtmlEquipmentOptionList();
        html += this.getHtmlEquipmentList();
        html += '</div>';

        html += '</div>';

        return html;
    },

    parseEquipmentOptions() {
        let options = [];
        const $options = this.$el.find('.acquiring__bank-equipment-option');

        for (let i = 0; i < $options.length; i++) {
            const option = $options[i];
            const mobileOption = this.getMobileEquipmentOption(option);

            if (!mobileOption) {
                continue;
            }

            options.push(mobileOption);
        }

        return options;
    },

    getMobileEquipmentOption: function(option) {
        let name = '';
        let value = '';

        const text = option.innerHTML;
        const isAvailable = option.classList.contains('acquiring__bank-equipment-option_yes');

        switch (text) {
            case 'Покупка':
                return false;
            case 'Собственный терминал':
                name = 'Подключение собственного терминала';
                value = isAvailable ? 'доступно' : 'недоступно';
                break;
            case 'Аренда':
                name = 'Аренда оборудования';
                value = isAvailable ? 'доступна' : 'недоступна';
                break;
        }

        return {
            name: name,
            value: value,
        };
    },

    getHtmlEquipmentOptionList: function() {
        let html = '';
        const options = this.parseEquipmentOptions().reverse();

        html += '<div class="acquiring__bank-detail-equipment-option-list">';
        for (let i = 0; i < options.length; i++) {
            const option = options[i];

            html += '<div class="acquiring__bank-detail-equipment-option">';
            html += option.name + ' ' + option.value;
            html += '</div>';
        }
        html += '</div>';

        return html;
    },

    getHtmlEquipmentList: function() {
        let html = '';
        const equipments = this.parseEquipments();

        html += '<div class="acquiring__bank-detail-equipment-list slick-slider">';
        for (let i = 0; i < equipments.length; i++) {
            html += this.getHtmlEquipment(equipments[i]);
        }
        html += '</div>';

        return html;
    },

    parseEquipments: function() {
        let equipments = [];
        const $equipments = this.$el.find('.acquiring__bank-equipment');

        for (let i = 0; i < $equipments.length; i++) {
            const equipment = $equipments[i];
            const $equipment = $(equipment);

            equipments.push({
                img: $equipment.find('img').attr('src'),
                name: $equipment.find('.acquiring__bank-equipment-name').text().trim(),
                specification: $equipment.find('.acquiring__bank-equipment-specification').text().trim(),
                description: $equipment.find('.acquiring__bank-equipment-description').text().trim(),
            });
        }

        return equipments;
    },

    getHtmlEquipment: function(equipment) {
        let html = '';
        html += '<div class="acquiring__bank-detail-equipment">';

        if (!!equipment.img) {
            html += '<div class="acquiring__bank-detail-equipment-img">';
            html += '<img src="' + equipment.img + '">';
            html += '</div>';
        }

        html += '<div class="acquiring__bank-detail-equipment-info">';

        html += '<div class="acquiring__bank-detail-equipment-name">';
        html += equipment.name;
        html += '</div>';

        html += '<div class="acquiring__bank-detail-equipment-specification">';
        html += equipment.specification;
        html += '</div>';

        html += '<div class="acquiring__bank-detail-equipment-description">';
        html += equipment.description;
        html += '</div>';

        html += '</div>'; // acquiring__bank-detail-equipment-info

        html += '</div>'; // acquiring__bank-detail-equipment

        return html;
    },

    onClickEquipmentPrev: function() {
        const width = this.$equipmentList.outerWidth();
        const scrollLeft = this.$equipmentList.scrollLeft();
        const pos = Math.ceil(scrollLeft/width);

        this.$equipmentList.animate({scrollLeft: (pos - 1) * width}, 300);
    },

    onClickEquipmentNext: function() {
        const width = this.$equipmentList.outerWidth();
        const scrollLeft = this.$equipmentList.scrollLeft();
        const pos = Math.floor(scrollLeft/width);

        this.$equipmentList.animate({scrollLeft: (pos + 1) * width}, 300);
    },

    onScrollequipmentList: function() {
        const width = this.$equipmentList.outerWidth();
        const scrollLeft = this.$equipmentList.scrollLeft();

        const pos = Math.ceil((scrollLeft - width/2) / width);

        const className = 'acquiring__bank-equipment-baloon_active';
        this.$el.find('.acquiring__bank-equipment-baloon').removeClass(className).eq(pos).addClass('acquiring__bank-equipment-baloon_active');
        console.log(pos);

        console.log(scrollLeft);
    },
};


(function() {
    window.encodeQueryData = function(data) {
        var ret = [];
        for (var d in data)
          ret.push(encodeURIComponent(d) + '=' + encodeURIComponent(data[d]));
        return ret.join('&');
     }

    window.fetchFilter = function() {
        if( $(".js-only-bank-checkbox:checked").length == 0) {
            window.filter.banks = [-1];
        } else {
            var bankIds = new Array();
            $(".js-only-bank-checkbox:checked").each(function() {
                bankIds.push( $(this).val() );
            });
            window.filter.banks = bankIds.join(',');
        }

        var interval = $('.filter-left-block input[name="interval"]:checked');

        const start =  $(interval).data('start');
        if (start) {
            window.filter['interval-start'] = start;
        } else {
            delete window.filter['interval-start'];
        }

        const end = $(interval).data('end');
        if (end) {
            window.filter['interval-end'] = end;
        } else {
            delete window.filter['interval-end'];
        }

        if( $('.filter-left-block input[name="check-terminal-rent"]').is(':checked') ) {
            window.filter['check-terminal-rent'] = true;
        } else {
            delete window.filter['check-terminal-rent'];
        }

        if( $('.filter-left-block input[name="check-buy-terminal"]').is(':checked') ) {
            window.filter['check-buy-terminal'] = true;
        } else {
            delete window.filter['check-buy-terminal'];
        }

        if( $('.filter-left-block input[name="check-my-terminal"]').is(':checked') ) {
            window.filter['check-my-terminal'] = true;
        } else {
            delete window.filter['check-my-terminal'];
        }

        $.ajax({
            method: 'GET',
            url: '?' + encodeQueryData(window.filter),

            beforeSend: function() {
                $('.acquiring-table-container').addClass('acquiring-table-container--ajax-loading');
            },

            success: function(content) {
                $('#acquiring-table-container').html(content);

                $('.acquiring-table-container').removeClass('acquiring-table-container--ajax-loading');
            }
        });
    };
    
    $(document).ready(function() {

		if ( $('.acquiring-table__header').length ) {
			$(document).on('scroll', function() {
				var havbarHeight = $('.navbar').outerHeight();
				var tableHeaderOffsetTop = $('.acquiring-table-container').offset().top;
                var offetScrollTop = $(document).scrollTop();
                
                if( offetScrollTop > $('.acquiring-table-container').outerHeight() ) {
                    $('.acquiring-table__header').hide(); return;
                } else {
                    $('.acquiring-table__header').show();
                }

                if(offetScrollTop > tableHeaderOffsetTop - havbarHeight) {
                    $('.acquiring-table__header').addClass('acquiring-table__header--fixed');

					$('.acquiring-table__header.acquiring-table__header--fixed').css({
						'width': $('.acquiring-table-container').width(),
						'top': havbarHeight
                    });

                    $('.acquiring-table').css('padding-top', $('.acquiring-table__header').outerHeight());
                } else {
                    $('.acquiring-table__header').removeClass('acquiring-table__header--fixed');
                    $('.acquiring-table').css('padding-top', '0');
				}
			});
		}

        $(document).on('click', '.js-acquiring-show-more', function(event) {
            event.preventDefault();

            var bankId = $(this).data('bank-id');

            $(".js-bank-additional-info-container[data-bank-id='" + bankId + "'").show();
            $(".js-bank-container[data-bank-id='" + bankId + "'").addClass('acquiring-table__row--bordered');

            $(this).hide();
        });

        $(document).on('click', '.js-acquiring-show-less', function(event) {
            event.preventDefault();

            var bankId = $(this).data('bank-id');

            $(".js-bank-additional-info-container[data-bank-id='" + bankId + "'").hide();
            $(".js-bank-container[data-bank-id='" + bankId + "'").removeClass('acquiring-table__row--bordered');

            $(".js-acquiring-show-more[data-bank-id='" + bankId + "'").show();
        });

        $(document).on('click', '.js-only-bank-branches', function(event) {
            $('.js-only-bank-checkbox[data-branches="true"]').prop('checked', true);

            window.fetchFilter();
        });

        $(document).on('click', '.js-only-bank-online', function(event) {
            $('.js-only-bank-checkbox[data-online="true"]').prop('checked', true);

            window.fetchFilter();
        });

        $(document).on('click', '.js-only-bank-gos', function(event) {
            $('.js-only-bank-checkbox[data-gos="true"]').prop('checked', true);

            window.fetchFilter();
        });

        $(document).on('click', '.js-only-bank-select-all', function(event) {
            $('.js-only-bank-checkbox').prop('checked', true);

            window.fetchFilter();
        });

        $(document).on('click', '.js-only-bank-clear-all', function(event) {
            $('.js-only-bank-checkbox').prop('checked', false);

            window.fetchFilter();
        });      
        
        $(document).on('click', '.filter-left-block input', function(event) {
            window.fetchFilter();
        });

        $(document).on('change', '.js-acquiring-change-industry', function(event) {
            $('.js-acquiring-inductry-item').hide();
            $('.js-acquiring-inductry-item[data-inductry-id="' + $(this).val() + '"]').show();

            $(this).parents('.acquiring-table__row').find('.js-acquiring-rate').html( $(this).find(':selected').data('rates') );
        });

		$(document).on('mousedown', '.right-block__right', function() {
			var leftValue = document.getElementsByClassName('bank-table-container')[0].scrollLeft;

			document.getElementsByClassName('bank-table-container')[0].scroll(leftValue + 240, 0);
		});
    });
})();
