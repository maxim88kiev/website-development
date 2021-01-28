<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();


//			/* Start the Loop */
//			while ( have_posts() ) :
//				the_post();
//				// If comments are open or we have at least one comment, load up the comment template.
//				if ( comments_open() || get_comments_number() ) {
////					comments_template();
//				}
//			endwhile; // End of the loop.

if (is_page(6)) {
    get_template_part( 'catalog/view/template/information/darnitsa');
}elseif (is_page(87)){
    get_template_part( 'catalog/view/template/information/lukyanovka');
}elseif (is_page(93)){
    get_template_part( 'catalog/view/template/information/sevastopol');
}
get_footer();
