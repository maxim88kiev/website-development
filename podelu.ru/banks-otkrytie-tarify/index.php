<?php

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

use AMBase\Podelu\Articles\Banners\BannerRepository;

Bitrix\Main\Loader::includeModule('iblock');

$app = AMBase\Podelu\App::getInstance();
$asset = Bitrix\Main\Page\Asset::getInstance();
$asset->addCss($templateFolder . '/styles/detail.css');
$asset->addCss("/local/modules/ambase.podelu/lib/articles/banners/scss/article-banner.css");
$asset->addCss("/local/templates/podelu_article/components/bitrix/news/article/bitrix/news.detail/.default/style.css");
$asset->addJs("/local/templates/podelu_article/components/bitrix/news/article/bitrix/news.detail/.default/script.js");

$ElementID = 9027;

$commentsIblockId = $app->container->get('iblock.article.id');
$arProperty = CIBlockElement::GetProperty($commentsIblockId, $ElementID, [], ['CODE' => 'COUNT_COMMENTS'])->Fetch();
$countComments = $arProperty['VALUE'];

function renderBannerIfExists($code)
{
    $arOrder = [];
    $arFilter = ['CODE' => $code];
    $bannerVerticalProp = CIBlockElement::GetProperty(7, 9097, $arOrder, $arFilter)->Fetch();

    if ($bannerVerticalProp['VALUE']) {
        $banner = (new BannerRepository())->findById($bannerVerticalProp['VALUE']);
        echo $banner->render();
    }
}
?><div class="intro">
	<div class="intro__inside-wrap" style="min-height: auto;">
		<div class="bread_crumbs">
 <a class="btn-item2" href="/" title="Главная" id="bx_breadcrumb_0">Главная</a> <span class="additional_object_separator"> &gt; </span> <span class="btn-item2">Отзывы о банках для бизнеса: Банк Открытие</span>
			<div style="clear:both">
			</div>
		</div>
		 <script type="application/ld+json">{"@context": "http://schema.org","@type": "BreadcrumbList","itemListElement": [{"@type": "ListItem","position": 1,"name": "Главная","item": "http://podelu.ru/"},{"@type": "ListItem","position": 2,"name": "Статьи","item": "http://podelu.ru/article/"},{"@type": "ListItem","position": 3,"name": "Обзоры","item": "http://podelu.ru/tag/"},{"@type": "ListItem","position": 4,"name": "Отзывы о банках для бизнеса: Банк Открытие","item": "http://podelu.ru/article/otzyvy-o-bankakh-dlya-biznesa-bank-otkrytie/"}]}</script> <img src="/upload/otkrytie-tarify-1.jpeg" alt="" class="img" style="right: 0;top: 0;bottom: 0;width: 70.4375rem;height: auto;margin: auto;">
		<div class="btn_group">
 <span class="btn-item4 disable">2</span> <span id="goToCommentsBlock" class="btn-item5"><?=$countComments?></span>
		</div>
		<div class="text_block">
			 Отзывы о банках для бизнеса: Банк Открытие
		</div>
		<div class="text_block1" style="line-height: 1.3;">
			<p>
				 Эксперты Podelu берут у реальных предпринимателей интервью о банках, которые обслуживают их бизнес. Это не рекламный или партнерский материал, а честные отзывы людей, которые открыли счёт, пользуются РКО и банковскими сервисами, регулярно заходят в мобильный банк и могут рассказать об удобствах или фейлах. Сегодня говорим об “Открытии”.
			</p>
		</div>
	</div>
</div>
<div class="content_block_rs">
    <div class="content_block_rs__inside-wrap">
        <div class="content_block_rs__right_cont article-right-block article-right-block_sticky" style="">
            <div class="article-right-block__btn"></div>



            <div class="article-right-block__contents">
                <div class="article-right-block__contents-container">
                    <div class="article-right-block__contents-title">Содержание</div>
                    <div class="article-right-block__contents-text">
                        <div class="contents">
                            <p>
                                <a href="#link1">Выбор банка</a>
                            </p>

                            <ul>
                                <li>
                                    <p>
                                        <a href="#link2">Регистрация ИП</a>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <a href="#link3">Открытие счета</a>
                                    </p>
                                </li>
                            </ul>

                            <p>
                                <a href="#link4">Стоимость обслуживания</a>
                            </p>
                            <p>
                                <a href="#link5">Дополнительные банковские продукты</a>
                            </p>
                            <p>
                                <a href="#link6">Дополнительные сервисы</a>
                            </p>
                            <p>
                                <a href="#link7">Мобильный и онлайн-банки</a>
                            </p>
                            <p>
                                <a href="#link8">Техподдержка</a>
                            </p>
                            <p>
                                <a href="#link9">Налоги и бухгалтерия</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="article-right-block__banner">
                <?renderBannerIfExists('BANNER_VERTICAL')?>
            </div>
        </div><div class="content_block_rs__left_cont">
            <div class="article">
                <p>
                    Я предприниматель из Екатеринбурга, работаю с ноября 2019. У меня три сотрудника, зарабатываем на агентских комиссиях на веб-портале. Бухгалтерия на аутсорсе, бухгалтер ведет ее в Эльбе. Хочу поделиться своим опытом открытия счета и сотрудничества с банком “Открытие”.
                </p>

                <p>
                    <b>Кому будет интересна статья:</b> индивидуальному предпринимателю, фрилансеру или руководителю организации с небольшим бизнесом в интернете или в сфере услуг, без международных сделок.
                </p>

                <b>Время чтения - 7 минут. </b>Чтобы справиться быстрее, выбирайте нужный материал по содержанию или сразу смотрите таблицу с оценками внизу страницы.<br>


                <h1 id="link1">Выбор банка</h1>
                <p>
                    Я выбирал банк, чтобы зарегистрировать ИП и открыть счёт. Сотрудникам я перечисляю до 150 тыс. в месяц и делаю 3-4 платежа юрлицам. Поэтому искал <b>минимальную комиссию за переводы физлицам</b> в пределах этой суммы и <b>платежи контрагентам</b>, остальные показатели для меня пока не актуальны. Остановился на банке Открытие и Промсвязьбанке, их тарифы РКО похожи: предлагали 3 бесплатных перевода юрлицам и нулевую комиссию при платежах физлицам до 100-150 тыс. рублей в месяц.&nbsp;
                </p>
                <h2 id="link2">Регистрация ИП</h2>
                <p>
                    <b>Не хотел тратить время на регистрацию</b> ИП и рассчитывал, что это сделает за меня банк перед открытием счёта. Позвонил в Открытие и узнал, что сервис регистрации ИП в Екатеринбурге временно не работает. Тогда подал заявку на регистрацию в Промсвязьбанк, ИП оформили быстро, спасибо им.&nbsp;
                </p>
                <br>
                <p>
                    Но дальше <b>насторожило, что после регистрации начался шквал звонков</b> (около 40) от банков и их «партнёров». Не знаю, ФНС или регистратор передали им мои контакты, знал бы — дал запасной номер.&nbsp;
                </p>
                <h2 id="link3">Открытие счёта</h2>
                <p>
                    После регистрации попытался открыть расчётный счет в ПСБ, но только потерял время и вернулся к варианту с Открытием — тарифы для ИП у банков очень похожи. <b>Отправил заявку на сайте.</b>
                </p>
                <br>
                <p>
                    <b>Перезвонили за полчаса</b>, предложили провести онлайн встречу по защищенному каналу без курьеров и выездов в офис. Встречу провели на следующий рабочий день и <b>сразу открыли счёт</b>. Через офис, я так понимаю, можно было день-в-день открыть. Из документов, как и положено, <b>только паспорт</span>. Для ООО по расчётному счёту, насколько знаю, сроки тоже минимальные и возможно дистанционное открытие, но банк запрашивает уже несколько документов, чтобы открыть счёт.
                </p>
                <br>
                <p>
                    <b>Оценка 5, однозначно, за цену и оперативность.</b>
                </p>

                <?renderBannerIfExists('BANNER_HORIZONTAL')?>
                <?renderBannerIfExists('BANNER_MOBILE')?>

                <h1 id="link4">Стоимость обслуживания</h1>
                <p>
                    Мои доходы пока небольшие, но я плачу зарплату по договорам ГПХ и оплачиваю услуги юрлиц. Так что в моем случае <b>на цену обслуживания в банке влияют комиссия за переводы физическим лицам и платежи юридическим лицам</span>, по этим показателям тарифы Открытия довольно выгодные.
                </p>
                <br>
                <p>
                    Разработчикам и копирайтерам я перечисляю около 150 тыс. рублей в месяц: комиссия в разных банках может составить от 0 до 2 000 рублей в месяц — конечно, платить лишнее я не намерен. В ПСБ переводы физлицам были бы бесплатны, в Открытии рублей 600 приходится платить.
                </p>
                <br>
                <p>
                    Также делаю платежи юрлицам: бухгалтер, Ростелеком, Яндекс.Директ — 3-4 платежки по 5-10 тыс. рублей. Как раз укладываюсь в бесплатный лимит на начальных тарифах.
                </p>
                <br>
                <p>
                    <img width="624" src="https://lh5.googleusercontent.com/d49S2PRgreoacJDdkRwEFEYlKmXT9RfXAbosvYmx98lt5l1dKXse3VInq-OIxC667TWjb_C7lvDkgLD-z3ebl8cbis9ygGk03jQcg-CjAZr5NfuF8mv_5C-MrvnvSoPZj2rRF6e5" height="255">
                </p>
                <h1 id="link5">Дополнительные банковские продукты</h1>
                <p>
                    У Открытия есть своя простая бухгалтерия, но бухгалтерии от банков я не рассматривал, потому что <b>у меня есть сотрудники, а значит учёт с отчётностью уже не самые простые</b>. Плюс слышал, что <b>банки часто косячат, и в разборки с налоговой вступать совсем не хочется.</span> Еще Открытие предлагает работать в «Мое дело», с которым у него интеграция. Но я уже выбрал полновесную Эльбу, и попросил бухгалтера вести учет в ней.
                </p>
                <br>
                <p>
                    Ставка по депозитам у Открытия смешная, тоже не рассматриваю.
                </p>
                <br>
                <p>
                    <b>Воспользоваться регистрацией бизнеса с помощью Открытия не удалось</b>: как я уже говорил, сервис регистрации ИП в Екатеринбурге временно не работал, когда мне это было нужно. <b>Другие банковские продукты</b> для предпринимателей <b>не рассматривал</b>.
                </p>
                <p>
                    <img width="624" src="https://lh3.googleusercontent.com/dha7wTIFb85BE6wrPwwTKQD8BRwX5D0oPolDE6Ec1y2AbUfpStzIU842QLl-Tubz4zZfP4Txfimqd5d-An3p8y5Ok2XAcYCD5RdEjWhxwWWX5C_LXj8GFW_PUdfrgljJUYIL_npO" height="475">
                </p>
                <h1 id="link6">Дополнительные сервисы</h1>
                <p>
                    Когда выбирал банк, <b>смотрел только на цену</b>, на дополнительные сервисы не обращал внимания. Но потом, как ни странно, воспользовался.
                </p>
                <br>
                <ol>
                    <li>
                        <p>
                            Один раз помогла<b> проверка контрагента</b>. Собирался платить студии, и проверка контрагента показала красное предупреждение. Задал вопрос контрагенту — оказалось, ребята забыли, что это ИП у них проблемное, дали другие реквизиты для оплаты.
                        </p>
                    </li>
                </ol>
                <br>
                <br>
                <p class="article__img-container">

                    <img class="article__img" width="525" src="https://lh5.googleusercontent.com/p-Fl9znaHNaYbXEbeYrQ2ZtOKTTfzbRmDdIe6S71TQujoWWtJoB0aEkkACPuia1BHwoAJ6P01tWqYyOuhvYPffNkrr5vrUYs5FQBwBGF3jyD0gjuJ9HiMveZv_ZbyhMn3M1oTP0L" height="223">
                    <div class="article__img-description">Вот как выглядит в личном кабинете банка Открытие функционал проверки контрагентов</div>
                </p>

                <ol>
                    <li>
                        <p>
                            Очень порадовал бонус в Яндекс.Директ. Закинул 2 тыс. рублей и получил еще 6 тыс. в подарок. Мелочь, а приятно. Жаль, не знал, что Вконтакте клиентам Открытия тоже дарит подарки, уже активировал аккаунт без бонуса.
                        </p>
                    </li>
                </ol>
                <br>
                <p>
                    <img width="624" src="https://lh6.googleusercontent.com/xRzb6IJ8WCV-aLe3rR8ICC_xphO6OHOfEjjBywX351e2BdUwVn93Rg8CFcAehJ6bUOvvEeNsPeDMi2NsuymSAFPzis92DpIscIkYLqtx3YmZRDW_-BnTSu20KXx-J-WzdG76BFqj" height="425">
                </p>
                <h1 id="link7">Мобильный и онлайн-банки</h1>
                <p>
                    Чаще пользуюсь <b>интернет-банком</b>, потому что ИНН и номера счёта удобнее копировать на компьютере, чем в телефоне. <b>Мобильный банк открываю, чтобы проверить, прошел ли платёж, или переслать свои реквизиты контрагенту.</b>
                </p>
                <br>
                <p>
                    Есть небольшое замечание: первый экран сделан, видимо, для тех, у кого много счетов. Чтобы зайти в свой счёт, надо кликнуть на него. Но у меня один счёт, можно мне его сразу показывать?&nbsp; Хотя это придирки из разряда «перламутровые пуговицы».
                </p>
                <br>
                <p>
                    <b>Онлайн-банку Открытия ставлю пять баллов</b>: простой и удобный, очень лаконичный, при этом всё есть. Операции проходят не очень быстро, иногда даже медленно, но не критично. Оформление приятное. Мобильное приложение реально быстрое, сравнивал с другими.
                </p>
                <br>
                <br>
                <p class="article__img-container">
                    <img class="article__img" width="195" src="https://lh4.googleusercontent.com/mGcv59YWlU1U5qAXgL1KDOvXjmj-WS8TqcMfFnc_y8zakexO1L8drEA6xrBlW_Wum39xXftxtRAw9Oau4vm48u8jSYKHKMDSr8LA8oY-K_fEFR6cLRIP1CJg3P3B-lFRj6cMyULS" height="392">
                    <div class="article__img-description">Вот так в мобильном банке можно отправить перевод физлицу или юрлицу</div>
                </p>

                <p>
                    По идее, у банка есть распознавалка счетов, но почему-то кнопки «распознать» в диалоге ввода данных платежа нет
                </p>
                <br>
                <br>
                <br>
                <br>
                <p class="article__img-container">
                    <img class="article__img" width="230" src="https://lh3.googleusercontent.com/jpgtUXgSQXQnnYpoabDslx6TjKGtwh6ySCaTG8CSobsJTcYcx5pWkM4eFBllIqlg2YtV4kv6S4GN0l6eKNJejr_f0d5eqegTU-pYYTySokoj6z6m5SvhIRkrLtt1CXoGF2_AlK8y" height="462">
                    <div class="article__img-description">Как выглядит распознавание счетов в мобильном банке Открытия</div>
                </p>

                <p>
                    Так выставляется счет на оплату:
                </p>
                <p class="article__img-container">
                    <img class="article__img" width="218" src="https://lh3.googleusercontent.com/2qC96bFhcYBoy6oN5uBsGScHuWfqSuRgJB2IJiceDd91JQTeKvqlccZjXK1qN6P9GE6ZU5ORJ12fbcLOwHKj4E5uoCvN8VAE2tWsCaS_DUVaQCCcYTtWP7eQpqrj8aD5kUb65U9_" height="436">
                    <div class="article__img-description">Экран мобильного банка с функционалам выставления счетов</div>
                </p>

                <p>
                    Жаль, что у онлайн-банка <bb>нет и не предвидится прямой связи с полноценной Эльбой</bb>, только с «Моим делом». По-моему, это большая промашка. <b>Приходится выгружать банковскую выписку и перекидывать в Эльбу файлами.&nbsp;</span>
                </p>
                <br>
                <p>
                    А ещё надоели с рекламой Фонда Хабенского. Если я один раз сказал «не хочу», можно больше не приставать?
                </p>
                <h1 id="link8">Техподдержка</h1>
                <p>
                    Техподдержка в мобильном приложении <b>быстро отвечает на простые вопросы</b>. По сложным вопросам думают дольше. Чат — отличное средство общения, тут молодцы. Телефон горячей линии найти легко, <b>отвечают мгновенно</span>, пять раз не спрашивают, физлицо вы или юрлицо.
                </p>
                <br>
                <p>
                    <b>Отрицательный момент: в онлайн-банке для ПК нет чата</b>, и там на обращения отвечают медленно. Пока дождёшься ответа, уже решишь проблему другим способом.
                </p>
                <br>
                <p>
                    За скорость ответа и дружелюбие ставлю техподдержке Открытия 5 баллов: реально, мгновенно берут трубку, очень приятный персонал, даже как-то мотивирует заниматься делом. За качество ответов - 4 балла: иногда долго отвечают на сложные вопросы.
                </p>
                <h1 id="link9">Налоги и бухгалтерия</h1>
                <p>
                    С бухгалтерией и налоговой Открытие мне <b>никак не помогает</b>, скорее, вредит, потому что <b>не даёт грузить выписку в Эльбу</b>.&nbsp;
                </p>
                <br>
                <br>
                <p>
                    Итого, если суммировать все комментарии ставим следующие оценки банку Открытие
                </p>
                <br>
                <p>
                    <img width="624" src="https://lh6.googleusercontent.com/n0v2DOHmpDfAJ1MpGI9p6wFkSApyiUPJqwIVYupEfLOm8GMXEUj5fN5vdDtT82sQzuOIEX37V2YH4qIYDSUwYyAQRrTorHXok4AD_hCh8mJSB4bd-8gI6A1tejrwYWPUoNq5X6Ck" height="199">
                </p>
                <br>
                <br>
            </div>

            <div class="block_user">
                <img src="/upload/ivan_klimovskih.png" alt="" class="block_user__ico">
                <div class="block_user_text">Иван</div>
                <div class="block_user_text1">предприниматель</div>
                <div class="block_user_text2">17.07.2020</div>
            </div>

            <div id="commentsBlock" class="additional_object_separator1"></div>

            <?
            /*
            $commentsIblockId = $app->container->get('iblock.comments.id');
            $commentsIblockType = $app->container->get('iblock.comments.type');
            $arFilter = [
                'IBLOCK_ID' => $commentsIblockId,
                'UF_ENTITY_ID' => $ElementID,
            ];
            $arSection = CIBlockSection::GetList([], $arFilter)->Fetch();
            $sectionId = !empty($arSection['ID']) ? $arSection['ID'] : -1;
            $APPLICATION->IncludeComponent(
                "ambase:comment.list",
                "",
                [
                    "ADD_SECTIONS_CHAIN" => "N",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "COUNT_ELEMENTS" => "N",
                    "FILTER_NAME" => "sectionsFilter",
                    "IBLOCK_ID" => $commentsIblockId,
                    "IBLOCK_TYPE" => $commentsIblockType,
                    "SECTION_CODE" => "",
                    "SECTION_FIELDS" => array("", ""),
                    "SECTION_ID" => $sectionId,
                    "SECTION_URL" => "",
                    "SECTION_USER_FIELDS" => array("", ""),
                    "SHOW_PARENT_NAME" => "Y",
                    "TOP_DEPTH" => "10",
                    "VIEW_MODE" => "LIST"
                ]
            );
            ?>

            <?$APPLICATION->IncludeComponent(
                "ambase:clean",
                "comment-form",
                ["ELEMENT_ID" => $ElementID]
            );
            */
            ?>

            <?/*
            <div class="text_block5">Другие статьи по теме:</div>
            <div class="tile">
                <a href="/article/internet-ekvayring-i-onlayn-kassa/" class="img_link">
                    <img src="/upload/resize_cache/iblock/ade/319_338_2/ade7b49d9f28e02289a997dbbff49c59.jpg" width="319" height="338" alt="" title="">
                </a>

                <a class="text" href="/article/internet-ekvayring-i-onlayn-kassa/">
                    Интернет-эквайринг и онлайн-касса        </a>
                <br>
                <span class="btn-item4">11</span>
                <span class="btn-item5">0</span>
            </div>
            <div class="tile">
                <a href="/article/platyezhnye-sistemy-dlya-sayta-fizicheskikh-lits/" class="img_link">
                    <img src="/upload/resize_cache/iblock/2fc/319_338_2/2fcb955579e85d7c1910b1cb0416433f.jpg" width="319" height="338" alt="" title="">
                </a>

                <a class="text" href="/article/platyezhnye-sistemy-dlya-sayta-fizicheskikh-lits/">
                    Платёжные системы для сайта физических лиц        </a>
                <br>
                <span class="btn-item4">73</span>
                <span class="btn-item5">20</span>
            </div>
            */?>
        </div>
    </div>

    <div class="container" style="margin: 45px auto">

    </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
