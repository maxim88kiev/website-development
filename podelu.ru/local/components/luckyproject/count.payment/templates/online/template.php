
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

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-24 col-sm-24 col-xs-24">
                <div class="section-title">
                    <?php echo $arResult['TITLE']; ?> <span id="ask-help-popup" class='help-ask' title="Количество исходящих межбанковских платежей в адрес ИП и ЮЛ с вашего счета в месяц: поставщики, подрядчики. Платежи в ФНС и прочие бюджетные фонды не учитываются"></span>
                    <div class='popup-for-help'></div>
                </div>
            </div>
        </div>

        <div class="count-payment">
            <div class="row">
                <div class="col-md-21">
                    <div class="count-payment-mobile">
                        <?php echo $arResult['MAX']; ?>
                    </div>

                    <ul class="count-payment-numbers">

                        <?php for($i=$arResult['MIN']; $i<=$arResult['MAX']; $i+=$arResult['STEP']) { ?>
                            <?php if($i === 0) { ?>
                                <li>Не знаю</li>
                            <?php } else { ?>
								<?php if($i > 10) { ?>
									<?php if($i === 11) { ?> <li>20</li> <?php } ?>
									<?php if($i === 12) { ?> <li>30</li> <?php } ?>
									<?php if($i === 13) { ?> <li>40</li> <?php } ?>
									<?php if($i === 14) { ?> <li>50</li> <?php } ?>
									<?php if($i === 15) { ?> <li>60</li> <?php } ?>
									<?php if($i === 16) { ?> <li>70</li> <?php } ?>
									<?php if($i === 17) { ?> <li>80</li> <?php } ?>
									<?php if($i === 18) { ?> <li>90</li> <?php } ?>
									<?php if($i === 19) { ?> <li>100 <br/>и больше</li> <?php } ?>
								<?php } else { ?>
									<li><?php echo $i; ?></li>
								<?php } ?>
                            <?php } ?>
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

                <div class="col-md-3 count-payment-desktop">
                    <div class="count-payment-value">
                        <?php echo $arResult['START']; ?>
                    </div>
                    <div class="count-payment-subtext">
                        платежей
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>