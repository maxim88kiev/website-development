<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$asset = Bitrix\Main\Page\Asset::getInstance();
$asset->addCss('/local/templates/podelu/assets/css/about.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/vendor/owlcarousel/assets/owl.carousel.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/vendor/owlcarousel/assets/owl.theme.default.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/vendor/owlcarousel/owl.carousel.js');
$asset->addJs('/local/templates/podelu/assets/js/about.js');


$APPLICATION->SetTitle("Новая страница");
?>


<div class="banner-list">
    <div class="banner-list__container ">
        <div class="banner-list__items">
            <div class="banner-list__item">
                <div class="banner-list__item-info">
                    <div class="banner-list__item-title">Мы далаем выбор сервисов <br> и партнеров для бизнеса <br>
                        простым
                        и понятным
                    </div>
                    <div class="banner-list__item-description">Podelu — портал, который создает удобные <br> сервисы и
                        рекомендации для выбора партнеров
                    </div>
                    <a class="banner-list__item-btn" href="rko/">Выбрать банк</a>
                </div>
                <div class="banner-list__item-image">
                    <img class="banner-list__item-image-bg" src="/images/background_1.png" alt="banner-list-background">
                    <img class="banner-list__item-image-main" src="/images/image_1.png" alt="banner-list-image">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-us">
    <div class="about-us__container">
        <div class="about-us__info">Мы:</div>
        <div class="about-us__items owl-carousel">
            <div class="about-us__item">
                <div class="about-us__item-image">
                    <img class="about-us__item-image-1" src="/local/templates/podelu/img/about-us-image-11.png"
                         alt="about-image-1">
                </div>
                <div class="about-us__item-name">Сравниваем</div>
                <div class="about-us__item-info">Сравниваем тарифы на расчетно-кассовое обслуживание</div>
            </div>
            <div class="about-us__item">
                <div class="about-us__item-image">
                    <img class="about-us__item-image-2" src="/local/templates/podelu/img/about-us-image-22.png"
                         alt="about-image-2">
                </div>
                <div class="about-us__item-name">Упрощаем</div>
                <div class="about-us__item-info">Упрощаем процесс подбора банковского эквайринга</div>
            </div>
            <div class="about-us__item">
                <div class="about-us__item-image"><img class="about-us__item-image-3"
                                                       src="/local/templates/podelu/img/about-us-image-33.png"
                                                       alt="about-image-3">
                </div>
                <div class="about-us__item-name">Освещаем</div>
                <div class="about-us__item-info">Освещаем всех партнеров по онлайн бухгалтерии максимально прозрачно
                </div>
            </div>
            <div class="about-us__item">
                <div class="about-us__item-image"><img class="about-us__item-image-4"
                                                       src="/local/templates/podelu/img/about-us-image-44.png"
                                                       alt="about-image-4">
                </div>
                <div class="about-us__item-name">Пишем</div>
                <div class="about-us__item-info">Пишем полезный контент для малого и среднего бизнеса</div>
            </div>
        </div>
    </div>
</div>

<div class="benefits__container">
    <div class="benefits__container-img">
        <svg width="522" height="542" viewBox="0 0 522 542" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.1"
                  d="M475.636 201.784L475.637 201.786C505.583 292.479 468.788 406.007 389.007 464.542L389.005 464.543C349.291 493.801 298.805 509.422 249.276 510.886C199.742 512.351 151.256 499.655 115.506 472.391C43.9987 417.86 22.7392 304.714 54.0393 212.244C85.3291 119.804 169.061 47.9898 259.138 46.0413C349.279 44.0914 446.013 111.41 475.636 201.784Z"
                  stroke="#005559" stroke-width="2"/>
            <path d="M291.14 55.855C296.513 39.4659 289.914 18.9649 275.607 8.39127C261.358 -2.18233 239.401 -2.88724 226.553 6.98146C213.706 16.8502 209.91 37.2924 215.516 53.9752C221.123 70.658 236.131 83.6401 252.306 83.9925C268.482 84.345 285.826 72.1853 291.14 55.855Z"
                  fill="#FAF5F2"/>
            <path d="M266.5 34.5L261.25 27" stroke="#0D291C" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path d="M241 34.5L247 27" stroke="#0D291C" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path d="M269.5 40.5L272.5 34.5H235L242.5 57H250" stroke="#0D291C" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M269.5 51C271.157 51 272.5 49.6569 272.5 48C272.5 46.3431 271.157 45 269.5 45C267.843 45 266.5 46.3431 266.5 48C266.5 49.6569 267.843 51 269.5 51Z"
                  stroke="#25B995" stroke-width="1.5"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M259 63C260.657 63 262 61.6569 262 60C262 58.3431 260.657 57 259 57C257.343 57 256 58.3431 256 60C256 61.6569 257.343 63 259 63Z"
                  stroke="#25B995" stroke-width="1.5"/>
            <path d="M269.5 55.5V63" stroke="#25B995" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path d="M259 45V52.5" stroke="#25B995" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M1.85961 235.145C-3.5129 251.534 3.08595 272.035 17.3932 282.609C31.642 293.182 53.5992 293.887 66.4466 284.019C79.2939 274.15 83.0897 253.708 77.4836 237.025C71.8775 220.342 56.8695 207.36 40.6935 207.007C24.5176 206.655 7.17373 218.815 1.85961 235.145Z"
                  fill="#FAF5F2"/>
            <path d="M20.5 247.5H23.5L26.5 241.5L31 258L36.9109 231L40 240" stroke="#0D291C" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M45.9999 258L48.9923 268.5L52.071 256.577L54.9999 243L59.4999 247.5H63.9999" stroke="#0D291C"
                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M43 252C44.6569 252 46 250.657 46 249C46 247.343 44.6569 246 43 246C41.3431 246 40 247.343 40 249C40 250.657 41.3431 252 43 252Z"
                  stroke="#25B995" stroke-width="1.5"/>
            <path d="M129.86 486.145C124.487 502.534 131.086 523.035 145.393 533.609C159.642 544.182 181.599 544.887 194.447 535.019C207.294 525.15 211.09 504.708 205.484 488.025C199.877 471.342 184.869 458.36 168.694 458.007C152.518 457.655 135.174 469.815 129.86 486.145Z"
                  fill="#FAF5F2"/>
            <path d="M180 506.75V512.273C180 513.779 178.791 515 177.3 515H155.7C154.209 515 153 513.779 153 512.273V487.727C153 486.221 154.209 485 155.7 485H165"
                  stroke="#0D291C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M183.83 489.666H170.44" stroke="#25B995" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path d="M178.5 483.5L184.5 489.5L178.5 495.5" stroke="#25B995" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path d="M161.17 501.666H174.56" stroke="#25B995" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path d="M166.5 495.5L160.5 501.5L166.5 507.5" stroke="#25B995" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path d="M443.86 259.145C438.487 275.534 445.086 296.035 459.393 306.609C473.642 317.182 495.599 317.887 508.447 308.019C521.294 298.15 525.09 277.708 519.484 261.025C513.877 244.342 498.869 231.36 482.694 231.007C466.518 230.655 449.174 242.815 443.86 259.145Z"
                  fill="#FAF5F2"/>
            <path d="M494 280.5V285.273C494 286.779 492.791 288 491.3 288H469.7C468.209 288 467 286.779 467 285.273V260.727C467 259.221 468.209 258 469.7 258H479"
                  stroke="#0D291C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M479 265.5H474.5" stroke="#0D291C" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path d="M479 273H474.5" stroke="#0D291C" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path d="M482 280.5H474.5" stroke="#0D291C" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M490.249 270C486.527 270 483.499 266.972 483.499 263.25C483.499 259.528 486.527 256.5 490.249 256.5C493.97 256.5 496.999 259.528 496.999 263.25C496.999 266.972 493.97 270 490.249 270Z"
                  stroke="#25B995" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M496.249 267.75L499.999 270.75" stroke="#25B995" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
            <path d="M253 346C287.794 346 316 317.794 316 283C316 267.143 310.142 252.655 300.472 241.581C296.998 245.42 277.146 267.667 263.5 289.5C248.91 312.845 234.319 341.393 233.533 342.935C239.664 344.925 246.206 346 253 346Z"
                  fill="#25B995"/>
            <path d="M212 330.834V255H231.5V300C244.334 276.708 265.754 242.843 281.583 226.842C273.005 222.467 263.29 220 253 220C244.02 220 235.479 221.879 227.748 225.265C231.46 227.172 234 231.039 234 235.5C234 241.851 228.851 247 222.5 247C216.327 247 211.289 242.136 211.012 236.031C198.116 247.567 190 264.336 190 283C190 302.136 198.532 319.28 212 330.834Z"
                  fill="#25B995"/>
        </svg>
    </div>
    <div class="benefits__container-block-content">
        <div class="benefits__container-block">
            <div class="benefits__container-title">Преимущества</div>
            <div class="benefits__container-info">Сообщество экспертов <br> с большим опытом</div>
            <div class="benefits__container-items">
                <div class="benefits__container-head">
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="4" fill="#25B995"/>
                    </svg>
                    <div class="benefits__container-head-mob">01.</div>
                    Знаем, как сравнивать
                </div>
                <div class="benefits__container-item">
                    С помощью наших калькуляторов вы сможете<br>быстро выбрать сервис, подходящий именно вам
                </div>
            </div>
            <div class="benefits__container-items">
                <div class="benefits__container-head">
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="4" fill="#25B995"/>
                    </svg>
                    <div class="benefits__container-head-mob">02.</div>
                    Найдем то, что нужно именно вам
                </div>
                <div class="benefits__container-item">
                    Вы можете сравнить партнеров<br>для бизнеса по множеству критериев
                </div>
            </div>
            <div class="benefits__container-items">
                <div class="benefits__container-head">
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="4" fill="#25B995"/>
                    </svg>
                    <div class="benefits__container-head-mob">03.</div>
                    Регулярно обновляем данные
                </div>
                <div class="benefits__container-item">
                    Все данные для сравнения регулярно и автоматически<br>обновляются - мы следим за актуальностью всей
                    информации на сайте
                </div>
            </div>
            <div class="benefits__container-items">
                <div class="benefits__container-head">
                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="4" fill="#25B995"/>
                    </svg>
                    <div class="benefits__container-head-mob">04.</div>
                    Только объективное сравнение
                </div>
                <div class="benefits__container-item">
                    Не занимаемся рекламой и не советуем<br>выгодные для нас тарифы или партнеров
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team__container">
    <div class="team__container-title">Наша команда</div>
    <div class="team__container-info">Podelu.ru — это команда<br>профессионалов</div>
    <div class="team__container-items owl-carousel">
        <div class="team__container-item">
            <div class="team__container-img">
                <img src="/local/templates/podelu/img/team-img_1.png"
                     alt="team-img">
            </div>
            <div class="team__container-name"><a href="/authors/liliya-perebeynos/">Лилия Федулина <br> (Перебейнос)</a>
            </div>
            <div class="team__container-inf">экономист, предприниматель</div>
        </div>
        <div class="team__container-item">
            <div class="team__container-img">
                <img src="/local/templates/podelu/img/team-img_2.png"
                     alt="team-img">
            </div>
            <div class="team__container-name"><a href="/authors/elizaveta-kobrina/">Елизавета <br> Кобрина</a></div>
            <div class="team__container-inf">экономист, фрилансер</div>
        </div>
        <div class="team__container-item">
            <div class="team__container-img">
                <img src="/local/templates/podelu/img/team-img_3.png"
                     alt="team-img">
            </div>
            <div class="team__container-name"><a href="/authors/mikhail-kobrin/">Михаил <br> Кобрин</a></div>
            <div class="team__container-inf">экономист</div>
        </div>
        <div class="team__container-item">
            <div class="team__container-img">
                <img src="/local/templates/podelu/img/team-img_4.png"
                     alt="team-img">
            </div>
            <div class="team__container-name"><a href="http://elena-permikina.ru/"
                                                 target="_blank">Елена<br>Пермикина</a></div>
            <div class="team__container-inf">юрист</div>
        </div>
    </div>
</div>
<div class="press__container">
    <div class="press__container-elem">
        <div class="press__container-image">
            <img src="/local/templates/podelu/img/press-image.png"
                 alt="press-image">
        </div>
        <div class="press__container-block">
            <div class="press__container-title">Мы понимаем, что хочет каждый предприниматель »</div>
            <div class="press__container-info">
                <p>Я верю, что в бизнесе любого масштаба есть место эффективности. Каждый предприниматель понимает, что
                    у
                    него есть 2 ресурса – время и капитал. Но многие продукты и услуги устроены так, что выбрать
                    оптимальное
                    предложение по цене и качеству невозможно без колоссальной траты времени.</p>
                <p>Надеюсь, нам удалось воплотить идею простоты и эффективности в нашем сервисе, и мы сможем помочь вам
                    сделать правильный и максимально простой выбор.</p>
            </div>
            <div class="press__container-name">Климовских Иван</div>
            <div class="press__container-inf">генеральный директор <span>Podelu.ru</span></div>
        </div>
    </div>
    <div class="press__container-bottom">Пресса</div>
</div>
<div class="content-list content-list_page_main">
    <div class="content-list__title">Еще мы пишем контент для<br> предпринимателей в СМИ</div>
    <div class="content-list__items owl-carousel">
        <a class="content-list__item" href="https://expert.ru/2020/04/20/chto-nuzhno-dlya-otkryitiya-ip-v-2020-godu/">
            <div class="content-list__item-name">Что нужно для открытия ИП в 2020 году</div>
            <div class="content-list__item-site">
                <div class="content-list__item-site-image">
                    <img src="/local/templates/podelu/img/image 18.svg"
                         alt="" style="opacity: 1;">
                </div>
                <div class="content-list__item-site-info">
                    <div class="content-list__item-site-name">Эксперт Онлайн</div>
                    <div class="content-list__item-site-date">20 марта 2020</div>
                </div>
            </div>
        </a>
        <a class="content-list__item"
           href="https://vc.ru/finance/116933-plastik-dlya-biznesa-komu-vygodno-ispolzovat-korporativnye-karty">
            <div class="content-list__item-name">Пластик для бизнеса. Кому выгодно использовать
                корпоративные карты?
            </div>
            <div class="content-list__item-site">
                <div class="content-list__item-site-image">
                    <img src="/local/templates/podelu/img/image 19.svg"
                         alt="" style="opacity: 1;">
                </div>
                <div class="content-list__item-site-info">
                    <div class="content-list__item-site-name">VC.RU</div>
                    <div class="content-list__item-site-date">1 апр 2020</div>
                </div>
            </div>
        </a>
        <a class="content-list__item" href="https://rb.ru/opinion/kak-sekonomit-na-bankovskom-obsluzhivanii/">
            <div class="content-list__item-name">Смена тарифа и отказ от стационарной кассы: как сэкономить
                на банковском обслуживании в кризис
            </div>
            <div class="content-list__item-site">
                <div class="content-list__item-site-image">
                    <img src="/local/templates/podelu/img/image 20.svg"
                         alt="" style="opacity: 1;">
                </div>
                <div class="content-list__item-site-info">
                    <div class="content-list__item-site-name">Rubase</div>
                    <div class="content-list__item-site-date">24 апреля 2020</div>
                </div>
            </div>
        </a>
        <a class="content-list__item"
           href="https://www.mk.ru/economics/2020/04/07/kakoy-pomoshhi-zhdet-biznes-ot-gosudarstva-nalogovaya-otsrochka-ne-spaset.html">
            <div class="content-list__item-name">Какой помощи ждет бизнес от государства: налоговая отсрочка
                не спасет
            </div>
            <div class="content-list__item-site">
                <div class="content-list__item-site-image">
                    <img src="/local/templates/podelu/img/image 21.svg"
                         alt="" style="opacity: 1;">
                </div>
                <div class="content-list__item-site-info">
                    <div class="content-list__item-site-name">Московский Комсомолец</div>
                    <div class="content-list__item-site-date">7 апреля 2020</div>
                </div>
            </div>
        </a>
        <a class="content-list__item" href="https://www.cossa.ru/trends/265737/">
            <div class="content-list__item-name">Противостоим кризису: как диджитал-агентству адаптироваться к условиям
                пандемии и оптимизировать расходы
            </div>
            <div class="content-list__item-site">
                <div class="content-list__item-site-image">
                    <!--<img src=""
                         alt="" style="opacity: 1;">-->
                </div>
                <div class="content-list__item-site-info">
                    <div class="content-list__item-site-name">Cossa.ru</div>
                    <div class="content-list__item-site-date">12 мая 2020</div>
                </div>
            </div>
        </a>
        <a class="content-list__item" href="https://lifehacker.ru/finansovye-pokazateli-biznesa/">
            <div class="content-list__item-name">Какие финансовые показатели бизнеса отслеживать, чтобы не прогореть
            </div>
            <div class="content-list__item-site">
                <div class="content-list__item-site-image">
                    <img src="/local/templates/podelu/img/lifeghack.png"
                         alt="" style="opacity: 1;">
                </div>
                <div class="content-list__item-site-info">
                    <div class="content-list__item-site-name">Лайфхакер</div>
                    <div class="content-list__item-site-date">11 мая 2020</div>
                </div>
            </div>
        </a>
        <a class="content-list__item" href="https://quote.rbc.ru/news/article/5ee7aa8a9a794726940b7503">
            <div class="content-list__item-name">Какие налоговые льготы полагаются из-за коронавируса
            </div>
            <div class="content-list__item-site">
                <div class="content-list__item-site-image">
                    <img src="/local/templates/podelu/img/rbc.png"
                         alt="" style="opacity: 1;">
                </div>
                <div class="content-list__item-site-info">
                    <div class="content-list__item-site-name">РБК Инвестиции</div>
                    <div class="content-list__item-site-date">15 июня 2020</div>
                </div>
            </div>
        </a>
        <a class="content-list__item" href="https://russian.rt.com/business/article/767059-lgotnye-kredity-zarplata">
            <div class="content-list__item-name">Российские банки одобрили льготные кредиты бизнесу почти на 1 трлн
                рублей
            </div>
            <div class="content-list__item-site">
                <div class="content-list__item-site-image">
                    <img src="/local/templates/podelu/img/Russia-today-logo.png"
                         alt="" style="opacity: 1;">
                </div>
                <div class="content-list__item-site-info">
                    <div class="content-list__item-site-name">RT.COM</div>
                    <div class="content-list__item-site-date">23 июля 2020</div>
                </div>
            </div>
        </a>
        <a class="content-list__item" href="https://lenta.ru/news/2020/06/27/iis/">
            <div class="content-list__item-name">Названа выгодная альтернатива банковским вкладам
            </div>
            <div class="content-list__item-site">
                <div class="content-list__item-site-image">
                    <img src="/local/templates/podelu/img/lenta.png"
                         alt="" style="opacity: 1;">
                </div>
                <div class="content-list__item-site-info">
                    <div class="content-list__item-site-name">Lenta.ru</div>
                    <div class="content-list__item-site-date">27 июня</div>
                </div>
            </div>
        </a>
        <a class="content-list__item" href="https://nsk.dk.ru/news/237138080">
            <div class="content-list__item-name">Новая зачистка: вступили в силу поправки в закон о микрофинансовой
                деятельности
            </div>
            <div class="content-list__item-site">
                <div class="content-list__item-site-image">
                    <img src="/local/templates/podelu/img/dk.png"
                         alt="" style="opacity: 1;">
                </div>
                <div class="content-list__item-site-info">
                    <div class="content-list__item-site-name">Деловой квартал</div>
                    <div class="content-list__item-site-date">3 июля 2020</div>
                </div>
            </div>
        </a>


    </div>
</div>
<div class="feedback feedback_page_main">
    <div class="feedback__container">
        <div class="feedback__info">
            <div class="feedback__title">Помогите нам стать лучше!</div>
            <div class="feedback__description">
                Если у вас есть идеи и предложения, как сделать<br>наш сервис еще лучше, напишите нам, и мы <br>
                постараемся
                воплотить их в жизнь
            </div>
            <div class="feedback__btn">Поделиться идеями</div>
        </div>
        <div class="feedback__image">
            <img src="/local/templates/podelu/img/feedback__image.png" alt="">
        </div>
    </div>
</div>
<div class="contacts__container">
    <div class="contacts__info-mob">
        <div class="contacts__info-contact-mob">Контакты</div>
        <div class="contacts__info-organization-mob">Всегда на связи</div>
    </div>
    <div class="contacts__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2185.4855052915354!2d60.8766661159709!3d56.786136780842284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c16ab5c8211443%3A0xfafdc0e691d66c89!2z0YPQuy4g0J7QstC-0YnQvdCw0Y8sIDHQkSwg0JjRgdGC0L7Quiwg0KHQstC10YDQtNC70L7QstGB0LrQsNGPINC-0LHQuy4sINCg0L7RgdGB0LjRjywgNjIwOTEz!5e0!3m2!1sru!2sua!4v1596287274772!5m2!1sru!2sua"
                width="544" height="544" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
    </div>
    <div class="contacts__info">
        <div class="contacts__info-contact">Контакты</div>
        <div class="contacts__info-organization">Всегда на связи</div>
        <div class="contacts__info-block">
            <div class="contacts__name">Организация:</div>
            <div class="contacts__inf">ООО "ПОДЕЛУ.РУ"</div>
        </div>
        <div class="contacts__info-block">
            <div class="contacts__name">ИНН:</div>
            <div class="contacts__inf">6685175546</div>
        </div>
        <div class="contacts__info-block">
            <div class="contacts__name">Адрес:</div>
            <div class="contacts__inf">г. Екатеринбург ул. Овощная, 1Б</div>
        </div>
        <div class="contacts__info-block">
            <div class="contacts__name">Телефон:</div>
            <div class="contacts__inf">8 800 201-58-11 <span>пн – пт</span> <span>10:00 – 19:00 по мск</span></div>
        </div>
        <div class="contacts__info-block">
            <div class="contacts__name">E-mail:</div>
            <div class="contacts__mail-block">
                <div class="contacts__inf">Hello@podelu.ru <span>служба заботы о клиентах</span></div>
                <div class="contacts__inf">Busy@podelu.ru <span>по вопросам партнерства</span></div>
                <div class="contacts__inf">PR@podelu.ru <span>для прессы</span></div>
            </div>
        </div>
    </div>
</div>
<div class="compare__container">
    <div class="compare__info">Ну что, сравним?</div>
    <div class="compare__items">
        <div class="compare__item">
            <div class="compare-image">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.95 7.6875L25.5 12L28.95 16.3125" stroke="#005559" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.5502 28.6875L21.0002 33L17.5502 37.3125" stroke="#005559" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26.7 12.0375L34.9879 12.0122C37.2018 12.0055 39.0001 13.7983 39.0001 16.0122V21M17.2125 12.0375H11.5001C9.29098 12.0375 7.50012 13.8284 7.50012 16.0375V29C7.50012 31.2091 9.29098 33 11.5001 33H18.9375"
                          stroke="#005559" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="33.75" cy="32.25" r="5.25" stroke="#25B995" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="compare__item-name">Выбрать расчетно-кассовое обслуживание</div>
            <div class="compare__item-info">Более 200 предложений от российских банков</div>
            <a class="banner-list__item-btn" href="rko/">Узнать больше</a>
        </div>
        <div class="compare__item">
            <div class="compare-image">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35.4844 33C40.0125 33 43.6875 29.325 43.6875 24.7969C43.6875 20.4656 40.3242 16.9547 36.0586 16.6594C34.943 10.9992 29.9719 6.75 24 6.75C19.2586 6.75 15.1406 9.44062 13.0898 13.3781C8.15156 13.9031 4.3125 18.0867 4.3125 23.1562C4.3125 27.8525 7.61309 31.788 12.0178 32.7664"
                          stroke="#005559" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22.8459 25.5H26.7574C29.5027 25.5 30 27.7878 30 29.25V29.5011C30 30.9633 29.2848 33 26.7574 33H19.5"
                          stroke="#25B995" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22.5 40.5V25.5" stroke="#25B995" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M19.5 37.5H25.4825" stroke="#25B995" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="compare__item-name">Сравнить тарифы на эквайринг</div>
            <div class="compare__item-info">Широкий выбор вариантов со ставкой от 1,5%</div>
            <a class="banner-list__item-btn" href="torgovyy-ekvayring/">Подробнее</a>
        </div>
    </div>
</div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
