<?
$className = 'acquiring__bank-equipment';
if (empty($arEquipment['PREVIEW_PICTURE'])) {
    $className .= ' acquiring__bank-equipment_no-img';
}
?>
<div class="<?=$className?>">
    <?if (!empty($arEquipment['PREVIEW_PICTURE'])):?>
        <div class="acquiring__bank-equipment-img">
            <img src="<?=$arEquipment['PREVIEW_PICTURE']?>" alt="">
        </div>
    <?endif?>

    <div class="acquiring__bank-equipment-info">
        <div class="acquiring__bank-equipment-name"><?=$arEquipment['NAME']?></div>

        <div class="acquiring__bank-equipment-specification">
            <?=$arEquipment['description']?>
        </div>
    </div>

    <?if (!$arBank['IS_ONE_EQUIPMENT_PRICE']):?>
        <div class="acquiring__bank-equipment-price">
            <div><?=$arEquipment['price']?></div>
        </div>
    <?endif?>
</div>