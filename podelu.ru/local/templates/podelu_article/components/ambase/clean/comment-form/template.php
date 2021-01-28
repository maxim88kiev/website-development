<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);
$this->addExternalCss(SITE_TEMPLATE_PATH.'/assets/css/magnific-popup.css');
$this->addExternalJs(SITE_TEMPLATE_PATH.'/assets/js/jquery.magnific-popup.min.js');
?>
<div class="text_block5">
    Оставить комментарий:
</div>

<form class="comment-form">

    <div class="input">
        <input name="name" placeholder="Ваше имя">
    </div>

    <div class="textarea">
        <textarea name="text" placeholder="Ваш комментарий" rows="48"></textarea>
    </div>

    <button type="submit" class="comment-form__btn" disabled>Оставить комментарий</button>
</form>

<script>
    $(function() {
        new CommentForm('.comment-form', {
            elementId: <?=$arParams['ELEMENT_ID']?>,
        });
    });
</script>
