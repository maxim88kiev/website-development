<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):
    ?>
    <ul class="navbar-menu navbar-menu__mobile-banks">
        <div class="extra-links">
            <a href="javascript:void(0)">без платы за обслуживание</a>
            <a href="javascript:void(0)">только онлайн банки</a>
            <a href="javascript:void(0)">только гос. банки</a>
        </div>
        <? foreach ($arResult['BANKS'] as $BANK):?>
            <label class="checkbox" data-bank-id="<?=$BANK["ID"]?>">
                <input class="checkbox-filter" name="BANK" type="checkbox" <?if(in_array($BANK["ID"] , $arResult['FILTER']['BANK']) || $BANK['SELECTED'] == 'Y'):?>checked='checked'<?endif;?> />
                <div class="checkbox__text"><?=$BANK["NAME"]?></div>
            </label>
        <?endforeach;?>

    </ul>
<?endif?>