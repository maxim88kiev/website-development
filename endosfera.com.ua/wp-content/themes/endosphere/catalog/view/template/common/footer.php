<footer class="page-footer">
    <ul class="page-footer__navigation-list">
        <li class="page-footer__navigation-item"><a href="#">Правила</a></li>
        <li class="page-footer__navigation-item page-footer__navigation-item--hr">
            <hr style="height: 14px;width: 0px;color: rgb( 220, 220, 220 );">
        </li>
        <li class="page-footer__navigation-item"><a href="#">Помощь</a></li>
        <li class="page-footer__navigation-item page-footer__navigation-item--hr">
            <hr style="height: 14px;width: 0px;color: rgb( 220, 220, 220 );">
        </li>
        <li class="page-footer__navigation-item"><a href="#">Обратная связь</a></li>
        <li class="page-footer__navigation-item page-footer__navigation-item--hr">
            <hr style="height: 14px;width: 0px;color: rgb( 220, 220, 220 );">
        </li>
        <li class="page-footer__navigation-item"><a href="#">Партнерам</a></li>
    </ul>

</footer>
<div class="modal-overlay"></div>
<section class="popup-singup" aria-labelledby="SingUpLogin">
    <h3 class="popup-singup__title">Добавить фото процедур:</h3>
    <form enctype="multipart/form-data" method="post" action="send.php" id="formID_1">
        <div id="return_data_1"></div>
        <input class="slider-file__popup" type="file" name="photo_procedure[]" multiple accept="image/*" required />
        <input class="hidden_form_2" type="hidden" name="form" value="form_1"/>
    </form>
    <button class="slider-bottom__button__popup button__popup_1">Отправить
    </button>
    <button class="popup-singup__closed button-cross">
        <span class="visually-hidden">Закрыть модальное окно</span>
    </button>
    <div id="wait" style="display: none; width: 100%; height: 100%; top: 100px; left: 0px; position: fixed; z-index: 10000; text-align: center;">
        <img class="wait_img" src="/wp-content/themes/endosphere/catalog/view/img/7plQ.gif" width="100" height="100" alt="Loading..." style="position: fixed; top: 50%; left: 50%;" />
    </div>
</section>


<section class="popup-singup__slider" aria-labelledby="SingUpLogin">
    <h3 class="popup-singup__title">Добавить фото салона:</h3>
    <form enctype="multipart/form-data"  method="post" action="send.php" id="formID_2">
        <div id="return_data_2"></div>
        <input class="popup-register__input salon__input send_input" type="text" name="salon" aria-label="Введите название салона" placeholder="*Введите название салона" required>
        <input class="popup-register__input telephone__input send_input" type="tel" name="telephone" aria-label="Введите номер телефона" placeholder="*Номер телефона" pattern="^[ 0-9]+$" required>
        <input class="popup-register__input city__input send_input" type="text" name="city" aria-label="Введите город" placeholder="*Город" required>
        <input class="popup-register__input address__input send_input" type="text" name="address" aria-label="Введите адрес" placeholder="*Адрес" required>
        <input class="popup-register__input site__input send_input" type="text" name="site" aria-label="Введите сайт салона" placeholder="*Сайт салона" required>
        <input class="popup-register__input metro__input send_input" type="text" name="metro" aria-label="Введите ст. м" placeholder="*Станция метро" required>
        <input class="popup-register__input area__input send_input" type="text" name="area" aria-label="Введите район города" placeholder="*Район города" required>
        <input class="popup-register__input photo__input" type="file" name="photo_salon[]" multiple accept="image/*" required/>
        <input class="hidden_form_2" type="hidden" name="form" value="form_2"/>
<!--        <input class="slider-bottom__button__popup" type="submit" value="Отправить">-->
    </form>
    <button class="slider-bottom__button__popup button__popup_2">Отправить
    </button>
    <button class="popup-singup__closed button-cross">
        <span class="visually-hidden">Закрыть модальное окно</span>
    </button>
    <div id="wait_popup_2" style="display: none; width: 100%; height: 100%; top: 100px; left: 0px; position: fixed; z-index: 10000; text-align: center;">
        <img class="wait_img" src="/wp-content/themes/endosphere/catalog/view/img/7plQ.gif" width="100" height="100" alt="Loading..." style="position: fixed; top: 50%; left: 50%;" />
    </div>
</section>


<section class="popup-singup__video" aria-labelledby="SingUpLogin">
    <h3 class="popup-singup__title" id="SingUpLogin">Добавить видео:</h3>
    <form enctype="multipart/form-data" method="post" action="send.php" id="formID_3">
        <div id="return_data_3"></div>
        <input class="popup-video__input" type="text" name="video" aria-label="Добавте ссылку на ваше видео" placeholder="Ссылка на видео" maxLength="64" required>
        <input class="hidden_form_2" type="hidden" name="form" value="form_3"/>
        <!--        <input class="slider-bottom__button__popup" type="submit" value="Отправить">-->
    </form>

    <button class="slider-bottom__button__popup button__popup_3">Отправить
    </button>

    <button class="popup-singup__closed button-cross">
        <span class="visually-hidden">Закрыть модальное окно</span>
    </button>
    <div id="wait_popup_3" style="display: none; width: 100%; height: 100%; top: 100px; left: 0px; position: fixed; z-index: 10000; text-align: center;">
        <img class="wait_img" src="/wp-content/themes/endosphere/catalog/view/img/7plQ.gif" width="100" height="100" alt="Loading..." style="position: fixed; top: 50%; left: 50%;" />
    </div>
</section>



<section class="popup__feedback-dopinfo" aria-labelledby="SingUpLogin">
    <h3 class="popup-singup__title">Добавить жалобу:</h3>
    <form enctype="multipart/form-data" method="post" action="send.php" id="formID_4">
        <textarea name="dopinfo" class="popup-comment__feedback-dopinfo" placeholder="Ваш отзыв"></textarea>
        <input class="hidden_form_2" type="hidden" name="form" value="form_4"/>
        <input class="hidden_dopinfo" type="hidden" name="dopinfo_id" value="">
        <input class="slider-bottom__button__popup" type="submit" value="Отправить">
    </form>
    <button class="popup-singup__closed button-cross">
        <span class="visually-hidden">Закрыть модальное окно</span>
    </button>

</section>

<script>
    const data_el = document.querySelectorAll('.data_post_coment');
    for (let i = 0; i < data_el.length; i++) {
        const date = data_el[i].textContent;
        let result = date;

        data_el[i].textContent = result;
    }
</script>