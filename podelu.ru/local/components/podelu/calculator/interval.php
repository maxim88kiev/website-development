<?if (!empty($value['ONE_PERCENT'])):?>
    <strong><?=$this->formatValue($value['ONE_PERCENT'])?>%</strong> от суммы
<?else:?>
    <?
    $from = $this->getIntervalValue($value['FROM']);
    $to = $this->getIntervalValue($value['TO']);
    ?>
    <?if (empty($value['FROM'])):?>
        до <strong><?=$to['VALUE']?> <?=$to['PREFIX']?></strong> руб<?=$includeMonth ? '/мес' : ''?>
    <?elseif (empty($value['TO'])):?>
        свыше <strong><?=$from['VALUE']?> <?=$from['PREFIX']?></strong> руб<?=$includeMonth ? '/мес' : ''?>
    <?else:?>
        <strong><?=$from['VALUE']?><?=$from['PREFIX'] == $to['PREFIX'] ? '' : ' ' . $from['PREFIX']?></strong>-<strong><?=$to['VALUE']?> <?=$to['PREFIX']?></strong> руб<?=$includeMonth ? '/мес' : ''?>
    <?endif?>
    - <strong><?=$this->formatValue($value['PERCENT'])?>%</strong><br>
<?endif?>

