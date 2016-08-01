<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nisarg
 */

get_header(); ?>

	<div class="post-grid container">
						<main id="main" class="site-main" role="main">

						<?php if ( have_posts() ) : ?>

							<?php if ( is_home() && ! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
							<?php endif; ?>

							<?php
							/**
							 * count = 1,   if(count = 1) {div class="row"}
							 * if (count % 3 = 0) { end div. Start new div }
							 * if(count = last post) { end div }
							 *
							 */
							$count = 1;
							$POSTS_PER_PAGE = 6;
							while(have_posts()) : the_post();
							?>

								<?php
									if($count == 1 || $count == 4 || $count == 7 || $count == 10) { ?>
										<div class="row post-grid-row">
									<?php }
									/*
									 * If you want to disaplay only excerpt, file content-excerpt.php will be used.
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									$post_display_option = get_theme_mod('post_display_option','post-excerpt');
									
		    						if($post_display_option == 'post-excerpt') {
		        						get_template_part( 'template-parts/content','excerpt');
		        					}
		        					else {
		        						get_template_part( 'template-parts/content', get_post_format() );
		        					}
									$count_posts = wp_count_posts('post','readable');
									$published_posts = $count_posts->publish;
									if($count == $published_posts || $count % 3 == 0) { ?>
										</div>
									<?php }
									$count++;
									
								?>

							<?php endwhile; ?>

							<?php nisarg_posts_navigation(); ?>

						<?php else : ?>

							<?php get_template_part( 'template-parts/content', 'none' ); ?>

						<?php endif; ?>

						</main><!-- #main -->
					
		</div><!--.container-->
		
		<?php get_footer(); ?>	
    
