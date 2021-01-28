<section class="top-contact" aria-labelledby="">
    <header class="top-contact__header" id="">
        <div class="top-contact__slogan"><b>Люменис</b><br>на лукьяновке</div>
    </header>
    <div class="top-contact__line"></div>
</section>
<section class="advantages-contact" aria-labelledby="">

<div class="advantages-contact__map">
    <div class="advantages-contact__map-block">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.6918872693277!2d30.472976316098283!3d50.46546197947752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cdd7b8f3d151%3A0x8c66fc8941d40dca!2z0YPQuy4g0K7RgNC40Y8g0JjQu9GM0LXQvdC60L4sIDUx0LEsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1559037228827!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="map-text">
        <div class="map-text-rayon">
            <div class="map-text-rayon__img"></div>
            <div class="map-text-rayon__txt">ст.м. Лукьяновская<br>вулиця Юрия Ильенко, 51Б</div>
        </div>
        <div class="map-text-time">
            <div class="map-text-time__img"></div>
            <div class="map-text-time__txt">Время работы:<br>09:00 - 23:00</div>
        </div>
        <div class="map-text-telefon">
            <div class="map-text-telefon__img"></div>
            <div class="map__block-button" id="lukyanovka__popup"><div class="slider__block-button--img"></div><div class="slider__block-button--txt">получить консультацию</div></div>
        </div>
        <div class="map-text-aparat">
            <div class="map-text-aparat__txt">Аппарат: <span>ENDOSPHERES THERAPY</span></div>
        </div>
    </div>
</div>

    <div class="advantages-contact__prise">
        <div class="advantages-contact__prise-title">Прайс
        </div>
        <div class="advantages-contact__prise-block">
            <div class="advantages-contact__prise-block-duration">Длительность</div>
            <div class="advantages-contact__prise-block-zone">Зона процедуры</div>
            <div class="advantages-contact__prise-block-cost">Стоимость</div>
        </div>
        <div class="advantages-contact__prise-block-tabl">
            <div class="advantages-contact__prise-block-txt">40 мин</div>
            <div class="advantages-contact__prise-block-txt">руки + спина + поясница + живот + бока</div>
            <div class="advantages-contact__prise-block-txt">1300 грн</div>
        </div>
        <div class="advantages-contact__prise-block-tabl">
            <div class="advantages-contact__prise-block-txt">50 мин</div>
            <div class="advantages-contact__prise-block-txt">ноги полностью + ягодицы + живот + бока</div>
            <div class="advantages-contact__prise-block-txt">1550 грн</div>
        </div>
        <div class="advantages-contact__prise-block-tabl">
            <div class="advantages-contact__prise-block-txt">60 мин</div>
            <div class="advantages-contact__prise-block-txt">все тело</div>
            <div class="advantages-contact__prise-block-txt">1800 грн</div>
        </div>
        <div class="advantages-contact__prise-block-tabl">
            <div class="advantages-contact__prise-block-txt">90 мин</div>
            <div class="advantages-contact__prise-block-txt">Все тело</div>
            <div class="advantages-contact__prise-block-txt">2550 грн</div>
        </div>
        <div class="advantages-contact__prise-block-tabl">
            <div class="advantages-contact__prise-block-txt">30 мин</div>
            <div class="advantages-contact__prise-block-txt">Лицо + шея + декольте</div>
            <div class="advantages-contact__prise-block-txt">980 грн</div>
        </div>
    </div>

</section>

<section class="popup-singup__contact" id="popup-singup__lukyanovkal" aria-labelledby="SingUpLogin">
    <h3 class="popup-singup__title">Получить консультацию:</h3>
    <form  method="post" action="send.php" id="formID_7">
        <div id="return_data_7"></div>
        <input class="popup-register__input salon__input contact_input" type="text" name="name" aria-label="Введите Ваше имя" placeholder="*Ваше имя" required>
        <input class="popup-register__input telephone__input contact_input" type="tel" pattern="^[ 0-9]+$" name="telephone" aria-label="Введите Ваш номер телефона" placeholder="*Ваш номер телефона" required>
        <input class="popup-register__input city__input contact_input" type="email" name="email" aria-label="Введите E-mail" placeholder="E-mail" maxLength="64">
        <label class="email-text" for="email">*для получения акций и скидок</label>
        <input class="hidden_form_2" type="hidden" name="form" value="form_5"/>
        <input class="hidden_form_2" type="hidden" name="salon_number" value="Салон Люменис на Лукьяновке"/>
    </form>
    <button class="slider-bottom__button__popup button__popup_7">Отправить
    </button>
    <button class="popup-singup__closed button-cross">
        <span class="visually-hidden">Закрыть модальное окно</span>
    </button>
    <div id="wait_popup_7" style="display: none; width: 100%; height: 100%; top: 100px; left: 0px; position: fixed; z-index: 10000; text-align: center;">
        <img class="wait_img" src="/wp-content/themes/endosphere/catalog/view/img/7plQ.gif" width="100" height="100" alt="Loading..." style="position: fixed; top: 50%; left: 50%;" />
    </div>
</section>

<section class="reviews" aria-labelledby="">
    <h2 class="reviews__txt">Отзывы о процедуре эндосфера терапия</h2>
    <?php echo do_shortcode( "[testimonial_view id=\"5\"] " ); ?>
</section>
<section class="faq-discussion" aria-labelledby="">
    <h2 class="faq-discussion__txt">Все отзывы (<?php echo do_shortcode( "[testimonial_count category=\"contact\"]" ); ?>)</h2>
    <?php echo do_shortcode( "[testimonial_view id=\"6\"] " ); ?>
</section>