<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 * Template Name: blog
 */
 
	
 
	get_header();
	
	wp_enqueue_style( 'header-css', get_stylesheet_directory_uri().'/assets/css/header.css');
	wp_enqueue_style( 'blog-css', get_stylesheet_directory_uri().'/assets/css/blog.css');
	wp_enqueue_script( 'blog-script', get_theme_file_uri( '/assets/js/blog.js' ));

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
$args = array(
	'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
	'paged'          => $current_page // текущая страница
);
query_posts( $args );
 
$wp_query->is_archive = true;
$wp_query->is_home = false;?>

 
<div class='content_blog'>

	<div class='content_blog-block'>
	 
	<?php while(have_posts()): the_post();
		?>
		
		<div class='content_blog-article'>
		
			<a href="<?php echo get_permalink(); ?>" class='blog_link'>
		
				<div class='blog_article-img'>
					<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>

				</div>
				<div class='blog_article-title'>
					<h2><?php the_title() /* заголовок */ ?></h2>
				</div>
				
				<!--<div class='blog_article-text'>
					<p><?php //the_content() /* содержимое поста */ ?></p>
				</div>
				<div class='blog_article-more'>Читать статью...</div>-->
			</a>

		</div>

		<?php
	endwhile;?>
	
	</div>

</div>


 
<?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // функция постраничной навигации




get_footer();