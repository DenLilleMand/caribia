<?php
/**
 * Template part for displaying posts.
 *
 * @package Nisarg
 */

?>

<article id="post-<?php the_ID(); ?>"  <?php post_class('post-content'); ?>>

	<?php
	if (is_sticky() && is_home() && ! is_paged()) {
		printf( '<span class="sticky-post">%s</span>', __('Featured', 'nisarg'));
	} ?>
	<?php nisarg_featured_image_disaplay(); ?>



	<header class="entry-header">
		<div class="post-header">
			<div class="vacation-type-image col-sm-2">
				<img class="img-responsive" src="<?php the_field('vacation_type_image'); ?>" />
			</div>
			<div class="title col-sm-10">
				<span class="screen-reader-text"><?php the_title();?></span>
				<?php if( is_single()) : ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php else : ?>
					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
				<?php endif; // is_single() ?>
			</div>
		</div>

		<?php if ('post' == get_post_type()) : ?>
		<div class="entry-meta">
			<h5 class="entry-date"><?php nisarg_posted_on(); ?></h5>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
		
    <div class="entry-summary">

        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->		   	

	<footer class="entry-footer">
		<div class="fb-share-button" data-href="<?php the_permalink(); ?>"
			 data-layout="button_count"
			 data-size="small"
			 data-mobile-iframe="true">
			<a class="fb-xfbml-parse-ignore"
			   target="_blank"
			   href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
				Del
			</a>
		</div>
		<?php nisarg_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
