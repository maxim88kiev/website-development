<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
 
	wp_enqueue_style( 'footer-css', get_stylesheet_directory_uri().'/assets/css/footer.css');

?>

</div><!-- #content -->


<footer class="site__footer">
	
	
	<div class="site__footer-container">
	
		<div class="site__footer-block">
		
			<div class="site__footer-block-menu">
			
				<div class="footer__block-navigation">
				
					<div class="footer__block-item"><a href="/about-company/" onclick="return false;">О компании</a></div>
					<div class="footer__block-item"><a href="#" onclick="return false;">Вакансии</a></div>
					<div class="footer__block-item"><a href="/services/" onclick="return false;">Услуги</a></div>
					<div class="footer__block-item"><a href="/contacts/">Контакты</a></div>
					<div class="footer__block-item"><a href="/portfolio/" onclick="return false;">Портфолио</a></div>
					<div class="footer__block-item"><a href="/blog/">Блог</a></div>
				
				</div>
				<div class="footer__sub-container">
				
					<div class="footer__block-sub">
						<div class="footer__sub-item"><a href="/website-development/">Разработка сайтов</a></div>
						<div class="footer__sub-item"><a href="/targeted-advertising/">Социальные сети SMM</a></div>
						<div class="footer__sub-item"><a href="/%d1%81opywriting-and-content/" onclick="return false;">Контент и копирайтинг</a></div>
					</div>
					<div class="footer__block-sub">
						<div class="footer__sub-item"><a href="/website-promotion/">Продвижение сайтов SEO</a></div>
						<div class="footer__sub-item"><a href="/design/" onclick="return false;">Дизайн и упаковка бизнеса</a></div>
						<div class="footer__sub-item"><a href="/pr-and-serm/" onclick="return false;">Комплексный маркетинг</a></div>
					</div>
					<div class="footer__block-sub">
						<div class="footer__sub-item"><a href="/contextual-advertising/">Контекстная реклама PPC</a></div>
						<div class="footer__sub-item"><a href="/video-marketing/" onclick="return false;">Видеопродакшн</a></div>
						<div class="footer__sub-item"><a href="#" onclick="return false;">Дизайн и упаковка бизнеса</a></div>
					</div>
				
				</div>
			
			</div>
			<div class="site__footer-block-info">
				<div class="footer__block-info-tel"><a href="tel:+380507717070">+38 (050) 771-70-70</a></div>
				<div class="footer__info-time">с 10:00 до 19:00</div>
				<div class="footer__block-info-address">Киев, ул. Михаила Гришко, 4А;</div>
				<div class="footer__block-info-email"><a href="mailto:keis.com.ua@gmail.com">keis.com.ua@gmail.com</a></div>
			</div>
		
		</div>
		
		
		<div class="footer__block-networks">
			<div class="footer__networks-rights">© 2019 Все права защищены</div>
			<div class="footer__networks-politic"><a href="privacy-policy/">Политика конфиденциальности</a></div>
			<div class="footer__networks-social">
				<div class="footer__social-text">Мы в социальных сетях</div>
				<div class="footer__social-block">
					<div class="footer__social-facebook"><a href="https://www.facebook.com/keis.digital.agency"><img src="/images/facebook_footer.svg"></a></div>
					<div class="footer__social-youtube"><a href="#"><img src="/images/yotube_footer.svg"></a></div>
					<div class="footer__social-instagram"><a href="https://www.instagram.com/keis.digital.agency/"><img src="/images/Insta.svg"></a></div>
				</div>
			</div>
		</div>
	
	</div>
	
	
</footer>

<div id="myModal">
  <div class="modal__block">
	<div class="modal__block-title">Рассчитайте стоимость проекта</div>
	<div class="modal__block-info">Ответьте на несколько вопросов в форме ниже, чтобы мы рассчитали стоимость работ для вашего бизнеса,  а также узнайте потенциал Вашего сайта при сотрудничестве</div>
	<!--<div class="modal__block-step">
		<div  class="modal__block-img"></div>
		<div class="modal__step-info">Заполните форму и ответьте на несколько простых вопросов, чтобы мы рассчитали для вас цену</div>
		<div class="modal__step-numb">Шаг 1 из 4</div>
	</div>
	<div class="modal__block-adress">
		<div class="modal__adress-title">Адрес сайта</div>
		<div class="modal__adress-input"><input type="text" placeholder="https://"></div>
		<div class="modal__adress-but">
			<div class="modal__adress-but-back">Назад</div>
			<div class="modal__adress-but-text">Шаг 1 из 4</div>
			<div class="modal__adress-but-forward">Далее</div>
		</div>
	</div>-->
	
	<div class="modal__block-form">
			<form id="contact">
				<div id="note"></div>
				<div id="fields">
					<div class="modal__form modal_top">
						<input id="modal_name" class="input" name="name" type="text" placeholder="ФИО" required>
					</div>
					
					<div class="modal__form">
							<input id="modal_mob" class="input" name="telephon" type="number" placeholder="Телефон" required>
					</div>
					
					<div class="modal__form modal__form-block modal_center">
						<div class="modal__form">
							<input id="modal_site" class="input" name="site" type="text" placeholder="Ваш сайт">
						</div>
						
						<div class="modal__form">
							<input id="modal_mail" class="input" name="email" type="email" placeholder="Электронная почта">
						</div>
					</div>
					
					<div class="modal__form">
							<textarea id="modal_comment" class="input" name="message" cols="40" rows="1" placeholder="Сообщение"></textarea>
					</div>
					
					<div class="modal__form-block modal-bot">

						<div class="modal__form-check">
							<input id="modal_check" class="input" name="check" type="checkbox" checked="checked" required>
							<div>Я согласен с условиями обработки <a href="#">персональных данных</a></div>
						</div>
						
						<div class="modal__form-button">
							<input id="submitinput" class="submit" value="Отправить" type="submit" />
						</div>
						
						<input id="service_name" type="hidden" name="service_name" value="">
					</div>
				</div>
			</form>
		</div>
		
		
	
	
	
  </div>
  <span id="myModal__close" class="close"></span>
</div>
<div id="myOverlay"></div>

<!--	<footer id="colophon" class="site-footer">-->
<!--		--><?php //get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
<!--		<div class="site-info">-->
<!--			--><?php //$blog_info = get_bloginfo( 'name' ); ?>
<!--			--><?php //if ( ! empty( $blog_info ) ) : ?>
<!--				<a class="site-name" href="--><?php ////echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php ////bloginfo( 'name' ); ?><!--</a>,-->
<!--			--><?php //endif; ?>
<!--			<a href="--><?php ////echo esc_url( __( 'https://wordpress.org/', 'twentynineteen' ) ); ?><!--" class="imprint">-->
<!--				--><?php
////				/* translators: %s: WordPress. */
////				printf( __( 'Proudly powered by %s.', 'twentynineteen' ), 'WordPress' );
////				?>
<!--			</a>-->
<!--			--><?php
//			if ( function_exists( 'the_privacy_policy_link' ) ) {
//				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
//			}
//			?>
<!--			--><?php //if ( has_nav_menu( 'footer' ) ) : ?>
<!--				<nav class="footer-navigation" aria-label="--><?php //esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?><!--">-->
<!--					--><?php
//					wp_nav_menu(
//						array(
//							'theme_location' => 'footer',
//							'menu_class'     => 'footer-menu',
//							'depth'          => 1,
//						)
//					);
//					?>
<!--				</nav> .footer-navigation -->
<!--			--><?php //endif; ?>
<!--		</div> .site-info -->
<!--	</footer> #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css" rel="stylesheet"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.js"></script>

<script src="//code.jivosite.com/widget/tGxMpKzkh4" async></script>
<noindex>
<script type="text/javascript" src="//cabinet.salesupwidget.com/php/1.js" id="salesupwidget1js" data-uid="14616" charset="UTF-8" async="async"></script>
</noindex>
</body>
</html>
