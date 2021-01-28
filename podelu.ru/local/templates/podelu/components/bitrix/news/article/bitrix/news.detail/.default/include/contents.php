<div class="container-article-text__contents">
    <div class="container-article-text__contents-title">
        <?=Bitrix\Main\Localization\Loc::getMessage('ARTICLE_CONTENTS_TITLE')?>
    </div>

    <div class="container-article-text__contents-items">
        <?foreach ($arResult['CONTENTS'] as $arItem):?>
            <div class="container-article-text__contents-item"
                 style="<?=$arItem['style']?>">
                <a class="container-article-text__contents-link"
                   href="<?=$arItem['link']?>">
                    <?=$arItem['text']?>
                </a>
            </div>
        <?endforeach?>
    </div>
</div>
