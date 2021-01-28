<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 * Template Name: website_promotion
 */
 
	
 
get_header();

	wp_enqueue_style( 'header-css', get_stylesheet_directory_uri().'/assets/css/header.css');
	wp_enqueue_style( 'promotion-css', get_stylesheet_directory_uri().'/assets/css/promotion.css');
	wp_enqueue_script( 'promotion-script', get_theme_file_uri( '/assets/js/promotion.js' ));

?>

<div class="container__top">
	<div class="container__banner">
		<div class="container__banner-block">
			<div class="banner__block-text">
				<h1 class="block__text-title">Продвижение сайта в топ-10 Google</h1>
				<div class="block__txt">Грамотная SEO-раскрутка сайта в интернете обеспечивает приход бесплатных клиентов из поиска и позволяет Вашему бизнесу перейти на новую ступень развития!</div>
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
							<input type="hidden" name="form_name" value="Keis: форма - Страница продвижение сайтов: Заявка на консультацию">
						</div>
					</form>
					
			</div>
		</div>
	</div>
</div>

<div class="container__advantages">
	<div class="container__advantages-bg">
		<div class="container__advantages-block">
			<h2 class="advantages__block-title">Заказать качественную раскрутку сайта у профессионалов - значит обеспечить бизнесу:</h2>
			<div class="advantages__block-description">
				<div class="advantages__block-1">
					<div class="bg__block-1"></div>
					<div class="advantages__block-text">Трафик на сайт</div>
				</div>
				<div class="advantages__block-2">
					<div class="bg__block-2"></div>
					<div class="advantages__block-text">Увеличение охвата потенциальных клиентов</div>
				</div>
				<div class="advantages__block-3">
					<div class="bg__block-3"></div>
					<div class="advantages__block-text">Удержание позиций в топе</div>
				</div>
				<div class="advantages__block-4">
					<div class="bg__block-4"></div>
					<div class="advantages__block-text">Увеличение конверсии</div>
				</div>
			</div>
			
			<div class="advantages__info">
				<div class="advantages__info-text">AI (искусственный интеллект) постоянно совершенствуется, и Google успешно внедряет его в свои алгоритмы, чтобы находить и показывать пользователю именно тот контент, который будет для него актуален и полезен. Команда KEIS, в свою очередь, следит за трендами в области SEO, нововведениями поисковой системы и не позволяет им негативно сказаться на ресурсе клиента. Задача наших специалистов — расширить воронку продаж, увеличить конверсию и привлечь для вас целевых клиентов из поисковой выдачи.</div>
				<div class="advantages__info-text">Раскрутка сайта в Киеве может занять несколько месяцев, но в дальнейшем хорошо оптимизированный ресурс не потребует больших материальных вложений. Ускорить процесс продвижения сайта мы предлагаем выверенной стратегией и системным подходом наших сотрудников к работе. Трата времени на изобретение новых методик в данном случае не оправдана. SEO-оптимизация ориентирована на долгосрочную перспективу и только при правильном порядке действий она приведет на ваш сайт органический трафик и, соответственно, новых клиентов.</div>
			</div>
			<div class="advantages__info-bot">Перед стартом раскрутки мы утвердим каждый шаг проектной группы и согласуем все планируемые затраты. Каждый месяц вы будете получать подробный отчет о проделанной работе и ее результатах: всё простым языком, так что не придется теряться в догадках, куда же уходят ваши деньги. К SEO-продвижению мы подходим индивидуально, учитывая все особенности бизнеса, и не применяем шаблонных решений. После того как специалисты KEIS запустят работу по оптимизации сайта для поисковой системы Google, вам останется только правильно управлять ресурсом.
</div>
		</div>
	</div>
	
</div>

<div class="container__advertising">
	<h2 class="container__advertising-title">Преимущества продвижения с KEIS:</h2>
	
	<div class="advertising__blocks">
	
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_1"></div>
			<div class="advertising__item-title">Команда профессионалов</div>
			<div class="advertising__item-info">состоит из SEO-специалистов, разработчиков, линкбилдеров, копирайтеров и контент-менеджеров</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_2"></div>
			<div class="advertising__item-title">Персональный SEO-менеджер</div>
			<div class="advertising__item-info">оперативно по существу отвечает на все вопросы в мессенджере, понятным языком объясняет каждый шаг</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_3"></div>
			<div class="advertising__item-title">Белые методы продвижения</div>
			<div class="advertising__item-info">мы не пытаемся обмануть систему Google, потому что знаем, как достичь поставленных целей, играя по правилам</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_4"></div>
			<div class="advertising__item-title">Топовые позиции в поисковой выдаче</div>
			<div class="advertising__item-info">мы гарантируем, что ваш сайт будет отображаться пользователям на первой странице результатов Google</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_5"></div>
			<div class="advertising__item-title">Ежемесячный отчёт</div>
			<div class="advertising__item-info">мы открыто и регулярно демонстрируем результаты проделанных работ, анализируем их и корректируем стратегию</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_6"></div>
			<div class="advertising__item-title">Создание качественного информационного контента</div>
			<div class="advertising__item-info">написание незаспамленных, грамотных и интересных текстов для привлечения потенциальных клиентов</div>
		</div>
	
	</div>
	
</div>

<div class="container__tariffs">

	<div class="container__tariffs-bg">

		<h2 class="container__tariffs-title">Тарифы</h2>
		
		<div class="tariffs__blocks">
			
			<div class="tariffs__item">
				
				<div class="tariffs__item-blocks">
					<div class="tariffs__item-block">
						<div class="tariffs__item-img-1 tariffs-img-1"></div>
						<div class="tariffs__item-title">Малого бизнесса</div>
					</div>
					
					<div class="tariffs__item-block">
						<div class="tariffs__item-info">Услуга B2C, B2B, корпоративные сайты</div>
					</div>
					
				</div>
				<div class="tariffs__item-blocks">
					
					<div class="tariffs__item-price">7 000</div>
					<div class="tariffs__item-buttom" data-value="Страница продвижение сайтов: Пакет Малого бизнесса">Заказать</div>
					
				</div>
				
			</div>
			
			<div class="tariffs__item">
				
				<div class="tariffs__item-blocks">
					<div class="tariffs__item-block">
						<div class="tariffs__item-img-1 tariffs-img-2"></div>
						<div class="tariffs__item-title">Среднего бизнесса</div>
					</div>
					
					<div class="tariffs__item-block">
						<div class="tariffs__item-info">Площадки e-commerce</div>
					</div>
					
				</div>
				<div class="tariffs__item-blocks">
					
					<div class="tariffs__item-price">12 000</div>
					<div class="tariffs__item-buttom" data-value="Страница продвижение сайтов: Пакет Среднего бизнесса">Заказать</div>
					
				</div>
				
			</div>
			
			<div class="tariffs__item">
				
				<div class="tariffs__item-blocks">
					<div class="tariffs__item-block">
						<div class="tariffs__item-img-1 tariffs-img-3"></div>
						<div class="tariffs__item-title">Крупного бизнесса</div>
					</div>
					
					<div class="tariffs__item-block">
						<div class="tariffs__item-info">СМИ, информационные порталы</div>
					</div>
					
				</div>
				<div class="tariffs__item-blocks">
					
					<div class="tariffs__item-price">24 000</div>
					<div class="tariffs__item-buttom" data-value="Страница продвижение сайтов: Пакет Крупного бизнесса">Заказать</div>
					
				</div>
				
			</div>
			
			<div class="tariffs__item">
				
				<div class="tariffs__item-blocks">
					<div class="tariffs__item-block">
						<div class="tariffs__item-img-1 tariffs-img-4"></div>
						<div class="tariffs__item-title">Зарубежные проекты</div>
					</div>
					
					<div class="tariffs__item-block">
						<div class="tariffs__item-info">Стоимость зависит от региона, тематики и целей бизнесса</div>
					</div>
					
				</div>
				<div class="tariffs__item-blocks">
					
					<div class="tariffs__item-price">30 000</div>
					<div class="tariffs__item-buttom" data-value="Страница продвижение сайтов: Зарубежные проекты">Заказать</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</div>


<div class="container__optimization">

	<div class="container__optimization-bg">

		<h2 class="container__optimization-title">Как мы оптимизируем сайт?</h2>
		<div class="container__optimization-info">В первую очередь, специалист исправляет ошибки внутренней оптимизации сайта и приступает к работе над семантическим ядром. Выбор ключевых слов, с помощью которых ресурс будет продвигаться в поиске, крайне важен. Подобрав только высокочастотные слова и словосочетания, нельзя быть уверенным, что он взлетит в топ. Составление семантического ядра должно осуществляться индивидуально для каждого сайта.</div>
		<div class="container__optimization-blocks">
		
			<div class="optimization__block-title">
				При выборе частотности и конкурентности ключевых слов необходимо учитывать множество факторов:
			</div>
			
			<div class="optimization__block-items">
			
				<div class="optimization__block-item">
					Возраст и историю веб-сайта (раскручивали его ранее или нет, если да, то какой бюджет в него вкладывался);
				</div>
				<div class="optimization__block-item">
					Текущий бюджет на продвижение (от этого зависит скорость продвижения) и др.
				</div>
				<div class="optimization__block-item">
					Состояние рынка (переживает ли он спад или растёт);
				</div>
				
			</div>
			
			<div class="optimization__block-description">
				Наши копирайтеры пишут новые уникальные SEO-тексты без воды и спама ключевыми словами, легко читаемые и интересные для пользователей. Мы не считаем правильным наполнять ресурс статьями, оптимизированными только для роботов, так как алгоритмы поисковых движков давно изменились, и теперь Google-bot предпочитает просмотреть количество посетителей и время их нахождения на сайте вместо полного сканирования текстов. А что заставит человека дольше задержаться на вашей странице? Правильно! Продуманные заголовки и хорошо написанные структурированные тексты с умеренным количеством ключевых слов.
				Кроме того, проводится обязательный технический аудит, на основе которого составляется документ с необходимыми правками для SEO-специалистов и разработчиков.
			</div>
			<div class="optimization__block-text">
				Сначала мы работаем на сайт, а затем он работает на Вас!
			</div>
		
		</div>

	</div>

</div>







<section class="cases" aria-labelledby="cases">
	
		<div class="cases__tittle-block">
			<h2 class="cases__tittle">Поисковая оптимизация сайтов наших клиентов — каковы успехи?</h2>
		</div>
	
        <div class="cases__blocks">
            <div id="one-time-price-car" class="cases__blocks-slider owl-carousel owl-theme">
                <div class="cases__blocks-slider-1">
					
					<div class="cases__slider-param">
						<div class="cases__slider-param-top">
							<div class="slider__param-top-title">Время продвижения:</div>
							<div class="slider__param-top-num1">12</div>
							<div class="slider__param-top-title">Рост посещаемости сайта:</div>
							<div class="slider__param-top-num2">75</div>
							<div class="slider__param-top-number">Количество новых пользователей:</div>
							<div class="slider__param-top-img">
								<svg width="234" height="234" viewBox="0 0 234 234" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.03" d="M117 49.8V117L161.8 139.4M229 117C229 178.856 178.856 229 117 229C55.1441 229 5 178.856 5 117C5 55.1441 55.1441 5 117 5C178.856 5 229 55.1441 229 117Z" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>							
						</div>
						<div class="cases__slider-param-bot">
							<div class="slider__param-bot-before">
								<div class="slider__param-bot-seo">До SEO</div>
								<div class="slider__param-bot-num">2474</div>
							</div>
							<div class="slider__param-bot-after">
								<div class="slider__param-bot-seo">После SEO: </div>
								<div class="slider__param-bot-num">4170</div>
							</div>						
						</div>
					</div>
					<div class="cases__slider-bg">
						<div class="cases__slider-bg-img slider-img-1"></div>
					</div>
					
				</div>
				<div class="cases__blocks-slider-1">
					
					<div class="cases__slider-param">
						<div class="cases__slider-param-top">
							<div class="slider__param-top-title">Время продвижения:</div>
							<div class="slider__param-top-num1">24</div>
							<div class="slider__param-top-title">Рост посещаемости сайта:</div>
							<div class="slider__param-top-num2">270</div>
							<div class="slider__param-top-number">Количество новых пользователей:</div>
							<div class="slider__param-top-img">
								<svg width="234" height="234" viewBox="0 0 234 234" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.03" d="M117 49.8V117L161.8 139.4M229 117C229 178.856 178.856 229 117 229C55.1441 229 5 178.856 5 117C5 55.1441 55.1441 5 117 5C178.856 5 229 55.1441 229 117Z" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>							
						</div>
						<div class="cases__slider-param-bot">
							<div class="slider__param-bot-before">
								<div class="slider__param-bot-seo">До SEO</div>
								<div class="slider__param-bot-num">26300</div>
							</div>
							<div class="slider__param-bot-after">
								<div class="slider__param-bot-seo">После SEO: </div>
								<div class="slider__param-bot-num">64200</div>
							</div>						
						</div>
					</div>
					<div class="cases__slider-bg">
						<div class="cases__slider-bg-img slider-img-2"></div>
					</div>
					
				</div>
				<div class="cases__blocks-slider-1">
					
					<div class="cases__slider-param">
						<div class="cases__slider-param-top">
							<div class="slider__param-top-title">Время продвижения:</div>
							<div class="slider__param-top-num1">5</div>
							<div class="slider__param-top-title">Рост посещаемости сайта:</div>
							<div class="slider__param-top-num2">173</div>
							<div class="slider__param-top-number">Количество новых пользователей:</div>
							<div class="slider__param-top-img">
								<svg width="234" height="234" viewBox="0 0 234 234" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.03" d="M117 49.8V117L161.8 139.4M229 117C229 178.856 178.856 229 117 229C55.1441 229 5 178.856 5 117C5 55.1441 55.1441 5 117 5C178.856 5 229 55.1441 229 117Z" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>							
						</div>
						<div class="cases__slider-param-bot">
							<div class="slider__param-bot-before">
								<div class="slider__param-bot-seo">До SEO</div>
								<div class="slider__param-bot-num">342</div>
							</div>
							<div class="slider__param-bot-after">
								<div class="slider__param-bot-seo">После SEO: </div>
								<div class="slider__param-bot-num">950</div>
							</div>						
						</div>
					</div>
					<div class="cases__slider-bg">
						<div class="cases__slider-bg-img slider-img-3"></div>
					</div>
					
				</div>
				<div class="cases__blocks-slider-1">
					
					<div class="cases__slider-param">
						<div class="cases__slider-param-top">
							<div class="slider__param-top-title">Время продвижения:</div>
							<div class="slider__param-top-num1">21</div>
							<div class="slider__param-top-title">Рост посещаемости сайта:</div>
							<div class="slider__param-top-num2">450</div>
							<div class="slider__param-top-number">Количество новых пользователей:</div>
							<div class="slider__param-top-img">
								<svg width="234" height="234" viewBox="0 0 234 234" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.03" d="M117 49.8V117L161.8 139.4M229 117C229 178.856 178.856 229 117 229C55.1441 229 5 178.856 5 117C5 55.1441 55.1441 5 117 5C178.856 5 229 55.1441 229 117Z" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>							
						</div>
						<div class="cases__slider-param-bot">
							<div class="slider__param-bot-before">
								<div class="slider__param-bot-seo">До SEO</div>
								<div class="slider__param-bot-num">98</div>
							</div>
							<div class="slider__param-bot-after">
								<div class="slider__param-bot-seo">После SEO: </div>
								<div class="slider__param-bot-num">570</div>
							</div>						
						</div>
					</div>
					<div class="cases__slider-bg">
						<div class="cases__slider-bg-img slider-img-4"></div>
					</div>
					
				</div>
				<div class="cases__blocks-slider-1">
					
					<div class="cases__slider-param">
						<div class="cases__slider-param-top">
							<div class="slider__param-top-title">Время продвижения:</div>
							<div class="slider__param-top-num1">17</div>
							<div class="slider__param-top-title">Рост посещаемости сайта:</div>
							<div class="slider__param-top-num2">95</div>
							<div class="slider__param-top-number">Количество новых пользователей:</div>
							<div class="slider__param-top-img">
								<svg width="234" height="234" viewBox="0 0 234 234" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.03" d="M117 49.8V117L161.8 139.4M229 117C229 178.856 178.856 229 117 229C55.1441 229 5 178.856 5 117C5 55.1441 55.1441 5 117 5C178.856 5 229 55.1441 229 117Z" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>							
						</div>
						<div class="cases__slider-param-bot">
							<div class="slider__param-bot-before">
								<div class="slider__param-bot-seo">До SEO</div>
								<div class="slider__param-bot-num">4160</div>
							</div>
							<div class="slider__param-bot-after">
								<div class="slider__param-bot-seo">После SEO: </div>
								<div class="slider__param-bot-num">8120</div>
							</div>						
						</div>
					</div>
					<div class="cases__slider-bg">
						<div class="cases__slider-bg-img slider-img-5"></div>
					</div>
					
				</div>
                
                
				
            </div>
			
			<div class="cases__slider-oll">
				<div class="cases__slider-oll-number"><span>1</span> / 9</div>
				<div class="cases__slider-oll-text">Все кейсы</div>
			</div>
			
        </div>
    </section>



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
					<div class="working_bloc__top-txt">Анализируем конкурентов и определяем ЦА</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-2"></div>
                    <div class="working_bloc__top-txt">Разрабатываем стратегию продвижения</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-3"></div>
                    <div class="working_bloc__top-txt color-txt">Выполняем внутреннюю оптимизацию</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-4"></div>
                    <div class="working_bloc__top-txt">Осуществляем внешнюю оптимизацию</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-5"></div>
                    <div class="working_bloc__top-txt">Устраняем технические ошибки</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-6"></div>
                    <div class="working_bloc__top-txt">Корректируем стратегию, если необходимо</div>
                </div>
            </div>
        </div>
</section>

<div class="question">


	<div class="question__block">
		<h2 class="question__block-title">F&Q</h2>
		
		<div class="question__block-content">
			
			<div class="question__block-item">
				<div class="question__item-title">Сколько времени занимает раскрутка сайта?<div class="question__item-img"></div></div>
				<div class="question__item-info">Благодаря аналитике Вы сможете проанализировать поведение потенциальных клиентов. Это нужно, чтобы понимать какие клиенты к Вам приходят, как можно оптимизировать стоимость рекламы за клик. Также Вы будете знать, какие правки необходимо осуществить в рекламном аккаунте, чтобы увеличить количество конверсий.</div>
			</div>
			<div class="question__block-item">
				<div class="question__item-title">Когда мой сайт выйдет в топ-3?<div class="question__item-img"></div></div>
				<div class="question__item-info">Уже через 2 месяца Вы увидите первые результаты SEO-продвижения. Мы знаем, что сайт попадёт в ТОП-10, а вот попадёт ли он в ТОП-3 уже зависит от множества других факторов, например, алгоритмов Google, Вашего бюджета либо истории сайта. </div>
			</div>
			<div class="question__block-item">
				<div class="question__item-title">Существуют ли гарантии в SЕО?<div class="question__item-img"></div></div>
				<div class="question__item-info">Мы даём гарантии на:<br/>
					Хорошее качество работы<br/>
					Долгосрочность результатов<br/>
					Только белые методы раскрутки 
				</div>
			</div>
			<div class="question__block-item">
				<div class="question__item-title">Зачем подключать аналитику?<div class="question__item-img"></div></div>
				<div class="question__item-info">Без аналитики проведение следующих работ практически невозможно:<br/>
				Анализ поведенческих факторов сайта<br/>
				Анализ конкурентов (ссылки, контент, оптимизация, структура, трафик и др.)<br/>
				Анализ выдачи поисковой системы<br/>
				Анализ индекса продвигаемого сайта<br/>
				Постраничный анализ (при on-page оптимизации)</div>
			</div>
			<div class="question__block-item">
				<div class="question__item-title">Какой минимальный бюджет для SEO-продвижения?<div class="question__item-img"></div></div>
				<div class="question__item-info">Минимальный - 7000 грн. Но стоит понимать, что стоимость зависит от целей, габаритов сайта, ниши и конкуренции, регионов, состояния сайта.</div>
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