<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 * Template Name: template_home
 */

	get_header();
	
	wp_enqueue_style( 'home-css', get_stylesheet_directory_uri().'/assets/css/home.css');
	wp_enqueue_script( 'home-script', get_theme_file_uri( '/assets/js/home.js' ));

?>

    <section class="advantages" aria-labelledby="advantages">
	
        <div class="advantages__img">
		<div class="advantages__img-txt">
			<h1 class="advantages__img-txt-1">Нужно увеличить</br>продажи в интернете ?</h1>
			
			<div class="advantages__img-bot">
				<div class="advantages__img-txt-2"><span>Вы получите самые эффективные решения для Вашего бизнеса.</span></div>
				<div class="advantages__img-txt-3"><span>Мы работаем с 2011 года и знаем, как сделать вложения в интернет прибыльными!</span></div>
			</div>
	
		</div>
        </div>
    </section>
    <section class="services" aria-labelledby="services">
	<div class="advantages__quantity">
            <div class="advantages__quantity-1">
                <div class="quantity-1-block">
					<div class="quantity-text-block">
						<div class="quantity-text-1">150</div>
						<div class="quantity-text-2">рекламных компаний</div>
					</div>
					<div class="quantity-text-3">настроили более</div>
                </div>
            </div>
            <div class="advantages__quantity-2">
                <div class="quantity-2-block">
					<div class="quantity-text-block">
						<div class="quantity-text-1">120</div>
						<div class="quantity-text-2">успешных сайтов</div>
					</div>
                    <div class="quantity-text-3">создали не менее</div>
                </div>
            </div>
            <div class="advantages__quantity-3">
                <div class="quantity-3-block">
					<div class="quantity-text-block">
						<div class="quantity-text-1">42000</div>
						<div class="quantity-text-2">ключевыx запросов</div>
					</div>
                    <div class="quantity-text-3">продвинули</div>
                </div>
            </div>
        </div>
        <h2 class="services__txt" id="KeisTx">Кейс — это полный комплекс</br> услуг по разработке и маркетингу:</h2>
        <div class="services__blocks">
            <a href="website-promotion/" class="services__blocks-bloc">
                <div class="bloc__top">
					<div class="bloc__top-txt">Продвижение в ТОП 10</div>
                    <div class="bloc__top-img img-1"></div>
                </div>
            </a>
            <a href="contextual-advertising/" class="services__blocks-bloc">
                <div class="bloc__top">
                    <div class="bloc__top-txt">Контекстная реклама</div>
					<div class="bloc__top-img img-2"></div>
                </div>
            </a>
            <a href="website-development/" class="services__blocks-bloc">
                <div class="bloc__top">
                    <div class="bloc__top-txt color-txt">Разработка сайтов</div>
					<div class="bloc__top-img img-3"></div>
                </div>
            </a>
            <a href="targeted-advertising/" class="services__blocks-bloc">
                <div class="bloc__top">
                    <div class="bloc__top-txt">Социальные сети</div>
					<div class="bloc__top-img img-4"></div>
                </div>
            </a>
            <a href="#" class="services__blocks-bloc">
                <div class="bloc__top">
                    <div class="bloc__top-txt">Дизайн</div>
					<div class="bloc__top-img img-5"></div>
                </div>
            </a>
            <a href="#" class="services__blocks-bloc">
                <div class="bloc__top">
                    <div class="bloc__top-txt">Копирайтинг и контент</div>
					<div class="bloc__top-img img-6"></div>
                </div>
            </a>
            <a href="#" class="services__blocks-bloc">
                <div class="bloc__top">
                    <div class="bloc__top-txt color-txt">PR и SERM</div>
					<div class="bloc__top-img img-7"></div>
                </div>
            </a>
            <a href="#" class="services__blocks-bloc">
                <div class="bloc__top">
                    <div class="bloc__top-txt">Видео - маркетинг</div>
					<div class="bloc__top-img img-8"></div>
                </div>
            </a>
            <a href="#" class="services__blocks-bloc">
                <div class="bloc__top">
                    <div class="bloc__top-txt">Аудит</div>
					<div class="bloc__top-img img-9"></div>
                </div>
            </a>
        </div>
    </section>
	
	<section class="promotion" aria-labelledby="promotion">
	
        <div class="promotion_head">
			<h2 class="promotion__txt" id="promotion_txt">Преимущества<br>продвижения сайта у нас</h2>
			<div class="promotion__blocks-txt">
				Алгоритмы ранжирования в поисковых системах постоянно меняются. Мы умеем их расшифровывать, знаем надежные
				методы продвижения коммерческих сайтов и всегда оправдываем ожидания наших клиентов.
			</div>
		</div>
		
		
        <div class="promotion__blocks">
            <div class="promotion__blocks-bloc">
                <div class="promotion__blocks-1">
                    <div class="promotion__blocks-bloc-top">
                        <div class="promotion__blocks-bloc-text">Комплексный подход к решению маркетинговых задач</div>
                    </div>
                    <div class="promotion__blocks-bloc-txt">Мы оказываем поддержку бизнеса в интернете во всех направлениях от разработки сайта и его продвижения до управления репутацией бренда. Такой метод не только позволяет усилить эффективность рекламы в несколько раз, но и служит стимулом ко всестороннему развитию компании и оптимизации ее бизнес-модели. Как следствие ‒ существенный прирост числа клиентов, увеличение продаж товаров или услуг не заставляют себя долго ждать.
                    </div>
                </div>
            </div>
            <div class="promotion__blocks-bloc">
                <div class="promotion__blocks-2">
                    <div class="promotion__blocks-bloc-top">
                        <div class="promotion__blocks-bloc-text">Максимальное внимание каждому проекту и оперативное реагирование команды</div>
                    </div>
                    <div class="promotion__blocks-bloc-txt">Для любого проекта мы разрабатываем индивидуальную стратегию достижения поставленных целей, исходя из особенностей бизнеса, и четко следуем ей. Специалисты, работающие над задачами, всегда в полной мере вовлечены во все рутинные процессы, тщательно прорабатывают каждую деталь и готовы незамедлительно ответить на любые вопросы клиента в режиме онлайн. После каждого выполненного блока работ мы в обязательном порядке даем обратную связь.

                    </div>
                </div>
            </div>
            <div class="promotion__blocks-bloc">
                <div class="promotion__blocks-3">
                    <div class="promotion__blocks-bloc-top">
                        <div class="promotion__blocks-bloc-text">Экспертность каждого сотрудника</div>
                    </div>
                    <div class="promotion__blocks-bloc-txt">Все члены нашей команды прошли обучение у ведущих в отрасли профессионалов и многократно отработали полученные знания на практике. Специалисты по контекстной рекламе также имеют сертификацию Google Partners. С каждым днем мы закрепляем и совершенствуем наши навыки, следим за любыми изменениями в области интернет-маркетинга и тестируем самые новые инструменты для того, чтобы быть “на гребне волны” и приносить максимум пользы клиентам.

                    </div>
                </div>
            </div>
            <div class="promotion__blocks-bloc">
                <div class="promotion__blocks-4">
                    <div class="promotion__blocks-bloc-top">
                        <div class="promotion__blocks-bloc-text">Прозрачность процессов и рациональное использование рекламного бюджета</div>
                    </div>
                    <div class="promotion__blocks-bloc-txt">Политика деятельности нашей компании базируется на принципах открытого и доверительного взаимодействия с клиентами. Кроме предоставления полного доступа ко всем рекламным кабинетам и статьям расходов, мы ежемесячно подготавливаем подробный отчет по выполненным за период работам. Для нас важно не продать как можно больше услуг в моменте, а построить надежные и долгосрочные деловые отношения с клиентами, помочь им вывести свой бизнес на новый уровень.
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<section class="working" aria-labelledby="working">
	
		<div class="working_head">
				<h2 class="working__txt">Как мы работаем</h2>
				<div class="working__blocks-txt">
					Мы предостовляем всестороннее развитие и продвижение сайта для его выхода на первые позиции в результатах выдачи поисковых систем.
				</div>
		</div>
		<div class="working__blocks">
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-1"></div>
					<div class="working_bloc__top-txt">Заполняем бриф, уточняем ваши требования и пожелания</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-2"></div>
                    <div class="working_bloc__top-txt">Согласовываем бюджет, объем работ и порядок их выполнения</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-3"></div>
                    <div class="working_bloc__top-txt color-txt">Готовим пошаговый план продвижения и приступаем к работе</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-4"></div>
                    <div class="working_bloc__top-txt">Утверждаем креативы, макеты и контент-планы</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-5"></div>
                    <div class="working_bloc__top-txt">Проводим анализ эффективности и оптимизируем рекламные кампании</div>
                </div>
            </div>
            <div class="working__blocks-bloc">
                <div class="working_bloc__top">
					<div class="working_bloc__top-img img-6"></div>
                    <div class="working_bloc__top-txt">Принимаем оплату поэтапно, по мере продвижения работы</div>
                </div>
            </div>
        </div>
		
	
	
	</section>
	
    <section class="cases" aria-labelledby="cases">
	
	<h2 class="cases__tittle">Поисковая оптимизация сайтов наших клиентов — каковы успехи?</h2>
	
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

    <section class="clients" aria-labelledby="clients">
	<div  class="clients_head">
		<h2 class="clients__txt" id="clientstxt">Бренды нам доверяют</h2>
		<div class="clients__blocks-text">
                <div class="clients__blocks-txt">Мы гарантируем качественный сервис при решении каждой поставленной задачи. 
				Уровень компетенций компании подтвержден работой с крупнейшими рекламодателями национального и международного масштаба.</div>
				<div class="clients__blocks-button">Стать клиентом</div>
		</div>
	</div>
		
        <div class="clients__blocks">
            <div class="clients__blocks-logo">
                <div class="clients__blocks-bloc">
                    <div class="clients__blocks-1"></div>
                </div>
                <div class="clients__blocks-bloc">
                    <div class="clients__blocks-2"></div>
                </div>
                <div class="clients__blocks-bloc">
                    <div class="clients__blocks-3"></div>
                </div>
                <div class="clients__blocks-bloc">
                    <div class="clients__blocks-4"></div>
                </div>
                <div class="clients__blocks-bloc">
                    <div class="clients__blocks-5"></div>
                </div>
                <div class="clients__blocks-bloc">
                    <div class="clients__blocks-6"></div>
                </div>
                <div class="clients__blocks-bloc">
                    <div class="clients__blocks-7"></div>
                </div>
                <div class="clients__blocks-bloc">
                    <div class="clients__blocks-8"></div>
                </div>
				<div class="clients__blocks-bloc">
                    <div class="clients__blocks-9"></div>
                </div>
				<div class="clients__blocks-bloc">
                    <div class="clients__blocks-10"></div>
                </div>
            </div>
        </div>
    </section>
	
	
    <section class="warranty" aria-labelledby="warranty">
	

		<div class="warranty__block">
		
		
			<div class="warranty__content-info">
				<h2 class="warranty__txt">Гарантии</h2>
				<div class="warranty__content">Системный подход к работе и правильный подбор каналов для продвижения бизнеса в сети позволяет нам дать гарантию на стабильную позитивную динамику рекламных кампаний и выход сайта в органический топ результатов выдачи поисковой системы по запросу с ключевыми словами. За годы работы в диджитал направлении мы сформировали пакеты готовых маркетинговых решений, дающих результат, и дополнили их актуальными фишками, что позволяет помочь нашим клиентам подвинуть своих конкурентов и занять лидирующую позицию в нише. 
				</div>
				<div class="warranty__content-hr"></div>
				
				<div class="warranty__content-partner">
					<div class="warranty__content-partner-img"></div>
					<div class="warranty__content-partner-txt">KEIS — сертифицированное агентство и официальный партнер самых известных рекламных и технологических платформ.</div>
				</div>
			</div>
			
			<div class="warranty__content-img"></div>
			
		</div>
		
		
    </section>
	
	
	<section class="command" aria-labelledby="command">
		
		<div class="command__block">
			
			<div class="command__content-info">
				<h2 class="command__tittle">Наша команда</h2>
				<div class="command__content"> – это интернет-агентство по созданию и продвижению сайтов и пиару в соцсетях и на порталах отзывов более 18 лет предоставляет свои услуги клиентам по всему миру, и сегодня агентство по продвижению сайтов КЕЙС это, прежде всего, наша команда.
				</div>
			</div>
			<div class="command__content-img">
				<div class="command__content-img-1">
				
					<div class="command__content-img-info-6">
						<div class="command__img-info-tittle">Александр</div>
						<div class="command__img-info-text">Web-разработчик</div>
					</div>
				
				</div>
				<div class="command__content-img-2">
				
					<div class="command__content-img-info-2">
						<div class="command__img-info-tittle">Максим</div>
						<div class="command__img-info-text">Web-разработчик</div>
					</div>
				
				</div>
				<div class="command__content-img-3">
				
					<div class="command__content-img-info-4">
						<div class="command__img-info-tittle">Александр</div>
						<div class="command__img-info-text">SEO-специалист</div>
					</div>
				
				</div>
				<div class="command__content-img-5">
				
					<div class="command__content-img-info-3">
						<div class="command__img-info-tittle">Алёна</div>
						<div class="command__img-info-text">Контент-менеджер</div>
					</div>
				
				</div>
				<div class="command__content-img-6">
				
					<div class="command__content-img-info-1">
						<div class="command__img-info-tittle">Анастасия</div>
						<div class="command__img-info-text">SEO-специалист</div>
					</div>
				
				</div>
				<div class="command__content-img-7">
				
					<div class="command__content-img-info-5">
						<div class="command__img-info-tittle">Ира</div>
						<div class="command__img-info-text">PM, SEO-специалист</div>
					</div>
				
				</div>
			</div>
			
			
			
			
			<div class="command__blocks-slider-container">
				<div id="command-slider" class="owl-carousel owl-theme">
					<div class="command__blocks-slider">
					
						<div class="command__slider-img-4"></div>
						<div class="command__slider-tittle">Александр</div>
						<div class="command__slider-text">Web-разработчик</div>
					
					</div>
					
					<div class="command__blocks-slider">
					
						<div class="command__slider-img-2"></div>
						<div class="command__slider-tittle">Анастасия</div>
						<div class="command__slider-text">SEO-специалист</div>
					
					</div>
					
					<div class="command__blocks-slider">
					
						<div class="command__slider-img-6"></div>
						<div class="command__slider-tittle">Максим</div>
						<div class="command__slider-text">Web-разработчик</div>
					
					</div>
					
					<div class="command__blocks-slider">
					
						<div class="command__slider-img-5"></div>
						<div class="command__slider-tittle">Александр</div>
						<div class="command__slider-text">SEO-специалист</div>
					
					</div>
					
					<div class="command__blocks-slider">
					
						<div class="command__slider-img-3"></div>
						<div class="command__slider-tittle">Алёна</div>
						<div class="command__slider-text">Контент-менеджер</div>
					
					</div>
					
					<div class="command__blocks-slider">
					
						<div class="command__slider-img-1"></div>
						<div class="command__slider-tittle">Ира</div>
						<div class="command__slider-text">PM, SEO-специалист</div>
					
					</div>
					
				</div>
			</div>
			
		</div>
		
	</section>
	
    <section class="map" aria-labelledby="map">
        <hr class="line_map">
        <div class="map_block">
		
		<div class="map__block-container">
			<div class="map__block-info">
				<div class="map__info-tel-title">Телефон</div>
				<div class="map__info-tel">+38 (050) 771-70-70</div>
				<div class="map__info-time">с 10:00 до 19:00</div>
				<div class="map__info-button">Заказать звонок</div>
				<div class="map__info-hr"></div>
				<div class="map__info-address-title">Наш адрес</div>
				<div class="map__info-address">Киев, ул. Михаила Гришко, 4А;</div>
				<div class="map__info-hr"></div>
				<div class="map__info-email-title">E-mail</div>
				<div class="map__info-email">keis.com.ua@gmail.com</div>
				<div class="map__info-hr-2"></div>
			</div>
		</div>
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1069.3675610005032!2d30.62811200257169!3d50.39640076588753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5b33cb78427%3A0xc564b0e530a651ce!2z0YPQuy4g0JzQuNGF0LDQuNC70LAg0JPRgNC40YjQutC-LCA0LCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1578924692204!5m2!1sru!2sua" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>
    <div id="feedback"></div>



<div id="myModal_home">
  <div class="modal__block_home">
  
	 <div class="modal__home-block">
	 
		 <div class="modal__home-block-title">Заказать звонок</div>
		 <div class="modal__home-block-text">Мы подготовим для вас лучшее предложение по увеличению количества клиентов!</div>
	 
			<form id="modal__home_form">
			
				<div id="modal_home_note"></div>
				<div id="modal_home_fields">
					<div class="ask__form">
						<input id="modal_home_name" class="input" name="name" type="text" placeholder="ФИО" required>
					</div>
					
					<div class="ask__form ask_top">
						<input id="modal_home_mob" class="input" name="telephon" type="number" placeholder="Телефон" required>
					</div>

					<div class="ask__form-block">

						<div class="ask__form-check">
							<input id="ask_check" class="input" name="check" type="checkbox" checked="checked" required>
							<div>Отправляя заявку, вы соглашаетесь <a href="#">с условиями передачи информации.</a></div>
						</div>
						
						<div class="ask__form-button">
							<input id="ask_but" class="submit" value="Заказать" type="submit" />
						</div>
						
					</div>
				</div>
				
			</form>
	
	 </div>
	 <div class="modal__home-bg"></div>
	
	
  </div>
  <span id="myModal__close_home" class="close"></span>
</div>
<div id="myOverlay_home"></div>









<?php
get_footer();
