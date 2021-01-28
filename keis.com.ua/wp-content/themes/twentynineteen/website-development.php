<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 * Template Name: website_development
 */
 
	
 
get_header();

	wp_enqueue_style( 'header-css', get_stylesheet_directory_uri().'/assets/css/header.css');
	wp_enqueue_style( 'development-css', get_stylesheet_directory_uri().'/assets/css/development.css');
	wp_enqueue_script( 'development-script', get_theme_file_uri( '/assets/js/development.js' ));

?>


<div class="container__top">
	<div class="container__banner">
		<div class="container__banner-block">
			<div class="banner__block-text">
				<h1 class="block__text-title">Создание сайта для Вашего бизнеса</h1>
				<div class="block__txt">Для бизнеса устаревший сайт или и вовсе его отсутствие в 2021 году - главная причина недополученной прибыли и недоверия клиентов. Мы готовы исправить ситуацию оперативно и качественно!</div>
				<div class="banner__block-text-bg"></div>
			</div>
			<div class="banner__block-form">
				<div class="banner__block-form-text">
					<div class="banner__block-form-title">Думаете воплотить в жизнь свой проект?</div>
					<div class="banner__block-form-info">Напишите нам в эту форму, и мы обсудим его с Вами, продумаем, спроектируем и создадим!</div>
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
							<div class="form-group input_style">
							<input id="mail_el" class="input" name="email" type="email" placeholder="E-mail">
							</div>
							<div class="form-group">
								<input id="banner_submit" class="submit banner_form_but" value="Перезвоните мне" type="submit" />
							</div>
							<input type="hidden" name="form_name" value="Keis: форма - Разработка сайтов: Заявка на консультацию">
						</div>
					</form>
					
			</div>
		</div>
	</div>
</div>


<div class="container__advantages">
	<div class="container__advantages-bg">
		<div class="container__advantages-block">
			<div class="advantages__info">
				<div class="advantages__info-text">Создание сайта для компании – это всегда резонное с точки зрения бизнеса решение. Сейчас корпоративный веб-ресурс является не только презентационным элементом, формирующим имидж бренда, но и одним из главных инструментов интернет-маркетинга, связующим все каналы распространения рекламы звеном.
С помощью сайта компания заявляет о себе в информационном пространстве, на рынке товаров или услуг и становится ближе к своей аудитории. Поэтому к его разработке следует отнестись серьезно как стартапу или малому бизнесу, так и игрокам более крупного сегмента. Для некоммерческих организаций наличие собственного интернет-ресурса также играет значимую роль в развитии.
				</div>
				<div class="advantages__info-text">Компания KEIS имеет большой опыт в разработке сайтов разного назначения: от интернет-магазинов до зарубежных интерактивных веб-порталов. Мы готовы к решению технически сложных задач, к работе над нестандартными проектами.
Перед началом сотрудничества команда тщательно изучает продукт, нишу, потребности ЦА и конкурентные ресурсы. На основании полученных данных мы разрабатываем структуру сайта, прототипы страниц, уникальный фирменный стиль, который ляжет в основу дизайна, и выбираем оптимальную CMS. Создаем макеты веб-страниц сразу для всех вариантов девайсов с удобным для пользователей интерфейсом. Производим верстку и программирование, обеспечивая ресурсу кроссбраузерность.
				</div>
			</div>
			<div class="advantages__info-bot">Завершающим этапом проводится тестирование и отладка, наполнение сайта контентом и его запуск. 
По окончанию всех работ KEIS оказывает гарантийную техподдержку разработанного ресурса.
			</div>
		</div>
	</div>
	
</div>

<div class="container__advertising">
	<h2 class="container__advertising-title">Заказать создание сайта для компании - значит обеспечить своему бизнесу:</h2>
	
	<div class="advertising__blocks">
	
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_1"></div>
			<div class="advertising__item-title">Выход на новые рынки</div>
			<div class="advertising__item-info">Расширяйте границы и клиентскую базу вместе с ними, получайте больше прибыли, привлекая аудиторию из разных городов и стран</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_2"></div>
			<div class="advertising__item-title">Видимость в поиске по ключевым словам</div>
			<div class="advertising__item-info">Повышайте эффективность продвижения в интернете, используя новые маркетинговые каналы и показывая рекламу горячей аудитории</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_3"></div>
			<div class="advertising__item-title">Локализацию информации о компании</div>
			<div class="advertising__item-info">Рассказывайте потенциальным и действующим клиентам о своей деятельности, товарах, услугах и лучших предложениях на своём ресурсе</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_4"></div>
			<div class="advertising__item-title">Надежность в глазах клиентов и партнеров</div>
			<div class="advertising__item-info">Демонстрируйте намерение развивать и масштабировать свой бизнес, выстраивая фундаментальную систему взаимодействия с пользователями</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_5"></div>
			<div class="advertising__item-title">Автоматизацию процессов</div>
			<div class="advertising__item-info">Создавайте воронки продаж, ускоряйте сбор и обработку лидов и заказов, упорядочивайте документооборот и оптимизируйте клиентский сервис</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_6"></div>
			<div class="advertising__item-title">Индивидуальность и узнаваемость бренда</div>
			<div class="advertising__item-info">Подчеркивайте свою уникальность с помощью дизайна ресурса, его функционала и наполнения, выгодно выделяясь на фоне конкурентов</div>
		</div>
	
	</div>
	
</div>


<section class="working" aria-labelledby="working">
	
		<div class="working_head">
				<h2 class="working__txt">Преимущества разработки сайта с KEIS</h2>
		</div>
		<div class="working__blocks">
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-1"></div>
					<div class="working_bloc__top-txt">Команда, которая полностью погружается в проект</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-2"></div>
                    <div class="working_bloc__top-txt">Прозрачное ценообразование и работа по договору</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-3"></div>
                    <div class="working_bloc__top-txt color-txt">Уникальный дизайн, разработанный в фирменном стиле</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-4"></div>
                    <div class="working_bloc__top-txt">Персональный менеджер, быстро реагирующий на все запросы</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-5"></div>
                    <div class="working_bloc__top-txt">Техническая поддержка ресурса после его релиза</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-6"></div>
                    <div class="working_bloc__top-txt">Быстрый результат не в ущерб качеству</div>
                </div>
            </div>
        </div>
</section>


<div class="container__tariffs">

	<div class="container__tariffs-bg">

		<h2 class="container__tariffs-title">Прайс-лист на услуги по созданию сайта от «KEIS»</h2>
		
		<div class="tariffs__blocks">
			
			<div class="tariffs__item">
				
				<div class="tariffs__item-blocks">
					<div class="tariffs__item-block">
						<div class="tariffs__item-img-1 tariffs-img-1"></div>
						<div class="tariffs__item-title">Сайт-визитка</div>
					</div>
					
					<div class="tariffs__item-block">
						<div class="tariffs__item-info">Кол-во страниц: до 10; срок создания: 5-10 дней</div>
					</div>
					
				</div>
				<div class="tariffs__item-blocks">
					
					<div class="tariffs__item-price">4 000</div>
					<div class="tariffs__item-buttom" data-value="Страница Разработка сайтов: Сайт-визитка">Заказать</div>
					
				</div>
				
			</div>
			
			<div class="tariffs__item">
				
				<div class="tariffs__item-blocks">
					<div class="tariffs__item-block">
						<div class="tariffs__item-img-1 tariffs-img-2"></div>
						<div class="tariffs__item-title">Landing page для рекламы / корпоративный</div>
					</div>
					
					<div class="tariffs__item-block">
						<div class="tariffs__item-info">Кол-во страниц: неогр.; срок создания: 10-30 дней;</div>
					</div>
					
				</div>
				<div class="tariffs__item-blocks">
					
					<div class="tariffs__item-price">7 000</div>
					<div class="tariffs__item-buttom" data-value="Страница Разработка сайтов: Landing page для рекламы">Заказать</div>
					
				</div>
				
			</div>
			
			<div class="tariffs__item">
				
				<div class="tariffs__item-blocks">
					<div class="tariffs__item-block">
						<div class="tariffs__item-img-1 tariffs-img-3"></div>
						<div class="tariffs__item-title">Сайт корпоративный на премиум-шаблоне</div>
					</div>
					
					<div class="tariffs__item-block">
						<div class="tariffs__item-info">Кол-во страниц: неогр.; срок создания: 10-30 дней;</div>
					</div>
					
				</div>
				<div class="tariffs__item-blocks">
					
					<div class="tariffs__item-price">18 000</div>
					<div class="tariffs__item-buttom" data-value="Страница Разработка сайтов: Сайт корпоративный на премиум-шаблоне">Заказать</div>
					
				</div>
				
			</div>
			
			<div class="tariffs__item">
				
				<div class="tariffs__item-blocks">
					<div class="tariffs__item-block">
						<div class="tariffs__item-img-1 tariffs-img-4"></div>
						<div class="tariffs__item-title">Сайт корпоративный с уникальным дизайном</div>
					</div>
					
					<div class="tariffs__item-block">
						<div class="tariffs__item-info">Кол-во страниц: неогр.; срок создания: 10-30 дней;</div>
					</div>
					
				</div>
				<div class="tariffs__item-blocks">
					
					<div class="tariffs__item-price">40 000</div>
					<div class="tariffs__item-buttom" data-value="Страница Разработка сайтов: Сайт корпоративный с уникальным дизайном">Заказать</div>
					
				</div>
				
			</div>
			
			<div class="tariffs__item">
				
				<div class="tariffs__item-blocks">
					<div class="tariffs__item-block">
						<div class="tariffs__item-img-1 tariffs-img-5"></div>
						<div class="tariffs__item-title">Интернет-магазин</div>
					</div>
					
					<div class="tariffs__item-block">
						<div class="tariffs__item-info">Кол-во страниц: неогр.; срок создания: 10-30 дней;</div>
					</div>
					
				</div>
				<div class="tariffs__item-blocks">
					
					<div class="tariffs__item-price">25 000</div>
					<div class="tariffs__item-buttom" data-value="Страница Разработка сайтов: Интернет-магазин">Заказать</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</div>


<div class="container__call">

	<div class="container__call-bg">

		<h2 class="container__call-title">Думаете воплотить в жизнь свой проект?</h2>
		<div class="container__call-info">
			Оставьте свои контакты, и мы обсудим его с Вами, продумаем, спроектируем и создадим!
		</div>
		<div class="container__call-form">
			
			<form id="call_form">
						<div id="call_note"></div>
						<div id="call_fields"  class="call-fields">
						
							<div class="call-dev">
								<div class="form-group input_style call-input">
								<input id="name_el"  class="input" name="name" type="text" placeholder="Имя" required>
								</div>
								<div class="form-group input_style call-input">
								<input id="telephon_el" class="input" name="telephon" type="number" placeholder="Телефон" required>
								</div>
								<div class="form-group input_style call-input">
								<input id="mail_el" class="input" name="email" type="email" placeholder="E-mail">
								</div>
							</div>
							
							<div class="form-group input_style call-input call-textarea">
							<textarea id="call_comment" class="input" name="message" cols="40" rows="1" placeholder="Пару слов о будущем проекте" spellcheck="false" data-gramm="false"></textarea>
							</div>
							
							<div class="form-group call-but">
								<input id="banner_submit" class="submit banner_form_but" value="Отправить" type="submit" />
							</div>
							<input type="hidden" name="form_name" value="Keis: форма - Разработка сайтов: Заявка на консультацию">
						</div>
			</form>
			
		</div>


	</div>

</div>

<div class="container__optimization">

	<div class="container__optimization-bg">

		<div class="container__optimization-blocks">
		
			<div class="optimization__block-top">
			
			
				<div class="optimization__block-info">
					Цена современного сайта не может быть фиксированной и напрямую зависит от количества времени, затраченного на его разработку. Команда KEIS всегда предлагает своим клиентам лучшие для их бизнеса решения в рамках запланированного бюджета. 
				</div>
				<div class="optimization__top-img"></div>
				<div class="optimization__block-description">На стоимость разработки сайта влияет масштаб проекта, наличие прототипирования, желаемые дизайн, функциональность, интеграции с внешними сервисами, уникальность и качество контента и пр. Чем эффектнее будет пользовательский интерфейс, чем продуманнее юзабилити, чем полезнее и интереснее наполнение страниц, тем сложнее и дольше будет проект в исполнении.
				</div>
			</div>
			
			<div class="optimization__block-description">
				Перед началом создания сайта мы тщательно прорабатываем все визуальные детали и вопросы реализации проекта, составляем смету, утверждаем объем работ, формулируем техническое задание и подписываем с клиентом договор, в котором указаны обязательства сторон, сроки выполнения задачи, стоимость услуг, гарантии.
				После сдачи готового сайта компания KEIS может продолжить сотрудничество с клиентом для технической поддержки веб-ресурса, SEO-продвижения и запуска контекстной и других видов рекламы.
			</div>
			<div class="optimization__block-text">
				Перед тем, как заказать разработку сайта в Киеве, нужно понимать, что вложение финансовых средств в интернет-маркетинг в 2020 году полностью оправдано и способствует развитию и масштабированию бизнеса в целом. Правильно передать эту задачу профессионалам, которые с помощью системного подхода и пристального внимания к рутинным процессам помогут достичь желаемого результата в краткие сроки.
			</div>
		
		</div>

	</div>

</div>

<div class="container__process">

	<div class="container__process-bg">
	
		<h2 class="process__tittle">Наш процесс разработки</h2>
		
		<div class="process__blocks">
			
			<div class="process__block">
				<div class="process-block-img img-1"></div>
				<div class="process-block-info">Договоренности</div>
			</div>
			<div class="process__block">
				<div class="process-block-img img-2"></div>
				<div class="process-block-info">Аудит</div>
			</div>
			<div class="process__block">
				<div class="process-block-img img-3"></div>
				<div class="process-block-info">Подготовка прототипа</div>
			</div>
			<div class="process__block">
				<div class="process-block-img img-4"></div>
				<div class="process-block-info">Тестирование</div>
			</div>
			<div class="process__block">
				<div class="process-block-img img-5"></div>
				<div class="process-block-info">Верстка и программирование</div>
			</div>
			<div class="process__block">
				<div class="process-block-img img-6"></div>
				<div class="process-block-info">Разработка дизайна</div>
			</div>
			
		</div>
		
		
	</div>

</div>




<section class="cases" aria-labelledby="cases">
	
	<div class="cases-container">
	
		<div class="cases__text-block">
			<h2 class="cases__tittle">Портфолио﻿</h2>
		</div>
		
		<div class="cases__blocks">
			<div id="cases-slider" class="cases__blocks-slider owl-carousel owl-theme">
				<div class="cases__blocks-slider-1">
					<div class="cases__blocks-slider-1 cases_slider-1"></div>
				</div>
				<div class="cases__blocks-slider-1">
					<div class="cases__blocks-slider-1 cases_slider-2"></div>
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
				<div class="question__item-title">Сколько стоит создание сайта/интернет-магазина?<div class="question__item-img"></div></div>
				<div class="question__item-info">Стоимость интернет магазина зависит от структуры категорий, количества товаров, SEO требований и исполнителя. Если после запуска планируется продвижение в поисковых системах, тогда цена выше. </div>
			</div>
			<div class="question__block-item">
				<div class="question__item-title">Можно ли сделать только дизайн сайта?<div class="question__item-img"></div></div>
				<div class="question__item-info">Бывают случаи, когда клиент берет на себя всю техническую часть разработки, а дизайн выполняет подрядчик. Важно: когда принимаете работу дизайнера, обязательно нужно проконсультироваться с экспертами, на сколько данный дизайн можно выполнить.</div>
			</div>
			<div class="question__block-item">
				<div class="question__item-title">За какой срок выполняется создание сайта?<div class="question__item-img"></div></div>
				<div class="question__item-info">Скорость нашей работы Вас приятно удивит. Разработка сайта-визитки длится 1-2 недели, корпоративного ресурса - 1 месяц, интернет-магазина - до 2-х месяцев, включая все необходимые правки. </div>
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