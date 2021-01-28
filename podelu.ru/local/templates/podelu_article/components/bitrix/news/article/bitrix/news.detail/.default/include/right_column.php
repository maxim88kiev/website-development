<div class="content_block_rs__right_cont article-right-block">
    <div class="article-right-block__btn"></div>

    <div class="article-right-block__contents">
        <div class="article-right-block__contents-container">
            <div class="article-right-block__contents-title">Содержание</div>
            <div class="article-right-block__contents-text"><?=$arResult['CONTENTS']?></div>
        </div>
    </div>

    <div class="article-right-block__banner">
        <?renderVerticalBannerIfExists($arParams['IBLOCK_ID'], $arResult['ID'])?>
    </div>
</div>