<a class="article-banner article-banner_type_horizontal" style="<?=$style?>" href="<?=$this->link?>">
    <span class="article-banner__left">
        <?if ($this->titleText):?>
            <div class="article-banner__title" style="<?=$styleTitle?>">
                <?=$this->titleText?>
            </div>
        <?endif?>
    </span>

    <span class="article-banner__right<?=$this->subtitleText ? '' : ' article-banner__right_empty-subtitle'?>">
        <span class="article-banner__right-content">
            <?if ($this->subtitleText):?>
                <span class="article-banner__subtitle" style="<?=$styleSubtitle?>">
                    <?=$this->subtitleText?>
                </span>
            <?endif?>

            <?if ($this->btnText):?>
                <span class="article-banner__btn<?=$classBtn?>" style="<?=$styleBtn?>">
                    <?=$this->btnText?>
                </span>
            <?endif?>
        </span>
    </span>
</a>