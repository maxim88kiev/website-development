<?
$arCurPage = explode('/', $APPLICATION->GetCurPage());
$links = [];

$links[] = [
    'title' => 'банки для открытия РКО онлайн',
    'link' => $arParams['SEF_FOLDER'] . 'online/',
];

$links[] = [
    'title' => 'банки с бесплатным ведением РКО',
    'link' => $arParams['SEF_FOLDER'] . 'besplatny/',
];

if (!in_array($arCurPage[2], ['ip', 'ooo'])) {
    $links[] = [
        'title' => 'банки с бесплатной регистрацией ИП',
        'link' => $arParams['SEF_FOLDER'] . 'registracya/',
    ];
}
?>
<div class="section">
    <div class="container">
        <div class="see-also">
            <div class="see-also__title">Смотрите также:</div>

            <div class="see-also__links">
                <?foreach ($links as $link):?>
                    <a href="<?=$link['link']?>" class="see-also__link"><?=$link['title']?></a>
                <?endforeach?>
            </div>
        </div>
    </div>
</div>
