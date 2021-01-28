<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);
$this->addExternalCss(SITE_TEMPLATE_PATH.'/assets/css/magnific-popup.css');
$this->addExternalJs(SITE_TEMPLATE_PATH.'/assets/js/jquery.magnific-popup.min.js');
?>
<form class="comment-form">
    <div class="comment-form__title"><?=Loc::getMessage('COMMENT_FORM_TITLE')?></div>

    <div class="comment-form__field">
        <label class="comment-form__field-label" for="comment-form-name">Имя</label>
        <input class="comment-form__field-control" type="text" name="name" id="comment-form-name" />
    </div>

    <div class="comment-form__field comment-form__field_text">
        <label class="comment-form__field-label" for="comment-form-text">Комментарий</label>
        <textarea class="comment-form__field-control" type="text" name="text" id="comment-form-text"></textarea>
    </div>

    <div class="comment-form__btn-list">
        <button class="comment-form__btn">Отправить</button>
    </div>
</form>

<script>
    $(function() {
        new CommentForm('.comment-form', {
            elementId: <?=$arParams['ELEMENT_ID']?>,
        });
    });
</script>
