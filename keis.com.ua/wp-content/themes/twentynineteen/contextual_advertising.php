<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 * Template Name: contextual_advertising
 */
 
	
 
	get_header();

	wp_enqueue_style( 'header-css', get_stylesheet_directory_uri().'/assets/css/header.css');
	wp_enqueue_style( 'contextual-css', get_stylesheet_directory_uri().'/assets/css/contextual.css');
	wp_enqueue_script( 'contextual-script', get_theme_file_uri( '/assets/js/contextual.js' ));

?>


<div class="container__top">
	<div class="container__banner">
		<div class="container__banner-block">
			<div class="banner__block-text">
				<h1 class="block__text-title">Контекстная реклама Google Ads</h1>
				<div class="block__txt">Снижаем стоимость привлечения реальных клиентов на ваш сайт с помощью эффективной рекламы в поиске Google.</div>
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
							<input type="hidden" name="form_name" value="Keis: форма - Контекстная реклама Google Ads: Заявка на консультацию">
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
				<div class="advantages__info-text">Контекстная реклама является одним из главных инструментов эффективного продвижения товаров и услуг в интернете. При условии грамотной настройки, она показывается только “горячей” аудитории, которая уже готова к покупке или заказу, поскольку сама вводит в строку поиска соответствующие ключевые слова или фразы. Представляет собой этот вид рекламы лаконичное текстовое объявление, включающее в себя гиперссылку, по которой пользователь может перейти для более детального ознакомления с предложением или получения развернутой информации о продукте.

				</div>
				<div class="advantages__info-text">На первый взгляд может показаться, что запустить контекстную рекламу легко самостоятельно, потому что не нужно привлекать дизайнеров, копирайтеров и других специалистов, востребованных в сфере интернет-маркетинга. Но все же заказать настройку контекстной рекламы в Киеве лучше у профессионалов, поскольку успех рекламной кампании во многом зависит от качественной подготовки к ее запуску. Специалисты компании KEIS имеют внушительный опыт на этом поприще, подтвержденный партнерским сертификатом Google, и знают, как привлечь трафик, улучшить конверсию и снизить при этом расходы.

				</div>
			</div>
			<div class="advantages__info-bot">На старте работы над проектом наша команда тщательно изучает конкурентные предложения и нишу в целом, определяет и сегментирует целевую аудиторию и составляет поэтапный план дальнейших действий. Без этих шагов достижения реальных результатов в виде продаж, а не просто кликов пользователей по объявлению, добиться невозможно. Несмотря на то, что поисковая реклама по большей части автоматизирована, только понимание специфики продукта и продуманный подход к его продвижению может сделать ее не только окупаемой, но и прибыльной.

			</div>
		</div>
	</div>
	
</div>

<div class="container__advertising">
	<h2 class="container__advertising-title">Преимущества продвижения с KEIS:</h2>
	
	<div class="advertising__blocks">
	
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_1"></div>
			<div class="advertising__item-title">Клики по объявлению дешевле</div>
			<div class="advertising__item-info">Оптимизируем рекламное объявление таким образом, чтобы вы не переплачивали за клик.</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_2"></div>
			<div class="advertising__item-title">Выше коэффициент конверсии</div>
			<div class="advertising__item-info">За счёт грамотной настройки рекламного аккаунта, вы не растрачиваете бюджет.</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_3"></div>
			<div class="advertising__item-title">Прозрачная статистика</div>
			<div class="advertising__item-info">Ведем регулярную отчетность, используя аналитические данные с рекламных каналов.</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_4"></div>
			<div class="advertising__item-title">Увеличение клиентской базы</div>
			<div class="advertising__item-info">А это влечет за собой рост продаж</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_5"></div>
			<div class="advertising__item-title">Гибкие настройки</div>
			<div class="advertising__item-info">Геотаргетинг, время показа, ежедневный бюджет.</div>
		</div>
		<div class="advertising__item">
			<div class="advertising__item-img ad_img_6"></div>
			<div class="advertising__item-title">Быстрый эффект</div>
			<div class="advertising__item-info">Ваше объявление будет в ТОПе, поэтому гарантируем целевые переходы.</div>
		</div>
	
	</div>
	
</div>




<div class="container__cost">

	<div class="container__cost-bg">
	
		<div class="container__cost-head">
	
			<h2 class="container__cost-title">Что мы делаем и сколько это стоит</h2>
			
			<div class="container__cost-info">
					В стоимость работ исполнителя входит процент от общего бюджета, выделенного на ведение рекламной кампании, месячная фиксированная ставка либо почасовка, а также размеры выполняемых работ.
			</div>
	
		</div>
		
		<div class="container__cost-table">
		
			<table class="cost-table">
				<tbody>
					<tr>
						<th class="cost-table-th">Рекламная сеть</th>
						<th class="cost-table-th">Стоимость</th>
						<th></th>
					</tr>
					<tr>
						<td>Google Ads (контекстные слова)</td>
						<td>от 5 000 грн</td>
						<td><div class="cost-table-but" data-value="Страница Контекстная реклама: Пакет Google Ads">Заказать</div></td>
					</tr>
					<!--<tr>
						<td>Настройка дополнительной<br> группы объявлений</td>
						<td>250 грн</td>
						<td><div class="cost-table-but" data-value="Страница Контекстная реклама: Пакет Настройка дополнительной группы объявлений">Заказать</div></td>
					</tr>
					<tr>
						<td>Разработка рекламного<br> изображения</td>
						<td>1 000 грн</td>
						<td><div class="cost-table-but" data-value="Страница Контекстная реклама: Пакет Разработка рекламного изображения">Заказать</div></td>
					</tr>
					<tr>
						<td>Разработка рекламного<br> видеоматериала</td>
						<td>2 500 грн</td>
						<td><div class="cost-table-but" data-value="Страница Контекстная реклама: Пакет Разработка рекламного видеоматериала">Заказать</div></td>
					</tr>-->
					<tr>
						<td>Google Merchant<br> (товарные объявления)</td>
						<td>7 000 грн</td>
						<td><div class="cost-table-but" data-value="Страница Контекстная реклама: Пакет Google Merchant">Заказать</div></td>
					</tr>
					<tr>
						<td>Google на тематических сайтах<br> (контекстно-медийная сеть)</td>
						<td>2 000 грн</td>
						<td><div class="cost-table-but" data-value="Страница Контекстная реклама: Пакет Google на тематических сайтах">Заказать</div></td>
					</tr>
					<tr>
						<td>Google ремаркетинг</td>
						<td>2 000 грн</td>
						<td><div class="cost-table-but" data-value="Страница Контекстная реклама: Пакет Google ремаркетинг">Заказать</div></td>
					</tr>
					<tr>
						<td>Google YouTube</td>
						<td>5 000 грн</td>
						<td><div class="cost-table-but" data-value="Страница Контекстная реклама: Пакет Google YouTube">Заказать</div></td>
					</tr>
				</tbody>
			</table>
		
		</div>
		
	</div>

</div>


<div class="container__call">

	<div class="container__call-bg">

		<h2 class="container__call-title">Хотите рост продаж</h2>
		<div class="container__call-info">
			Получите личную консультацию от ТОП-специалиста совершенно бесплатно.
		</div>

		<div class="container__call-form">
			
			<form id="call_form">
						<div id="call_note"></div>
						<div id="call_fields"  class="call-fields">
							<div class="form-group input_style call-input">
							<input id="name_el"  class="input" name="name" type="text" placeholder="Имя" required>
							</div>
							<div class="form-group input_style call-input">
							<input id="telephon_el" class="input" name="telephon" type="number" placeholder="Телефон" required>
							</div>
							<div class="form-group call-but">
								<input id="banner_submit" class="submit banner_form_but" value="Перезвоните мне" type="submit" />
							</div>
							<input type="hidden" name="form_name" value="Keis: форма - Контекстная реклама Google Ads: Заявка на консультацию">
						</div>
			</form>
			
		</div>


	</div>

</div>

<div class="container__optimization">

	<div class="container__optimization-bg">

		<div class="container__optimization-blocks">
		
			<div class="optimization__block-top">
			
				<div class="optimization__top-img"></div>
				<div class="optimization__block-description">Подготовка к запуску контекстной рекламы длится в среднем 
от 3 до 5 дней. В этот период команда агентства KEIS проводит маркетинговое исследование, анализирует посадочные страницы, разрабатывает стратегию ведения рекламной кампании, настраивает сервисы аналитики и ремаркетинга, составляет семантическое ядро (подбирает необходимые поисковые запросы, слова-маркеры и минус-слова), создает текстовое объявление (или несколько для разных сегментов ЦА или продуктов), проводит тестирование и распределяет бюджет. В ходе самой кампании мы регулярно мониторим показатели и оптимизируем настройки, если возникает такая необходимость.</div>
			
			</div>
			
			<div class="optimization__block-description">
				Продуманная контекстная реклама и релевантная целевая страница - это то, что существенно снизит цену привлечения реального клиента. Поэтому не стоит пренебрегать услугами профессиональных маркетологов, которые грамотно составят текстовое объявление, сделав акцент на преимуществах, выгодах и призыве к действию, а также дадут рекомендации по проработке функционала и наполнения страницы. Сэкономив на этой статье расхода, вы рискуете просто “слить” рекламный бюджет и уйти в минус, не получив никакого результата в продвижении.
			</div>
			<div class="optimization__block-text">
				К слову, бюджет на показ объявлений в поисковиках вы устанавливаете самостоятельно, но рекомендуемая сумма зависит от масштаба бизнеса, установленных KPI, конкуренции в нише и региона, в котором они будут транслироваться. На стоимость клика также могут влиять и другие внешние и внутренние факторы. Для того чтобы спрогнозировать затраты и рассчитать рентабельность кампании, т.е.окупаемость инвестиций (ROI) в контекстную рекламу, оставьте заявку, и наши специалисты свяжутся с вами в ближайшее время и предоставят развернутую информацию по данному вопросу.
			</div>
		
		</div>

	</div>

</div>


<div class="container__look">
	<div class="container__look-bg">
		<h2 class="container__look-title">Как будет выглядеть Ваша реклама в поиске</h2>
			<div class="container__look-blocks">
			
				<div class="container__look-img"></div>
				<div class="container__look-info">Рекламный блок «Премиум-показы». Показывается над результатами органической выдачи. Здесь может быть показано до четырех объявлений</div>
			
			</div>
	</div>
</div>


<div class="question">

	<div class="question__block">
		<h2 class="question__block-title">F&Q</h2>
		
		<div class="question__block-content">
			
			<div class="question__block-item">
				<div class="question__item-title">Сколько времени занимает подготовка к запуску рекламной кампании?<div class="question__item-img"></div></div>
				<div class="question__item-info">Подготовка к запуску контекстной рекламы занимает от 3-х дней. Всё зависит от маркетингового исследования, который включает в себя аудиторию, конкурентный анализ, сложность креативов и много другое.</div>
			</div>
			<div class="question__block-item">
				<div class="question__item-title">Зачем подключать аналитику?<div class="question__item-img"></div></div>
				<div class="question__item-info">Благодаря аналитике Вы сможете проанализировать поведение потенциальных клиентов. Это нужно, чтобы понимать какие клиенты к Вам приходят, как можно оптимизировать стоимость рекламы за клик. Также Вы будете знать, какие правки необходимо осуществить в рекламном аккаунте, чтобы увеличить количество конверсий.</div>
			</div>
			<div class="question__block-item">
				<div class="question__item-title">Почему я получаю много кликов, а заказов практически или вообще нет?<div class="question__item-img"></div></div>
				<div class="question__item-info">С нашей стороны мы гарантируем правильную настройку рекламы и оптимизируем объявления таким образом, чтобы стоимость за клик была наименьшая. Мы не можем гарантировать заказы, если Ваш продукт некачественный. </div>
			</div>
			<div class="question__block-item">
				<div class="question__item-title">Как работает контекстная реклама Google?<div class="question__item-img"></div></div>
				<div class="question__item-info">Например, когда пользователь вводит в поисковую строку запрос «купить кроссовки Nike», на странице выдачи он видит результаты естественного ранжирования сайтов и рекламные объявления Google Ads.</div>
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