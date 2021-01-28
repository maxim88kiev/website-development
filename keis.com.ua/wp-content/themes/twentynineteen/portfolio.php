<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 * Template Name: portfolio
 */
 
 
	wp_enqueue_style( 'portfolio-css', get_stylesheet_directory_uri().'/assets/css/portfolio.css');
	wp_enqueue_script( 'portfolio-script', get_theme_file_uri( '/assets/js/portfolio.js' ));
	
 
get_header();

?>

	
	<section class="portfolio__title" aria-labelledby="portfolio__title">
        <div class="portfolio__title-bg">
			<div class="portfolio__title-txt">
				<h1 class="portfolio__title-txt-1">Наши кейсы</h1>
			</div>
        </div>
    </section>
	
	<section class="portfolio__examples" aria-labelledby="KeisTx">
        <div class="portfolio__examples-lists">
            <div class="portfolio__examples-list">
				<a href="#">
					<div class="portfolio__list-img">
						<img src="/wp-content/themes/twentynineteen/assets/img/sayt-ndorogo-gem.jpg" alt="examples_img"/>
					</div>
					<div class="portfolio__list-text">
						gem-brilliants.com
					</div>
				</a>
            </div>
			 <div class="portfolio__examples-list">
				<a href="#">
					<div class="portfolio__list-img">
						<img src="/wp-content/themes/twentynineteen/assets/img/Screenshot_2020-05-20.jpg" alt="examples_img"/>
					</div>
					<div class="portfolio__list-text">
						garden-stones.com.ua
					</div>
				</a>
            </div>
			 <div class="portfolio__examples-list">
				<a href="#">
					<div class="portfolio__list-img">
						<img src="/wp-content/themes/twentynineteen/assets/img/Screenshot_5020-05-20.png" alt="examples_img"/>
					</div>
					<div class="portfolio__list-text">
						l24.com.ua
					</div>
				</a>
            </div>
			 <div class="portfolio__examples-list">
				<a href="#">
					<div class="portfolio__list-img">
						<img src="/wp-content/themes/twentynineteen/assets/img/sayt-ndorogo-kovriki.jpg" alt="examples_img"/>
					</div>
					<div class="portfolio__list-text">
						justyoga.com.ua
					</div>
				</a>
            </div>
			 <div class="portfolio__examples-list">
				<a href="#">
					<div class="portfolio__list-img">
						<img src="/wp-content/themes/twentynineteen/assets/img/sayt-ndorogo-ataka.jpg" alt="examples_img"/>
					</div>
					<div class="portfolio__list-text">
						ataka-ukraine.com.ua
					</div>
				</a>
            </div>
			 <div class="portfolio__examples-list">
				<a href="#">
					<div class="portfolio__list-img">
						<img src="/wp-content/themes/twentynineteen/assets/img/sayt-ndorogo-stiralka.jpg" alt="examples_img"/>
					</div>
					<div class="portfolio__list-text">
						profimaister.com.ua
					</div>
				</a>
            </div>
            
        </div>
    </section>




<?php
get_footer();