<div class="acquiring__bank-list">
    <div class="acquiring__bank acquiring__bank_header">
        <div class="acquiring__bank-row">
            <div class="acquiring__bank-col acquiring__bank-col_info">Банк</div>
            <div class="acquiring__bank-col acquiring__bank-col_rate">Ставка</div>
            <div class="acquiring__bank-col acquiring__bank-col_equipment-options">Предоставляемое оборудование</div>
            <div class="acquiring__bank-col acquiring__bank-col_equipment">Оборудование</div>
            <div class="acquiring__bank-col acquiring__bank-col_link"></div>
        </div>
    </div>

    <?if (empty($arResult['BANKS'])):?>
        <div class="acquiring__bank acquiring__bank_empty">Выберите банки для сравнения</div>
    <?else:?>
        <?foreach ($arResult['BANKS'] as $arBank):?>
            <?include 'acquiring__bank.php'?>
        <?endforeach?>
    <?endif?>
</div>