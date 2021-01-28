<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="section">
    <div class="container">
        <div class="row" style="margin-bottom: 25px;">
            <div class="col-md-24">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                    if ($arItem['ID'] != $arParams['OPENED']) {
                        continue;
                    }

                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div itemscope itemprop="mainEntity" itemtype="http://schema.org/Question">
                        <?
                        $className = 'faq-item faq-item_clean';
                        if ($arItem['ID'] == $arParams['OPENED']) {
                            $className .= ' faq-item--open';
                        }
                        ?>
                        <div class="<?=$className?>" id="<?=$this->GetEditAreaId($arItem['ID'])?>" itemprop="name">
                            <?=$arItem['PROPERTIES']['PROPERTY_ASK']['VALUE']?>
                        </div>
                        <div class="faq-answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <span itemprop="text"><?=$arItem['PROPERTIES']['PROPERTY_QUESTION']['~VALUE']['TEXT']?></span>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-24">
                <div class="section-title">
                    Вопросы и ответы
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-24">
				<?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                    if ($arItem['ID'] == $arParams['OPENED']) {
                        continue;
                    }

                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                   ?>
                    <div itemscope itemprop="mainEntity" itemtype="http://schema.org/Question">
                        <?
                        $className = 'faq-item';
                        if ($arItem['ID'] == $arParams['OPENED']) {
                            $className .= ' faq-item--open';
                        }
                        ?>
                        <div class="<?=$className?>" id="<?=$this->GetEditAreaId($arItem['ID'])?>" itemprop="name">
                            <?=$arItem['PROPERTIES']['PROPERTY_ASK']['VALUE']?>
                        </div>
                        <div class="faq-answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <span itemprop="text"><?=$arItem['PROPERTIES']['PROPERTY_QUESTION']['~VALUE']['TEXT']?></span>
                        </div>
                    </div>
				<?endforeach;?>	
            </div>
        </div>
    </div>
</div>
