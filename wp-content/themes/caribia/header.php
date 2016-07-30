<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Nisarg
 */

?>
<!DOCTYPE html>

<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta property="og:url"           content="<?php bloginfo('url');?>"/>
<meta property="og:type"          content="Traveling blog" />
<meta property="og:title"         content="<?php bloginfo('name'); ?>" />
<meta property="og:description"   content="<?php bloginfo('description'); ?>" />
<meta property="og:image"         content="<?php bloginfo('stylesheet_directory')?>/images/tripseekerlogo.jpg" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/da_DK/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1141137052611786',
            xfbml      : true,
            version    : 'v2.6'
        });
    };
</script>
<!-- Starting real body -->
<div id="page" class="hfeed site">
<header id="masthead"  role="banner">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
      <!-- Brand and toggle get grouped for better mobile display --> 
      <div class="container" id="navigation_menu">
          <?php if ( has_nav_menu( 'primary' ) ) { ?>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
            <span class="sr-only">Toggle navigation</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
          </button> 
          <?php } ?>
          <?php if ( has_nav_menu( 'primary' ) ) {
              nisarg_header_menu(); // main navigation 
            }
          ?>
        
      </div><!--#container-->
    </nav>
  <div id="cc_spacer"></div><!-- used to clear fixed navigation by the themes js --> 
    <?php if(is_single() && !is_front_page()) { ?>
          <div class="post-header">
          	<?php if( get_field('main_image_content') ): ?>
			    <img class="img-responsive " src="<?php the_field('main_image_content'); ?>" />
                <div class="text-container">
                    <h2>Travel<br />Better. </br> Cheaper. </br>Longer.</h2>
                </div>
		    <?php endif; ?>
        </div><!--.site-header--> 
    <?php } else { ?>
        <div class="site-header">
            <div class="site-branding">
                <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </div><!--.site-branding-->
        </div><!--.site-header--> 
<?php } ?>
 
</header>   

<div id="content" class="site-content">
    
    
    