<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 * Template Name: contacts
 */
 
	
 
get_header();

	wp_enqueue_style( 'header-css', get_stylesheet_directory_uri().'/assets/css/header.css');
	wp_enqueue_style( 'contacts-css', get_stylesheet_directory_uri().'/assets/css/contacts.css');
	wp_enqueue_script( 'contacts-script', get_theme_file_uri( '/assets/js/contacts.js' ));

?>


<div class="container__contact">

	<div class="container__contact-bg">
		<h1 class="container__contact-title">Контакты</h1>
		
		<div class="map__block-container">
			<div class="map__block-info">
				<div class="contact_block">
					<div class="map__info-tel-title">Телефон</div>
					<div class="contact_block-mob">
						<div class="map__info-tel">+38 (050) 771-70-70</div>
						<div class="map__info-time">с 10:00 до 19:00</div>
						<div class="map__info-button">Заказать звонок</div>
					</div>
				</div>
				<div class="map__info-hr"></div>
				<div class="contact_block">
					<div class="map__info-address-title">Наш адрес</div>
					<div class="contact_block-info">
						<div class="map__info-address">Киев, ул. Михаила Гришко, 4А;</div>
					</div>
				</div>
				<div class="map__info-hr"></div>
				<div class="contact_block">
					<div class="map__info-email-title">E-mail</div>
					<div class="contact_block-info">
						<div class="map__info-email">keis.com.ua@gmail.com</div>
						<div class="map__info-hr-2"></div>
					</div>
				</div>	
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

<div class="map_block">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1069.3675610005032!2d30.62811200257169!3d50.39640076588753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5b33cb78427%3A0xc564b0e530a651ce!2z0YPQuy4g0JzQuNGF0LDQuNC70LAg0JPRgNC40YjQutC-LCA0LCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1578924692204!5m2!1sru!2sua" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</div>






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
						<input type="hidden" name="form_name" value="Keis: форма - обратный звонок Контакты">
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