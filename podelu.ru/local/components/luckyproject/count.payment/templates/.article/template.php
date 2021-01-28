<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<script>
    // Глобальный код для настройки платежей. Смотри script.js
    window.payment = {
        min: <?php echo $arResult['MIN']; ?>,
        max: <?php echo $arResult['MAX']; ?>,
        step: <?php echo $arResult['STEP']; ?>,
        start: <?php echo $arResult['START']; ?>
    }
</script>

<div class="count-payment">
    <div class="row">
        <div class="col-md-16 col-sm-16 col-xs-24">
            <div class="count-payment-title">
                Выберите количество платежей<span class="star">*</span>
            </div>
        </div>
        <div class="col-md-8 hidden-xs">
            <div class="count-payment-right-text">
                *Обязательно к заполению
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-18">
            <div class="count-payment-mobile">
                <?php echo $arResult['MAX']; ?>
            </div>

            <ul class="count-payment-numbers">
                <?php for($i=$arResult['MIN']; $i<=$arResult['MAX']; $i+=$arResult['STEP']) { ?>
                    <li><?php echo $i; ?></li>
                <?php } ?>
            </ul>
            <div class="count-payment-slider">
                <input
                    type="range"
                    min="<?php echo $arResult['MIN']; ?>"                 
                    max="<?php echo $arResult['MAX']; ?>"              
                    step="<?php echo $arResult['STEP']; ?>"            
                    value="<?php echo $arResult['START']; ?>"                 
                >                  
            </div>
        </div>

        <div class="col-md-2 col-md-offset-1 count-payment-desktop">
            <div class="count-payment-value">
                <?php echo $arResult['START']; ?>
            </div>
            <div class="count-payment-subtext">
                платежей
            </div>
        </div>
    </div>
</div>
