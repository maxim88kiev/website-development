<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 * Template Name: targeted_advertising
 */
 
	
 
	get_header();
	
	wp_enqueue_style( 'header-css', get_stylesheet_directory_uri().'/assets/css/header.css');
	wp_enqueue_style( 'targeted-css', get_stylesheet_directory_uri().'/assets/css/targeted.css');
	wp_enqueue_script( 'targeted-script', get_theme_file_uri( '/assets/js/targeted.js' ));

?>


<div class="container__top">
	<div class="container__banner">
		<div class="container__banner-block">
			<div class="banner__block-text">
				<h1 class="block__text-title">Таргетированная реклама в Facebook и Instagram</h1>
				<div class="block__txt">Социальные сети - это один из самых больших  источников заинтересованных Вашим продуктом потребителей, а таргетинг - мощнейший инструмент их поиска</div>
				<div class="banner__block-text-bg"></div>
			</div>
			<div class="banner__block-form">
				<div class="banner__block-form-text">
					<div class="banner__block-form-title">Хотите рост продаж</div>
					<div class="banner__block-form-info">Оставьте заявку на консультацию</div>
				</div>
					<form id="consultation_form">
						<div id="consultation_note"></div>
						<div id="consultation_fields">
							<div class="form-group input_style">
							<input id="name_el"  class="input" name="name" type="text" placeholder="Имя" required>
							</div>
							<div class="form-group input_style">
							<input id="telephon_el" class="input" name="telephon" type="number" placeholder="Телефон" required>
							</div>
							<div class="form-group">
								<input id="banner_submit" class="submit banner_form_but" value="Перезвоните мне" type="submit" />
							</div>
							<input type="hidden" name="form_name" value="Keis: форма - Страница социальные сети: Заявка на консультацию">
						</div>
					</form>
					
			</div>
		</div>
	</div>
</div>

<div class="container__advantages">
	<div class="container__advantages-bg">
		<div class="container__advantages-block">
			<h2 class="advantages__block-title">Преимущества таргетированной рекламы</h2>
			<div class="advantages__block-description">
				<div class="advantages__block-1">
					<div class="bg__block-1"></div>
					<div class="advantages__block-text">Универсальность для любого бизнеса</div>
				</div>
				<div class="advantages__block-2">
					<div class="bg__block-2"></div>
					<div class="advantages__block-text">Гибкие настройки</div>
				</div>
				<div class="advantages__block-3">
					<div class="bg__block-3"></div>
					<div class="advantages__block-text">Низкий порог входа</div>
				</div>
				<div class="advantages__block-4">
					<div class="bg__block-4"></div>
					<div class="advantages__block-text">Широкий охват</div>
				</div>
			</div>
			
			<div class="advantages__info">
				<div class="advantages__info-text">Ежедневно десятки миллионов украинцев посещают такие площадки как Facebook и Instagram для реализации самых разных задач: Развлечения, работы, обучения и саморазвития, покупок, общения и пр. Социальная сеть “запоминает” все интересы и поведение каждого пользователя онлайн, а также его демографические и географические данные, и группирует их в выборки в соответствии с запросами рекламодателя для показа конкретного объявления. Таким образом Вашу рекламу видит только целевая аудитория, подходящая по всем критериям и действительно заинтересованная в продукте или услуге.</div>
				<div class="advantages__info-text">Этот механизм ведения рекламной кампании за годы своего существования показал себя как очень эффективный при условии демонстрации “цепляющего” промоматериала, интересного оффера и правильных настроек. Последний пункт особенно важен. Рекламный кабинет Facebook и Instagram — Ads Manager — устроен достаточно сложно, и новичок может попросту не найти или пропустить раздел, в котором необходимо выполнить то или иное действие. Вместе с тем, множество различных метрик способны сбить с толку, а непонимание того, как они отражают качество процесса, — стать причиной слива бюджета. </div>
			</div>
			<div class="advantages__info-bot">Именно поэтому целесообразно заказать настройку таргетированной рекламы у опытных специалистов, которые умеют анализировать показатели и точно знают, как выжать максимум из объявления в социальных сетях и получить больше продаж или лидов при меньших затратах.</div>
		</div>
	</div>
	
</div>

<div class="container__advertising">
	<h2 class="container__advertising-title">Заказать таргетированную рекламу у профессионалов — значит обеспечить бизнесу:</h2>
	
	<div class="advertising__blocks">
	
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_1"></div>
			<div class="advertising__item-title">Узнаваемость бренда</div>
			<div class="advertising__item-info">становитесь той компанией, название которой первым приходит на ум при упоминании о товаре или услуге</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_2"></div>
			<div class="advertising__item-title">Трафик ﻿на сайт</div>
			<div class="advertising__item-info">улучшайте позицию сайта в поисковой системе и расширяйте клиентскую базу</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_3"></div>
			<div class="advertising__item-title">Целевые лиды</div>
			<div class="advertising__item-info">привлекайте заинтересованных пользователей в воронку продаж и закрывайте сделки</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_4"></div>
			<div class="advertising__item-title">Рост продаж</div>
			<div class="advertising__item-info">увеличивайте конверсию, получайте больше прибыли и масштабируйте свой бизнес</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_5"></div>
			<div class="advertising__item-title">Лояльность аудитории</div>
			<div class="advertising__item-info">вызывайте желание рассказывать о вашем бренде у клиентов и заручайтесь их поддержкой</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_6"></div>
			<div class="advertising__item-title">Фидбэк от клиентов</div>
			<div class="advertising__item-info">получайте обратную связь от аудитории о слабых и сильных сторонах вашего продукта и сервиса</div>
		</div>
	
	</div>
	
</div>


<div class="container__tariffs">

	<div class="container__tariffs-block">
		<h2 class="container__tariffs-title">Тарифы</h2>
		<div class="tariffs__table">
		
			<div class="tariffs__table-block column-top">
				<div class="tariffs__table-column">Что входит в пакет?</div>
				<div class="tariffs__table-column">Экспресс пакет</div>
				<div class="tariffs__table-column">Стандартный пакет</div>
				<div class="tariffs__table-column">Оптимальный пакет</div>
			</div>
			<div class="tariffs__table-block column-gray-1">
				<div class="tariffs__table-column">Маркетинговое исследование</div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_plus"></div>
			</div>
			<div class="tariffs__table-block column-white-1">
				<div class="tariffs__table-column">Разработка стратегии</div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_plus"></div>
			</div>
			<div class="tariffs__table-block column-gray-1">
				<div class="tariffs__table-column">Создание креатива</div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_plus"></div>
				<div class="tariffs__table-column bg_plus"></div>
			</div>
			<div class="tariffs__table-block column-white-2">
				<div class="tariffs__table-column">Настройка рекламного объявления для Facebook или Instagram</div>
				<div class="tariffs__table-column bg_plus"></div>
				<div class="tariffs__table-column bg_plus"></div>
				<div class="tariffs__table-column bg_plus"></div>
			</div>
			<div class="tariffs__table-block column-gray-2">
				<div class="tariffs__table-column">Настройка рекламного объявления для Facebook и Instagram</div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_plus"></div>
				<div class="tariffs__table-column bg_plus"></div>
			</div>
			<div class="tariffs__table-block column-white-1">
				<div class="tariffs__table-column">А/В-тестирование креатива и аудиторий</div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_plus"></div>
			</div>
			<div class="tariffs__table-block column-gray-1">
				<div class="tariffs__table-column">Установка Пикселя и настройка событий</div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_plus"></div>
				<div class="tariffs__table-column bg_plus"></div>
			</div>
			<div class="tariffs__table-block column-white-1">
				<div class="tariffs__table-column">Настройка ретаргетинга</div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_plus"></div>
				<div class="tariffs__table-column bg_plus"></div>
			</div>
			<div class="tariffs__table-block column-gray-1">
				<div class="tariffs__table-column">Настройка Lead Ads</div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_plus"></div>
				<div class="tariffs__table-column bg_plus"></div>
			</div>
			<div class="tariffs__table-block column-white-1">
				<div class="tariffs__table-column">Настройка аналитики</div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_minus"></div>
				<div class="tariffs__table-column bg_plus"></div>
			</div>
			<div class="tariffs__table-block column-gray-1">
				<div class="tariffs__table-column column_end">Оптимизация рекламной кампании</div>
				<div class="tariffs__table-column bg_plus"></div>
				<div class="tariffs__table-column bg_plus"></div>
				<div class="tariffs__table-column bg_plus"></div>
			</div>
			<div class="tariffs__table-block column-white-3">
				<div class="tariffs__table-column-none"></div>
				<div class="tariffs__table-column column_end">
					<div class="tariffs__table-column-price">9 000 грн</div>
					<div class="tariffs__table-column-order"  data-value="Страница реклама соцсети: Экспресс пакет">Заказать</div>
				</div>
				<div class="tariffs__table-column column_end">
					<div class="tariffs__table-column-price">18 000 грн</div>
					<div class="tariffs__table-column-order"  data-value="Страница реклама соцсети: Стандартный пакет">Заказать</div>
				</div>
				<div class="tariffs__table-column column_end">
					<div class="tariffs__table-column-price">29 000 грн</div>
					<div class="tariffs__table-column-order"  data-value="Страница реклама соцсети: Оптимальный пакет">Заказать</div>
				</div>
			</div>
		
		</div>
	</div>
</div>


<div class="container__efficiency">

	<div class="container__efficiency-block">
		<div class="efficiency__info">Эффективность рекламной кампании в социальных сетях растет прямо пропорционально времени, затраченному на повышение ее качества. Что это значит?
		Конечно, бывают случаи, когда можно получить продажи с объявления, созданного, как говорится, на коленке. Но стоит ли полагаться на удачу, запуская такую рекламу раз за разом, если можно пойти другим путем и прийти к гарантированно крутому результату?
		</div>
		<div class="efficiency__block">
		<div class="efficiency__block-text">Подготовка к запуску таргетированной рекламы должна начинаться с тщательного изучения рынка, разработки уникального торгового предложения и определения основного пласта целевой аудитории, которой оно будет интересно. Затем потенциальных покупателей рекомендуется разделить по каким-либо признакам на несколько групп и для каждой из них продумать соответствующую стратегию продвижения оффера. И уже завершающим этот этап шагом станет создание визуального и текстового наполнения рекламных объявлений, в идеале также разных для каждого сегмента выбранной ЦА.</div>
		<div class="efficiency__block-text">Далее — техническая часть запуска, т.е. настройка таргетинга 
	в социальных сетях и тестирование каждого отдельного объявления. Крайне важно выполнение этой задачи передать надежному специалисту, ведь какой бы выдающийся ни был креатив, неправильная настройка и отсутствие аналитики приведут к пустой трате бюджета и низкой конверсии. Хороший таргетолог с легкостью определит сильные и слабые стороны рекламы, оптимизирует и масштабирует кампанию для извлечения из нее максимальной выгоды для своего клиента.
			</div>	
		</div>

	</div>
</div>

<section class="working" aria-labelledby="working">
	
		<div class="working_head">
				<h2 class="working__txt">Как мы приходим к результату?</h2>
				<div class="working__blocks-txt">
					Благодаря этим нехитрым манипуляциям аккаунт станет по-настоящему привлекательным для посетителей, являющихся вашими потенциальными подписчиками и клиентами.
				</div>
		</div>
		<div class="working__blocks">
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-1"></div>
					<div class="working_bloc__top-txt">Изучаем нишу и конкурентные предложения</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-2"></div>
                    <div class="working_bloc__top-txt">Определяем и сегментируем целевую аудиторию</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-3"></div>
                    <div class="working_bloc__top-txt color-txt">Разрабатываем стратегию рекламной кампании</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-4"></div>
                    <div class="working_bloc__top-txt">Анализируем результаты и масштабируем РК</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-5"></div>
                    <div class="working_bloc__top-txt">Запускаем и тестируем РК</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-6"></div>
                    <div class="working_bloc__top-txt">Создаем креатив, настраиваем РК
			</div>
                </div>
            </div>
        </div>
</section>

<section class="cases" aria-labelledby="cases">
	
	<div class="cases-container">
	
		<div class="cases__text-block">
			<h2 class="cases__tittle">Как будет выглядеть реклама?﻿</h2>
			<div class="cases__info">Для повышения уровня доверия к информации есть возможность показать объявление вашим подписчикам и их друзьям.</div>
		</div>
		
		<div class="cases__blocks">
			<div id="cases-slider" class="cases__blocks-slider owl-carousel owl-theme">
				<div class="cases__blocks-slider-1">
					<div class="cases__blocks-slider-1 cases_slider-1"></div>
				</div>
				<div class="cases__blocks-slider-1">
					<div class="cases__blocks-slider-1 cases_slider-2"></div>
				</div>
				<div class="cases__blocks-slider-1">
					<div class="cases__blocks-slider-1 cases_slider-3"></div>
				</div>
				<div class="cases__blocks-slider-1">
					<div class="cases__blocks-slider-1 cases_slider-4"></div>
				</div>
					
			</div>
			<div class="cases__slider-oll">
				<div class="cases__slider-oll-number"><span>1</span> / 3</div>
			</div>
				
		</div>
		
		
		
	</div>	
	
</section>

<div class="question">


	<div class="question__block">
		<h2 class="question__block-title">F&Q</h2>
		
		<div class="question__block-content">
			
			<div class="question__block-item">
				<div class="question__item-title">Сколько времени занимает подготовка к запуску рекламной кампании?<div class="question__item-img"></div></div>
				<div class="question__item-info">Подготовка к запуску таргетированной рекламы занимает от 3-х дней. Всё зависит от маркетингового исследования, который включает в себя аудиторию, конкурентный анализ, сложность креативов и много другое. </div>
			</div>
			<div class="question__block-item">
				<div class="question__item-title">Почему стоит выбрать таргетированную рекламу?<div class="question__item-img"></div></div>
				<div class="question__item-info">Таргет позволяет получить трафик на проект и первые продажи, не имея раскрученной группы или сообщества в соцсетях. Если сравнивать его с раскруткой сайта, то таргетированная реклама по эффективности не уступает контекстным объявлениям.</div>
			</div>
			<div class="question__block-item">
				<div class="question__item-title">Зачем подключать аналитику?<div class="question__item-img"></div></div>
				<div class="question__item-info">ББлагодаря аналитике Вы сможете проанализировать поведение потенциальных клиентов. Это нужно, чтобы понимать какие клиенты к Вам приходят, как можно оптимизировать стоимость рекламы за клик. Также Вы будете знать, какие правки необходимо осуществить в рекламном аккаунте, чтобы увеличить количество конверсий.</div>
			</div>
			<div class="question__block-item">
				<div class="question__item-title">Что дает установка Пикселя?<div class="question__item-img"></div></div>
				<div class="question__item-info">Пиксель позволяет изучить действия пользователей на вашем сайте для дальнейшего использования в рекламных кампаниях через Facebook и Instagram. После установки кода на сайт начнется сбор информации о клиентах: возраст, пол, местонахождение, нажатия на ссылки, покупка товара.</div>
			</div>
			
		</div>
		
	</div>

</div>


<div class="ask__block">

	<div class="ask__block-content">
		<div class="ask__block-info">
			<div class="ask__block-title">Остались вопросы?</div>
			<div class="ask__block-text">Если у вас есть вопросы о формате или вы не знаете что выбрать, оставьте свой номер: мы позвоним, чтобы ответить на все ваши вопросы.</div>
		</div>
		<div class="ask__block-form">
			<form id="questions_form">
				<div id="banner_home_note"></div>
				<div id="banner_home_fields">
					<div class="ask__form ask_top">
						<input id="ask_name"  class="input" name="name" type="text" placeholder="ФИО" required>
					</div>
					
					<div class="ask__form ask__form-block ask_center">
						<div class="ask__form">
							<input id="ask_mob" class="input" name="telephon" type="number" placeholder="Телефон" required>
						</div>
						
						<div class="ask__form">
							<input id="ask_mail" class="input" name="email" type="email" placeholder="Электронная почта">
						</div>
					</div>
					
					<div class="ask__form-block">

						<div class="ask__form-check">
							<input id="ask_check" class="input" name="check" type="checkbox" checked="checked" required>
							<div>Я согласен с условиями обработки <a href="#">персональных данных</a></div>
						</div>
						
						<div class="ask__form-button">
							<input id="ask_but" class="submit" value="Отправить" type="submit" />
						</div>
					</div>
				</div>
				
			</form>
		</div>
	</div>

</div>




<?php
get_footer();