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

use Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<div class="comment-list">
    <div class="comment-list__title"><?=Loc::getMessage('COMMENT_LIST_TITLE')?></div>

    <div class="comment-list__items">
        <?if (empty($arResult['COMMENTS'])):?>
            Пока никто не оставил комментарий
        <?else:?>
            <?foreach ($arResult['COMMENTS'] as $arComment):?>
                <?
                $this->AddEditAction($arComment['ID'], $arComment['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arComment['ID'], $arComment['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                ?>
                <div class="comment-list__item comment-list__item_lvl<?=$arComment['LVL']?>"
                     id="<?=$this->GetEditAreaId($arComment['ID'])?>"
                     data-id="<?=$arComment['ID']?>">
                    <div class="comment-list__item-avatar">
                        <?=$arComment['AVATAR']?>
                    </div>

                    <div class="comment-list__item-info">
                        <div class="comment-list__item-name"><?=$arComment['NAME']?></div>
                        <div class="comment-list__item-date"><?=$arComment['DATE']?></div>
                        <div class="comment-list__item-text"><?=$arComment['TEXT']?></div>

                        <div class="comment-list__item-like<?=$arComment['IS_LIKED'] ? ' comment-list__item-like_active' : ''?>">
                            <?include 'include/like.php'?>
                            <span class="comment-list__item-like-value"><?=$arComment['LIKES']?></span>
                        </div>

                        <div class="comment-list__item-dislike<?=$arComment['IS_DISLIKED'] ? ' comment-list__item-dislike_active' : ''?>">
                            <?include 'include/dislike.php'?>
                            <span class="comment-list__item-dislike-value"><?=$arComment['DISLIKES']?></span>
                        </div>

                        <div class="comment-list__item-answer">Ответить</div>
                    </div>
                </div>
            <?endforeach;?>
        <?endif?>
    </div>
</div>

<script>
    $(function() {
        new CommentList('.comment-list');
    });
</script>
