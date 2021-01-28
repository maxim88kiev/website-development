<?php /*

 Напоминание для ВЛАДА:
 1) не удалять поля type=hidden
 2) не изенять и не удалять классы,id
 3) перед тек как что-то менять уточняй у программистов

 Если слетит функционал ответственность будет на ТЕБЕ

 */ ?>
<?php
$obj_city = CityHelper::getCurrent();
?>
<style>.dtime{width: 200px;}</style>
<!--<div class="popup-recording <?=!empty(JFactory::getSession()->get('my_user_id')) ? 'popup-recording--no-accaunt' : '' ?>">-->
<div class="popup-recording <?=empty(JFactory::getSession()->get('my_user_id')) ? 'popup-recording--no-accaunt' : '' ?>">
    <form class="popup-recording__form recording__form__services" method="post">
        <header class="popup-recording__header">
            <h2 class="popup-recording__title"><?=JText::_('COM_LASERCITY_RECORDING_WRITE_TXT')?></h2>
            <!--<p class="popup-recording__where"><span>Люменис</span> в Голосеевском районе</p>-->
            <p class="popup-recording__where popup-recording__name"></p>
        </header>
        <p class="popup-recording__personal-inputs">
            <label><input name="name" value="<?=!empty(JFactory::getSession()->get('my_user_name')) ? JFactory::getSession()->get('my_user_name') : '' ?>" type="text" aria-label="<?=JText::_('COM_LASERCITY_ALL_FORM_NAME')?>" placeholder="<?=JText::_('COM_LASERCITY_ALL_FORM_NAME')?>"></label>
            <label><input name="phone" value="<?=!empty(JFactory::getSession()->get('my_user_phone')) ? JFactory::getSession()->get('my_user_phone') : '' ?>" type="text" aria-label="<?=JText::_('COM_LASERCITY_ALL_FORM_PHONE')?>"></label>
        </p>
        <ul class="popup-recording__selected-list conteiner-recording">

        </ul>

        <div class="popup-recording__input-wrapper">
            <input name="stock" type="hidden">
            <input name="affiliate" type="hidden">
            <input name="service_txt" id="input_service" class="popup-recording__input" type="search" autocomplete="off" aria-label="<?=JText::_('COM_LASERCITY_RECORDING_NAME_USLG')?>" placeholder="<?=JText::_('COM_LASERCITY_RECORDING_NAME_USLG')?>">
            <button class="popup-recording__input-button" type="button" aria-label="" title=""><span class="visually-hidden"></span></button>
        </div>


        <label style="padding: 0 67px;margin: 5px 0;">
            <input type="text" name="name_person" required placeholder="Имя" style="padding: 5px; display: block; width: 100%">
        </label>


        <label style="padding: 0 67px;margin: 5px 0;">
            <input type="email" required name="email" placeholder="Почта" style="padding: 5px; display: block; width: 100%">
        </label>


        <label style="padding: 0 67px;margin: 5px 0;">
            <input type="text" id="phone-popup-record" name="phone" placeholder="Номер телефона" style="padding: 5px; display: block; width: 100%">
        </label>
        <!--<a class="popup-recording__add-button button-addprocedure" href="#"><?/*=JText::_('COM_LASERCITY_RECORDING_ADD_PROCED')*/?></a>-->
        <div class="popup-recording__wish-info select-date">
            <p class="select-date__wish-day"><?=JText::_('COM_LASERCITY_RECORDING_YOU_DATA')?>
                <span>
                    <!--<output>30.11.2018</output>-->
                    <input type="text" id="send_date_uslug" required name="date_visit">
                </span>
            </p>
            <p class="select-date__wish-time auto-time-do">
                <?=JText::_('COM_LASERCITY_RECORDING_YOU_TIME')?><br>
                <?=JText::_('COM_LASERCITY_RECORDING_YOU_OT')?> <span class="select-date__wish-time--from"><label><input required maxlength="2" name="hour1" type="text"></label> : <label><input maxlength="2" name="minut1" type="text"></label></span>
                <?=JText::_('COM_LASERCITY_RECORDING_YOU_DO')?> <span class="select-date__wish-time--until"><label><input required readonly="readonly" name="hour2" type="text"></label> : <label><input readonly="readonly" name="minut2" type="text"></label></span>
            </p>
        </div>
        <label class="popup-recording__comment">
            <span class="show-box-next-textarea"><?=JText::_('COM_LASERCITY_RECORDING_KOMENT')?></span>
            <textarea name="koment" class="box-hidden" type="text"></textarea>
        </label>
        <div class="popup-recording__topay topay">
            <?=JText::_('COM_LASERCITY_RECORDING_PRICE')?>:
            <ul class="topay__money-list">
                <li class="topay__money-item topay__money-item--card" title="<?=JText::_('COM_LASERCITY_RECORDING_BY_CREDI_CARD')?>"><span class="visually-hidden"><?=JText::_('COM_LASERCITY_RECORDING_BY_CREDI_CARD')?></span></li>
                <li class="topay__money-item topay__money-item--cash" title="<?=JText::_('COM_LASERCITY_RECORDING_BY_NALOM')?>"><span class="visually-hidden"><?=JText::_('COM_LASERCITY_RECORDING_BY_NALOM')?></span></li>
            </ul>
            <output class="popup-recording__pay">0 грн</output>
        </div>
        <button class="popup-recording__send-button button"><?=JText::_('COM_LASERCITY_ALL_SALON_SEND_BTN_ZAIV')?></button>
        <p class="popup-recording__rules"><?=JText::_('COM_LASERCITY_RECORDING_PRODOLZ')?> <a href="#"><?=JText::_('COM_LASERCITY_RECORDING_RULS_POLITIC')?></a> <?=JText::_('COM_LASERCITY_ALL_FORM_REGISTER_WHO_I')?> <a href="#"><?=JText::_('COM_LASERCITY_RECORDING_RULS_SITE')?></a></p>
        <div class="status"></div>
    </form>
    <button class="popup-recording__closed button-cross" type="button" title="<?=JText::_('COM_LASERCITY_ALL_FORM_CLOSE_MODAL')?>" aria-label="<?=JText::_('COM_LASERCITY_ALL_FORM_CLOSE_MODAL')?>"><span class="visually-hidden"><?=JText::_('COM_LASERCITY_ALL_FORM_CLOSE_MODAL')?></span></button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $(document).ready(function () {
            $("#send_date_uslug").MyDtime({language: '<?=LangHelper::getCurrentSef()?>'});
        });
    });
</script>