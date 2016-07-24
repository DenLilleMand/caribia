<?php

if ( ! function_exists( 'secondary_header_menu' ) ) :
    /**
     * Header menu (should you choose to use one)
     */
    function secondary_header_menu() {
      // display the WordPress Custom Menu if available
      wp_nav_menu(array(
        'theme_location'    => 'secondary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse navbar-ex2-collapse col-md-4',
        'menu_class'        => 'nav navbar-nav pull-left',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker()
      ));
    } /* end header menu */
endif;