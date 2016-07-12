<?php
/**
 * Created by PhpStorm.
 * User: denlillemand
 * Date: 7/13/16
 * Time: 1:11 AM
 */
?>
<div class="main-image col-sm-6">
			<?php if( get_field('main_image') ): ?>
    <img class="img-responsive" src="<?php the_field('main_image'); ?>" />
<?php endif; ?>
</div>
<div class="excerpt col-sm-6">
    <?php the_excerpt(); ?>
    <div class="excerpt-footer">
        <div class="facebook-button">
            <div class="fb-like"
                 data-share="true"
                 data-width="200"
                 data-show-faces="true">
                <a class="fb-xfbml-parse-ignore"
                   target="_blank"
                   href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
                </a>
            </div>
        </div>
        <div class="offer-button">
            <a class="btn btn-lg btn-success" href="<?php the_permalink(); ?>">
                <i class="fa fa-plane fa-2x pull-left"></i> Læs mere . . .</a>
        </div>
    </div>
</div>