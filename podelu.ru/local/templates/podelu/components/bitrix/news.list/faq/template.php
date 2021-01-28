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

<div class="section 1">
    <div class="container">
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
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                   ?>
                    
                    <?php if( CSite::InDir('/calculator/') AND $arItem['PROPERTIES']['PROPERTY_SHOW_IN_RKO']['VALUE'] == "Да" ) {?>
                        <div itemscope itemprop="mainEntity" itemtype="http://schema.org/Question">
                            <div class="faq-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" itemprop="name" data-faq="<?=$arItem['ID']?>">
                                <?php echo $arItem['PROPERTIES']['PROPERTY_ASK']['VALUE']; ?>
                            </div>
                            <div class="faq-answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                                <span itemprop="text"><?php echo $arItem['PROPERTIES']['PROPERTY_QUESTION']['~VALUE']['TEXT']; ?></span>
                            </div>
                        </div>
                    <?php } else if( !CSite::InDir('/calculator/') ) { ?>
                        <div itemscope itemprop="mainEntity" itemtype="http://schema.org/Question">
                            <div class="faq-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" itemprop="name" data-faq="<?=$arItem['ID']?>">
                                <?php echo $arItem['PROPERTIES']['PROPERTY_ASK']['VALUE']; ?>
                            </div>
                            <div class="faq-answer" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                                <span itemprop="text"><?php echo $arItem['PROPERTIES']['PROPERTY_QUESTION']['~VALUE']['TEXT']; ?></span>
                            </div>
                        </div>
                    <?php } ?>
				<?endforeach;?>	
            </div>
        </div>
    </div>
</div>
