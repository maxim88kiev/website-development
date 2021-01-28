<div class="article-list article-list_page_main">
    <div class="article-list__container">

        <div class="article-list__head">
            <div class="article-list__title">Полезные статьи</div>

            <div class="article-list__btn-list">
                <div class="article-list__btn article-list__btn_left">
                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66511 0.292893C7.05564 0.683417 7.05564 1.31658 6.66511 1.70711L3.37222 5L6.66511 8.29289C7.05564 8.68342 7.05564 9.31658 6.66511 9.70711C6.27459 10.0976 5.64143 10.0976 5.2509 9.70711L1.2509 5.70711C0.860377 5.31658 0.860377 4.68342 1.2509 4.29289L5.2509 0.292893C5.64143 -0.0976311 6.27459 -0.0976311 6.66511 0.292893Z" fill="#A7A7AB"></path>
                        <path d="M0.958008 5C0.958008 4.44772 1.40572 4 1.95801 4H11.958C12.5103 4 12.958 4.44772 12.958 5C12.958 5.55228 12.5103 6 11.958 6H1.95801C1.40572 6 0.958008 5.55228 0.958008 5Z" fill="#A7A7AB"></path>
                    </svg>
                </div>

                <div class="article-list__btn article-list__btn_right">
                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.33489 0.292893C5.94436 0.683417 5.94436 1.31658 6.33489 1.70711L9.62778 5L6.33489 8.29289C5.94436 8.68342 5.94436 9.31658 6.33489 9.70711C6.72541 10.0976 7.35857 10.0976 7.7491 9.70711L11.7491 5.70711C12.1396 5.31658 12.1396 4.68342 11.7491 4.29289L7.7491 0.292893C7.35857 -0.0976311 6.72541 -0.0976311 6.33489 0.292893Z" fill="#005559"></path>
                        <path d="M0.0419922 5C0.0419922 4.44772 0.489707 4 1.04199 4H11.042C11.5943 4 12.042 4.44772 12.042 5C12.042 5.55228 11.5943 6 11.042 6H1.04199C0.489707 6 0.0419922 5.55228 0.0419922 5Z" fill="#005559"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="article-list__row">
            <div class="article-list__top-article">
                <div class="article-list__top-article-name"><?=$arResult['TOP_ARTICLE']['NAME']?></div>

                <div class="article-list__top-article-tag"><?=$arResult['TOP_ARTICLE']['TAG']?></div>

                <div class="article-list__top-article-image">
                    <img src="<?=$arResult['TOP_ARTICLE']['IMAGE']?>" alt="">
                </div>
            </div>

            <div class="article-list__items">
                <?foreach ($arResult['ITEMS'] as $arItem):?>
                    <a class="article-list__item" href="/">
                        <div class="article-list__item-name"><?=$arItem['NAME']?></div>

                        <div class="article-list__item-tags">
                            <?foreach ($arItem['TAGS'] as $tag):?>
                                <div class="article-list__item-tag"><?=$tag?></div>
                            <?endforeach?>
                        </div>
                    </a>
                <?endforeach?>
            </div>
        </div>

    </div>
</div>