<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<div class="site-branding">

	<?php if ( has_custom_logo() ) : ?>
		<div class="site-logo">
		<?php the_custom_logo(); ?>
		<a href="/" class="logo_mob" rel="home">
			<img src="/images/logo_mob.svg" class="custom-logo" alt="Keis">
		</a>
		<ul class="list-unstyled lang" style="position: absolute;left: 60px;top: 16px;z-index: 100000000;"> 
			   <?php if(function_exists('pll_the_languages')){ 
					 pll_the_languages([
						'dropdown' => 0,
						'show_names' => 0,
						'show_flags' => 1,
						'hide_current' => 1,
					]); 
				} ?> 
			</ul>
		</div>
	<?php endif; ?>
	<?php $blog_info = get_bloginfo( 'name' ); ?>
	<?php if ( ! empty( $blog_info ) ) : ?>
		<?php if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
	$description = get_bloginfo( 'description', 'display' );
	if ( $description || is_customize_preview() ) :
		?>
			<p class="site-description">
				<?php echo $description; ?>
			</p>
	<?php endif; ?>
    <!--<div class="mob_menu"><i class="fa fa-bars" aria-hidden="true"></i></div>-->
    <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'main-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s
					<div class="menu__text_mob">
						<div class="menu__text_mob-tel">
							<a href="tel:+380507717070">+38 (050) 771-70-70</a>
						</div>
						<div class="menu__text_mob-adress">
							Киев, ул. Михаила Гришко, 4А;
						</div>
						<div class="menu__text_mob-email">
							<a href="mailto:keis.com.ua@gmail.com">keis.com.ua@gmail.com</a>
						</div>
					</div>
					</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>
	<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
					'depth'          => 1,
				)
			);
			?>
		</nav><!-- .social-navigation -->
	<?php endif; ?>
    <div class="top_phone">
        <?php dynamic_sidebar( 'top-area' ); ?>
    </div>
	<div class="mob_img_bg">
		<div class="mob_phone_bg modal_js"></div>
		<div class="mob_menu">
			<!--<i class="fa fa-bars" aria-hidden="true"></i>-->
			<div class="mob_menu_bg"></div>
		</div>
	</div>
    <div class="calk modal_js">Просчет стоимости</div>
</div><!-- .site-branding -->
