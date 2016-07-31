g<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Nisarg
 */

?>

	</div><!-- #content -->
	
		<footer id="colophon" class="site-footer footer-distributed" role="contentinfo">
			<div class="container">
	<div class="col-md-4">
<div class="margin_mobile">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img id="footer_tripseeker_logo" src="<?php bloginfo('stylesheet_directory')?>/images/logo.png"</img></a>
				<p class="footer-company-name">© 2016 by tripseeker - by W&R</p>
</div>
</div>

	<div class="col-md-4">
		<div class="margin_mobile">

		<p class="footer-company-about">
			<span>Om tripseeker</span>
			Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
		</p>

		<div class="footer-icons">

			<a href="http://facebook.dK" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>

		</div>
	</div>
		</div>
	<div class="col-md-4">
		<div class="margin_mobile">

				<div class="footer_address">
					<i class="fa fa-map-marker"></i>
					<p>Lyngvej 45 - 6710 Esbjerg V</p>
				</div>

				<div class="footer_address">
					<i class="fa fa-phone"></i>
					<p class="footer_text">+1 555 123456</p>
				</div>

				<div class="footer_address">
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">kontakt@tripseeker.dk</a></p>
				</div>
		</div>


	</div>
			</div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
