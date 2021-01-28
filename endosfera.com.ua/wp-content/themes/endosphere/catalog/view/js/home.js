// function setMask(selector, mask) {
//     function replaceAt(str, index, replacement) {
//         let newStr = '';
//         for (let i = 0, length = str.length; i < length; i++) {
//             newStr += i === index ? replacement : str[i];
//         }
//         return newStr;
//     }
//     const input = document.querySelector(selector);
//     let positions = [], currentPosition = 0, itter = false;
//     for (let i = 0; i < mask.length; i++) {
//         if (mask[i] === '#') {
//             positions.push(i);
//         }
//     }
//     mask = mask.replace(/\#/g, '_');
//     input.value = mask;
//     if (input !== null) {
//         input.onkeydown = function(evt) {
//             if (/[\d]/.test(evt.key)) {
//                 if (currentPosition < positions.length) {
//                     mask = replaceAt(mask, positions[currentPosition], evt.key);
//                     currentPosition++;
//                     itter = currentPosition < positions.length - 1;
//                 }
//             } else if (evt.keyCode === 8) {
//                 if (currentPosition >= 0) {
//                     if (currentPosition > 0) {
//                         currentPosition--;
//                     }
//                     mask = replaceAt(mask, positions[currentPosition], '_');
//                 }
//             }
//             input.value = mask;
//             const caretPosition = currentPosition < positions.length - 1 ? positions[currentPosition] : positions[currentPosition - 1] + 1;
//             input.setSelectionRange(caretPosition, caretPosition);
//             input.setAttribute('data-valid', currentPosition === positions.length);
//             evt.preventDefault();
//         };
//     } else {
//         console.error(selector);
//     }
// }
//
// setMask(".telephone__input", "+380 (##) ###-##-##");



const sliderplugin = function (block, arrowLeftSelector, arrowRightSelector) {
    let allowScroll = true;
    const slider = document.querySelector(block);
    if (slider !== null) {
        const arrowLeft = document.querySelector(arrowLeftSelector);
        if (arrowLeft !== null) {
            arrowLeft.disabled = true;
        }
        const arrowRight = document.querySelector(arrowRightSelector);

        let activeSlider = 0;
        const elementsCount = document.querySelectorAll(block + ' > div').length - 1;

        function scrollSlide(current) {
            const elements = document.querySelectorAll(block + ' > div');

            let newElementsCount = elementsCount - Math.round(slider.offsetWidth / elements[current].offsetWidth);

            switch (current) {
                case 0 :
                    arrowLeft.disabled = true;
                    break;

                case newElementsCount + 1 :
                    arrowRight.disabled = true;
                    break;

                default:
                    arrowLeft.disabled = false;
                    arrowRight.disabled = false;
                    break;
            }
            let scroll_to = 0;
            for (let i = 0; i < current; i++) {
                scroll_to += elements[i].offsetWidth;
            }

            let pos = ~~slider.scrollLeft;
            const id = setInterval(frame, 0);
            const countPixels = 5;

            function frame() {
                const toStep = slider.scrollLeft > scroll_to;

                if (~~pos === ~~scroll_to) {
                    clearInterval(id);
                    allowScroll = true;
                } else {
                    let tmp;
                    allowScroll = false;
                    if (toStep) {
                        tmp = pos - countPixels;
                        pos = tmp < scroll_to ? scroll_to : tmp;
                    } else {
                        tmp = pos + countPixels;
                        pos = tmp > scroll_to ? scroll_to : tmp;
                    }
                    slider.scrollLeft = pos;
                }
            }
        }

        let doAutoMove = true;

        if (arrowLeft !== null) {
            arrowLeft.addEventListener('click', function () {
                if (allowScroll) {
                    if (activeSlider !== 0) {
                        activeSlider--;
                    }
                    doAutoMove = false;
                    scrollSlide(activeSlider);
                }
            });
        }
        if (arrowRight !== null) {
            arrowRight.addEventListener('click', function () {
                if (allowScroll) {
                    if (activeSlider !== elementsCount) {
                        activeSlider++;
                    }
                    doAutoMove = false;
                    scrollSlide(activeSlider);
                }
            });
        }

        function sec() {
            if (doAutoMove) {
                if (activeSlider !== elementsCount) {
                    activeSlider++;
                } else {
                    activeSlider = 0;
                }
                scrollSlide(activeSlider);
            }
        }

        setInterval(sec, 2500);
    }
};

sliderplugin('.slider__list-wrapper', '.slider__prev', '.slider__next');
sliderplugin('.slider__list-wrapper-kharkov', '.kharkov__prev', '.kharkov__next');
sliderplugin('.slider__list-wrapper-lviv', '.lviv__prev', '.lviv__next');
sliderplugin('.slider__video-list-wrapper', '.slider-video__prev', '.slider-video__next');
var $j = jQuery.noConflict();

$j(document).ready(function () {

    var $j = jQuery.noConflict();

    $j(".comment__feedback-dislake").click(function () {

        ++this.innerText;
    });
    $j(".comment__feedback-like").click(function () {

        ++this.innerText;
    });

    $j('.procedure__video--button').click(function () {
        $j(".procedure__video--img, .procedure__video--button").css("display", "none");
        $j(".procedure__video--youtube").css("display", "block");
        $j(".procedure__video--youtube iframe")[0].attributes.src.nodeValue =
            "https://www.youtube.com/embed/ud1Vr025ot0?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1";
    });

    $j(".slider__list-img-video").click(function () {
        $j(".procedure__video--img, .procedure__video--button").css("display", "none");
        $j(".procedure__video--youtube").css("display", "block");
        $j(".procedure__video--youtube iframe")[0].attributes.src.nodeValue =
            "https://www.youtube.com/embed/" + this.attributes.rel.nodeValue + "?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1";
    });

    $j(".slider_3").slider({
        animate: true,
        range: "min",
        value: 0,
        min: 1,
        max: 100,
        step: 1,

        slide: function (event, ui) {
            let CountchildElement = 6;
            let count_val_next = (100 / CountchildElement).toFixed();
            let max_val_next = count_val_next;
            while (100 > max_val_next) {
                if (ui.value == max_val_next) {
                    let first_children = $j(".shape ul").children().first();
                    let copyElement = first_children.clone();
                    first_children.remove();
                    $j(".shape ul").append(copyElement);
                }
                max_val_next = Number(count_val_next) + Number(max_val_next);
            }

            $j("#slider-result").html(ui.value);
        },

        change: function (event, ui) {
            $j('#znch').attr('value', ui.value);
        }

    });

    $j(".slider_2").slider({
        animate: true,
        range: "min",
        value: 0,
        min: 1,
        max: 100,
        step: 1,

        slide: function (event, ui) {
            let CountchildElement = $j(".slider__block")[0].childElementCount;
            let count_val_next = (100 / CountchildElement).toFixed();
            let max_val_next = count_val_next;
            while (100 > max_val_next) {
                if (ui.value == max_val_next) {
                    let first_children = $j(".slider__block").children().first();
                    let copyElement = first_children.clone();
                    first_children.remove();
                    $j(".slider__block").append(copyElement);
                }
                max_val_next = Number(count_val_next) + Number(max_val_next);
            }

            $j("#slider-result").html(ui.value);
        },

        change: function (event, ui) {
            $j('#znch').attr('value', ui.value);
        }

    });


    $j('.slider__block-button').click(function () {
        $j(".popup-singup, .modal-overlay").show();
    });
    $j('.popup-singup__closed, .modal-overlay').on('click', function () {
        $j(".popup-singup, .modal-overlay").hide();
    });
    $j('.slider-bottom__button-add').click(function () {
        $j(".popup-singup__slider, .modal-overlay").show();
    });
    $j('.popup-singup__closed, .modal-overlay').on('click', function () {
        $j(".popup-singup__slider, .modal-overlay").hide();
    });
    $j('.procedure__button-add').click(function () {
        $j(".popup-singup__video, .modal-overlay").show();
    });
    $j('.popup-singup__closed, .modal-overlay').on('click', function () {
        $j(".popup-singup__video, .modal-overlay").hide();
    });
    $j('.comment__feedback-dopinfo').click(function () {
        $j(".popup__feedback-dopinfo, .modal-overlay").show();
        $j('.hidden_dopinfo').attr('value', this.getAttribute('rel'));
    });
    $j('.popup-singup__closed, .modal-overlay').on('click', function () {
        $j(".popup__feedback-dopinfo, .modal-overlay").hide();
    });

    $j('#darnitsa__popup').click(function () {
        $j(".popup-singup__contact, .modal-overlay").show();
    });
    $j('.popup-singup__closed, .modal-overlay').on('click', function () {
        $j(".popup-singup__contact, .modal-overlay").hide();
    });


    $j('#lukyanovka__popup').click(function () {
        $j("#popup-singup__lukyanovkal, .modal-overlay").show();
    });
    $j('.popup-singup__closed, .modal-overlay').on('click', function () {
        $j(".popup-singup__contact, .modal-overlay").hide();
    });


    $j('#sevastopol__popup').click(function () {
        $j("#popup-singup__sevastopol, .modal-overlay").show();
    });
    $j('.popup-singup__closed, .modal-overlay').on('click', function () {
        $j(".popup-singup__contact, .modal-overlay").hide();
    });


    $j('.slider-bottom__kiev').click(function () {
        $j('.slider-bottom__button').removeClass("slider-bottom__button--curent");
        $j('.slider-bottom__kiev').addClass("slider-bottom__button--curent");
        $j('.slider__list-hide').hide();
        $j('.slider__list--kiev').show();
    });
    $j('.slider-bottom__kharkov').click(function () {
        $j('.slider-bottom__button').removeClass("slider-bottom__button--curent");
        $j('.slider-bottom__kharkov').addClass("slider-bottom__button--curent");
        $j('.slider__list-hide').hide();
        $j('.slider__bottom-kharkov').show();
    });
    $j('.slider-bottom__lviv').click(function () {
        $j('.slider-bottom__button').removeClass("slider-bottom__button--curent");
        $j('.slider-bottom__lviv').addClass("slider-bottom__button--curent");
        $j('.slider__list-hide').hide();
        $j('.slider__bottom-lviv').show();
    });

    $j('.comment__autor-letter').each(function (i, elem) {
        elem.innerHTML = elem.firstChild.innerText.charAt(0);
    });

    var files_popup_1;
    var files_popup_2;
// Получим данные файлов и добавим их в переменную
    $j('input[type=file].slider-file__popup').change(function () {
        files_popup_1 = this.files;
    });
    $j('input[type=file].popup-register__input').change(function () {
        files_popup_2 = this.files;
    });

//popup_1
    $j('.button__popup_1').click(function (event) {
        if (!$j('.slider-file__popup').valid()) {
            $j('.slider-file__popup').css('border', '1px solid red');
            return false;
        }
        $j('.button__popup_1, .slider-file__popup').hide();
        $j('#wait').show();



        event.stopPropagation();
        event.preventDefault();
        var data = new FormData();
        $j.each(files_popup_1, function (key, value) {
            data.append(key, value);
        });
        data.append('form', 'form_1');
        $j.ajax({
            url: 'send.php?uploadfiles_1',
            type: 'POST',
            data: data,
            cache: false,
            processData: false,
            contentType: false,
            success: function (response) {
                $j('#wait').hide();
                $j('#return_data_1')[0].innerText = response;
            },
            error: function (response) {
                $j('#return_data_1')[0].innerText = "Ошибка. Данные не отправленны.";
            }
        });
    });

//popup_2
    $j('.button__popup_2').click(function (event) {
        if (!validation_form('#formID_2')) {
            return false;
        }
        $j('.button__popup_2, #formID_2 input').hide();
        $j('#wait_popup_2').show();



        event.stopPropagation();
        event.preventDefault();
        var data = new FormData($j("#formID_2")[0]);
        $j.each(files_popup_2, function (key, value) {
            data.append(key, value);
        });
        data.append('form', 'form_2');
        $j.ajax({
            url: 'send.php?uploadfiles_2',
            type: 'POST',
            data: data,
            cache: false,
            processData: false,
            contentType: false,
            success: function (response) {
                $j('#wait_popup_2').hide();
                $j('#return_data_2')[0].innerText = response;
            },
            error: function (response) {
                $j('#return_data_2')[0].innerText = "Ошибка. Данные не отправленны.";
            }
        });
    });


//popup_3
    $j(".button__popup_3").click(function () {
        if (!$j('.popup-video__input').valid()) {
            $j('.popup-video__input').css('border', '1px solid red');
            return false;
        }
        $j('.button__popup_3, .popup-video__input').hide();
        sendAjaxForm('return_data_3', 'formID_3', 'send.php');
        return false;
    });

    function sendAjaxForm(result_form, ajax_form, url) {
        $j('#wait_popup_3').show();
        $j.ajax({
            url: url,
            type: "POST",
            dataType: "html",
            data: $j("#" + ajax_form).serialize(),
            success: function (response) {
                $j('#wait_popup_3').hide();
                document.getElementById(result_form).innerHTML = response;
            },
            error: function (response) {
                document.getElementById(result_form).innerHTML = "Ошибка. Данные не отправленны.";
            }
        });

    }


//popup_4

    function validation_form(form_id) {

        let submit = false;
        $j.each($j(form_id + " .popup-register__input"), function () {
            if (!$j(this).valid()) {
                $j(this).css('border', '1px solid red');
                $j(form_id).submit(function () {
                    return false;
                });
                submit = false;
                return false;
            } else {
                $j(this).css('border', '1px solid #b1b1b1');
                submit = true;
            }
            if ($j(this)[0].attributes[1].nodeValue == 'tel') {
                let phone = $j(this).val();
                if (phone !== "" && !$j.isNumeric(phone)) {
                    $j('#telephone-error').show();
                    $j('#telephone-error')[0].innerText = 'Пожалуйста, введите корректный номер телефона';
                    $j(this).css('border', '1px solid red');
                    submit = false;
                    return false;
                }
            }
        });
        if(!submit) {
            return false;
        }
        return true;
    }

    $j(".button__popup_4").click(function () {
        if (!validation_form('#formID_5')) {
            return false;
        }
        sendAjaxFormSalon('return_data_5', 'formID_5', '/send.php', '.button__popup_4, #wait_popup_4, #formID_5 input, .email-text', '#wait_popup_4');
        return false;
    });
    $j(".button__popup_6").click(function () {
        if (!validation_form('#formID_6')) {
            return false;
        }
        sendAjaxFormSalon('return_data_6', 'formID_6', '/send.php', '.button__popup_6, #wait_popup_6, #formID_6 input, .email-text', '#wait_popup_6');
        return false;
    });
    $j(".button__popup_7").click(function () {
        if (!validation_form('#formID_7')) {
            return false;
        }
        sendAjaxFormSalon('return_data_7', 'formID_7', '/send.php', '.button__popup_7, #formID_7 input, .email-text', '#wait_popup_7');
        return false;
    });

    function sendAjaxFormSalon(result_form, ajax_form, url, hide, wait) {
        $j(hide).hide();
        $j(wait).show();
        var currentLocation = location.protocol + '//' + location.hostname;
        $j.ajax({
            url: currentLocation + url,
            type: 'POST',
            data: $j("#" + ajax_form).serialize(),
            success: function (response) {
                $j(wait).hide();
                $j('#' + result_form)[0].innerHTML = response;
            },
            error: function (response) {
                $j('#' + result_form)[0].innerHTML = "Ошибка. Данные не отправленны.";
            }
        });
    }


    $j("#href-home").click(function () {
        document.location.href = '/';
    });
    $j("#href-darnitsa").click(function () {
        document.location.href = '/darnitsa';
    });
    $j("#href-lukyanovka").click(function () {
        document.location.href = '/lukyanovka';
    });
    $j("#href-sevastopol").click(function () {
        document.location.href = '/sevastopol';
    });
});


