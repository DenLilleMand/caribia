<?php
/**
 * Created by PhpStorm.
 * User: denlillemand
 * Date: 7/13/16
 * Time: 1:12 AM
 */
?>
<div class="excerpt col-sm-6">
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
<div class="main-image col-sm-6">
    <?php if (get_field('main_image')): ?>
        <img class="img-responsive" src="<?php the_field('main_image'); ?>"/>
    <?php endif; ?>
</div>