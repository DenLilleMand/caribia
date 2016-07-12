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
			<div class="container blog_post_container">
				<div class="col-sm-1 blog_post_container_col">
					<div class="blog_tripeSeeker_photo">
			<?php if( get_field('vacation_type_image') ): ?>
				<img src="<?php the_field('vacation_type_image'); ?>" />
			<?php endif; ?>
				</div>
				</div>

				<div class="col-sm-7 blog_post_info_container_col">
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
		
    <div class="entry-summary">

        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->		   	

	<footer class="entry-footer">
		<?php nisarg_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
