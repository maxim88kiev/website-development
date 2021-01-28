<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 * Template Name: policy
 */
 
	
 
	get_header();

	wp_enqueue_style( 'header-css', get_stylesheet_directory_uri().'/assets/css/header.css');
	wp_enqueue_style( 'policy-css', get_stylesheet_directory_uri().'/assets/css/policy.css');
	wp_enqueue_script( 'policy-script', get_theme_file_uri( '/assets/js/policy.js' ));

?>


<div class="container__policy">

<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

</div>

<?php


get_footer();