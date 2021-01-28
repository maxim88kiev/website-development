<?php

namespace AMBase\Podelu\Articles\Banners;

use Bitrix\Main\Page\Asset;


class Banner
{
    const TYPE_HORIZONTAL = 'horizontal';
    const TYPE_VERTICAL = 'vertical';


    protected $img;
    protected $link;
    protected $type = self::TYPE_HORIZONTAL;
    protected $width;
    protected $height;

    protected $titleText = '';
    protected $titleColor = '#222222';
    protected $titleFontSize = '32px';

    protected $subtitleText = '';
    protected $subtitleColor = '#222222';
    protected $subtitleFontSize = '18px';

    protected $btnText = '';
    protected $btnColor = '#FFFFFF';
    protected $btnBgColor = '#222222';
    protected $btnFontSize = '20px';
    protected $btnBorderColor = '';
    protected $btnBottom = false;

    protected $mark = '';


    public function __construct($link, $img, ...$args)
    {
        $this->link = $link;
        $this->img = $img;
    }

    public function render()
    {
        Asset::getInstance()->addCss("/local/modules/ambase.podelu/lib/articles/banners/scss/article-banner.css");

        $style = "width: {$this->width}px; height: {$this->height}px; background-image: url({$this->img})";
        $styleBtn = "font-size: {$this->btnFontSize}; color: {$this->btnColor}; background-color: {$this->btnBgColor};";
        if ($this->btnBorderColor) {
            $styleBtn .= "border: 1px solid {$this->btnBorderColor};";
        }


        $styleTitle = "font-size: {$this->titleFontSize}; color: {$this->titleColor};";
        $styleSubtitle = "font-size: {$this->subtitleFontSize}; color: {$this->subtitleColor};";

        $classBtn = $this->getClassBtn();

        if ($this->mark) {
            $this->link .= '?' . $this->mark;
        }

        ob_start();
        $template = $this->getTemplateName();
        include($template);
        $html = ob_get_contents();
        ob_end_clean();

        return $html;
    }

    public function getTemplateName()
    {
        return "templates/banners/{$this->type}.php";
    }

    public static function makeFromBitrix($bxItem)
    {
        $link = $bxItem['PROPERTIES']['LINK']['VALUE'];
        $img = $bxItem['PREVIEW_PICTURE']['SRC'];
        $isHorizontal = $bxItem['PREVIEW_PICTURE']['WIDTH'] > $bxItem['PREVIEW_PICTURE']['HEIGHT'];

        $banner = new static($link, $img);
        $banner->type = $isHorizontal ? self::TYPE_HORIZONTAL : self::TYPE_VERTICAL;
        $banner->width = $bxItem['PREVIEW_PICTURE']['WIDTH'];
        $banner->height = $bxItem['PREVIEW_PICTURE']['HEIGHT'];

        $banner->titleText = $bxItem['PREVIEW_TEXT'];
        $banner->titleColor = $bxItem['PROPERTIES']['TITLE_COLOR']['VALUE'];
        $banner->titleFontSize = $bxItem['PROPERTIES']['TITLE_FONTSIZE']['VALUE'];

        $banner->subtitleText = $bxItem['DETAIL_TEXT'];
        $banner->subtitleColor = $bxItem['PROPERTIES']['SUBTITLE_COLOR']['VALUE'];
        $banner->subtitleFontSize = $bxItem['PROPERTIES']['SUBTITLE_FONTSIZE']['VALUE'];

        $banner->btnText = $bxItem['PROPERTIES']['BTN_TEXT']['VALUE'];
        $banner->btnColor = $bxItem['PROPERTIES']['BTN_COLOR']['VALUE'];
        $banner->btnBgColor = $bxItem['PROPERTIES']['BTN_BGCOLOR']['VALUE'];
        $banner->btnFontSize = $bxItem['PROPERTIES']['BTN_FONTSIZE']['VALUE'];
        $banner->btnBorderColor = $bxItem['PROPERTIES']['BTN_BORDERCOLOR']['VALUE'];
        $banner->btnBottom = $bxItem['PROPERTIES']['BTN_BOTTOM']['VALUE_XML_ID'] === 'Y';

        $banner->mark = $bxItem['PROPERTIES']['MARK']['VALUE'];

        return $banner;
    }

    private function getClassBtn()
    {
        switch ($this->type) {
            case static::TYPE_VERTICAL:
                $class = $this->getClassBtnVertical();
                break;
            default:
                $class = $this->getClassBtnHorizonal();
        }

        return $class ? ' ' . $class : '';
    }

    private function getClassBtnVertical()
    {
        $class = '';

        if ($this->btnBottom) {
            $class .= ' article-banner__btn_bottom';
        }

        return trim($class);
    }

    private function getClassBtnHorizonal()
    {
        $class = '';

        if (!$this->subtitleText) {
            $class = 'article-banner__btn_big-horizontal';
        }

        return trim($class);
    }


}