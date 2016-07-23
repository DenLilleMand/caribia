<?php
/**
 * Template part for displaying posts.
 *
 * @package Nisarg
 */
?>

<!--<div class="col-sm-2 blog_post_container_col">
	<h2 class="entry-title">
		<div class="blog_tripeSeeker_photo">
			<?php if( get_field('vacation_type_image') ): ?>
				<img src="<?php the_field('vacation_type_image'); ?>" />
			<?php endif; ?>
			<?php if( get_field('vacation_type_text') ): ?>
				<p class="blog_info_photo_descri">
					<?php the_field('vacation_type_text'); ?>
				</p>
			<?php endif; ?>
		</div>
	</h2>
</div>-->


<article id="post-<?php the_ID(); ?>"  <?php post_class('col-md-4'); ?>>

	<?php
	if (is_sticky() && is_home() && ! is_paged()) {
		printf( '<span class="sticky-post">%s</span>', __('Featured', 'nisarg'));
	} ?>
	<?php nisarg_featured_image_disaplay(); ?>
	<div class="main-image">
		<?php if( get_field('main_image') ): ?>
			<img class="img-responsive " src="<?php the_field('main_image'); ?>" />
		<?php endif; ?>
	</div>
		<?php if( get_field('vacation_type_image') ): ?>
			<img src="<?php the_field('vacation_type_image');  ?>" class="post-vacation-type" />
		<?php endif; ?>
	<header class="entry-header">
		<div class="post-header">
				<div class="row blog_post_container">
					<div class="col-sm-12 blog_post_info_container_col">
						<div class="blog_post_info_container">
							<div class="blog_post_info_container_margin">
								<span class="screen-reader-text"><?php the_title();?></span>
								<?php if( is_single()) : ?>
									<h1 class="entry-title blog_post_header"><?php the_title(); ?></h1>
								<?php else : ?>
									<h2 class="blog_post_info entry-title">
										<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h2>
								<?php endif; // is_single() ?>
								<?php if ('post' == get_post_type()) : ?>
									<div class="entry-meta">
										<h5 class="blog_post_info entry-date"><?php nisarg_posted_on(); ?></h5>
									</div><!-- .entry-meta -->
								<?php endif; ?>
							</div>
						</div>
					</div>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-summary row">
		<div class="excerpt">
			<?php the_excerpt(); ?>
			<div class="excerpt-footer">
				<div class="facebook-button">
					<div class="fb-like"
						 data-share="true"
						 data-width="500"
						 data-show-faces="true">
						<a class="fb-xfbml-parse-ignore"
						   target="_blank"
						   href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
						</a>
					</div>
				</div>
			</div>
		</div>

	</div><!-- .entry-summary -->
	<!--<footer class="entry-footer">
		<?php nisarg_entry_footer(); ?>
	</footer> -->
</article><!-- #post-## -->