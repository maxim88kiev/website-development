<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 * Template Name: thanks_advertising
 */
 

	get_header();

	wp_enqueue_style( 'header-css', get_stylesheet_directory_uri().'/assets/css/header.css');
	wp_enqueue_style( 'thanks-css', get_stylesheet_directory_uri().'/assets/css/thanks.css');
	wp_enqueue_script( 'thanks-script', get_theme_file_uri( '/assets/js/thanks.js' ));

?>


<div class="container__thanks">
	<h2>Спасибо за ваше обращение в агентство интернет-маркетинга <b>KEIS !</b></h2>
	<p>Персональный менеджер свяжется с вами в ближайшее время.</p>
	<p>Мы рады, что вы выбрали именно  нас!</p>
	
	<div class="container__thanks-gif"></div>
</div>



<?php
get_footer();