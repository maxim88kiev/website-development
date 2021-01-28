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

get_template_part( 'catalog/view/template/common/footer' );

?>




<!--	</div>-->
<!---->
<!--	<footer id="colophon" class="site-footer">-->
<!--		--><?php //get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
<!--		<div class="site-info">-->
<!--			--><?php //$blog_info = get_bloginfo( 'name' ); ?>
<!--			--><?php //if ( ! empty( $blog_info ) ) : ?>
<!--				<a class="site-name" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a>,-->
<!--			--><?php //endif; ?>
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'twentynineteen' ) ); ?><!--" class="imprint">-->
<!--				--><?php
//				/* translators: %s: WordPress. */
//				printf( __( 'Proudly powered by %s.', 'twentynineteen' ), 'WordPress' );
//				?>
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
<!--				</nav>-->
<!--			--><?php //endif; ?>
<!--		</div>-->
<!--	</footer>-->
<!---->
<!--</div>-->





<?php wp_footer(); ?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script defer="defer" type='text/javascript' src='https://endosfera.com.ua/wp-content/themes/endosphere/catalog/view/js/home.js'></script>


</body>
</html>
