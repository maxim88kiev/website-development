<?php

function formatTariffRates($arRates)
{
    $html = '';
    $html .= '<div class="acquiring__bank-tariff-rate-list">';

    foreach ($arRates as $arRate) {
        $html .= '<div class="acquiring__bank-tariff-rate">';

        $html .= '<div class="acquiring__bank-tariff-rate-name">';
        $html .= getRateName($arRate);
        $html .= '</div>';


        $html .= '<div class="acquiring__bank-tariff-rate-value">';
        if ($arRate['text']) {
            $html .= $arRate['text'];
        } else {
            $html .= $arRate['value'] . '%';
        }
        $html .= '</div>';


        $html .= '</div>';
    }

    $html .= '</div>';

    return $html;
}

function getRateName($arRate)
{
    if ($arRate['min'] == 0 && $arRate['max'] == 9999) {
        return 'любой оборот';
    }

    if ($arRate['min'] == 0) {
        return 'менее ' . $arRate['max'] . ' тыс. руб/мес.';
    }

    if ($arRate['max'] == 9999) {
        return 'при обороте свыше ' . $arRate['min'] . ' тыс. руб /мес.';
    }

    return 'при обороте от ' . $arRate['min'] . ' до ' . $arRate['max'] . ' тыc. руб/мес.';
}
