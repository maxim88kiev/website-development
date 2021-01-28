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
$prevComment = null;

function getColor($index)
{
    $colors = ['#CBF3F0', '#FFBF69', '#2EC4B6'];
    return $colors[$index % 3];
}
?>

<?$APPLICATION->SetPageProperty('comments_count', $arResult['SECTIONS_COUNT']);?>

<div class="text_block5">
    Комментарии: <?=$arResult['SECTIONS_COUNT']?>
</div>

<div class="comment-list">
    <?foreach ($arResult['COMMENTS'] as $index => $arComment):?>
        <?
        $this->AddEditAction($arComment['ID'], $arComment['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($arComment['ID'], $arComment['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
        ?>

        <?if ($prevComment && $arComment['LVL'] == 1):?>
            <div class="additional_object_separator1"></div>
        <?endif?>

        <?
        $className = 'comment';
        if ($arComment['LVL'] > 1) {
            $className .= '1';
        }
        ?>
        <div class="<?=$className?>" id="<?=$this->GetEditAreaId($arComment['ID'])?>" data-id="<?=$arComment['ID']?>">
            <div class="<?=$className?>__ico" style="background-color: <?=getColor($index)?>">
                <img src="<?=$templateFolder?>/img/ava.png" alt="">
            </div>

            <div class="<?=$className?>__text"><?=$arComment['NAME']?></div>
            <div class="<?=$className?>__text1"><?=$arComment['TEXT']?></div>

            <div class="<?=$className?>__text2">
                <?=$arComment['DATE']?> <span class="btn-item7">Ответить</span>
            </div>
        </div>

        <?$prevComment = $arComment;?>
    <?endforeach;?>
</div>

<script>
    $(function() {
        new CommentList('.comment-list');
    });
</script>
