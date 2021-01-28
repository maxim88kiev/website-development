<?php

/**
 * Template Name: Default
 * Description: The default template.
 */
?>
<?php //do_action( 'wpmtst_before_view' ); ?>
<!---->
<!--<div class="strong-view --><?php //wpmtst_container_class(); ?><!--"--><?php //wpmtst_container_data(); ?><!--
	--><?php //do_action( 'wpmtst_view_header' ); ?>
<!---->
<!--	<div class="strong-content --><?php //wpmtst_content_class(); ?><!--">-->
<!--		--><?php //do_action( 'wpmtst_before_content' ); ?>

		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
<!--		<div class="--><?php //wpmtst_post_class(); ?><!--">-->

<!--			<div class="testimonial-inner">-->
<!--				--><?php //do_action( 'wpmtst_before_testimonial' ); ?>

<!--				--><?php //wpmtst_the_title( '<h3 class="testimonial-heading">', '</h3>' ); ?>

<!--                <div class="testimonial-client">-->
<!--                    --><?php //wpmtst_the_client(); ?>
<!--                </div>-->
<!--				<div class="testimonial-content">-->
<!--					--><?php //wpmtst_the_thumbnail(); ?>
<!--					<div class="maybe-clear"></div>-->



<div class="faq-discussion__comments-list">
    <div class="faq-discussion__comments-border"></div>
    <article class="faq-discussion__comment comment">

        <div class="comment__autor">
                    <span>
						<span class="comment__autor-letter"><?php wpmtst_the_client(); ?></span>
                        <picture>
							<source srcset="/wp-content/themes/endosphere/catalog/view/img/comment__autor-image.webp">
							<img class="comment__autor-image" alt="comment autor"
                     src="/wp-content/themes/endosphere/catalog/view/img/comment__autor-image.png">
						</picture>
                    </span>
        </div>
        <div class="commemt__blockquote">

            <div class="comment__autor-fact">
                <div class="comment__autor-fact-block">
                    <?php wpmtst_the_client(); ?>
                    <div class="comment__autor__point-wrapper">
                        <?php echo $GLOBALS['rating_post_coment']; ?>
                    </div>
                </div>
                <p class="comment__text">
                    <?php wpmtst_the_content(); ?>
                </p>
                <div class="comment__autor-fact-minus"><span class="reviews__form-img-plus"></span>
                    <p><?php echo $GLOBALS['pros_post_coment']; ?></p></div>
                <div class="comment__autor-fact-plus">
                    <span class="reviews__form-img-minus"></span>
                    <p><?php echo $GLOBALS['minus_post_coment']; ?></p>
                    <div class="comment__feedback">
                        <?php GetWtiLikePost(); ?>
                        <button class="comment__feedback-dopinfo" rel="<?php echo get_the_ID(); ?>" title="Открыть окно" aria-label="Открыть окно"><span class="visually-hidden">Открыть окно</span></button>

                    </div>
                </div>
            </div>
        </div>
    </article>




<!--					--><?php //do_action( 'wpmtst_after_testimonial_content' ); ?>
<!--				</div>-->
<!--				<div class="clear"></div>-->

<!--				--><?php //do_action( 'wpmtst_after_testimonial' ); ?>
<!--			</div>-->

<!--		</div>-->
		<?php endwhile; ?>

<!--		--><?php //do_action( 'wpmtst_after_content' ); ?>
<!--	</div>-->
<!---->
<!--	--><?php //do_action( 'wpmtst_view_footer' ); ?>
<!--</div>-->
<!---->
<?php //do_action( 'wpmtst_after_view' ); ?>

