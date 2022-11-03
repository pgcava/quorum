<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quorum
 */

?>

	<footer id="colophon" class="siteFooter">
		<div class="siteFooter__wrap container">
			<div class="siteFooter__info">
				<div class="logo">
					<img src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>"/>
				</div>
				<div class="contact">
					<div class="contact__row">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/marker_ico.svg'; ?>" />
						<p><a href="#">Gen. Władysława Sikorskiego, 53-659 Wrocław</a></p>
					</div>
					<div class="contact__row">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/phone_ico.svg'; ?>" />
						<p><a href="tel:+48661990995">+48 661 990 995</a></p>
					</div>
					<div class="contact__row">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/phone_ico.svg'; ?>" />
						<p><a href="tel:+48530052270">+48 530 052 270</a> lub <a href="tel:+48530075031">+48 530 075 031</a></p>
					</div>
				</div>
			</div>
			<div class="siteFooter__menu">
				<h3>O nas</h3>
				<ul>
					<li><a href="#">Quorum</a></li>
					<li><a href="#">Zespół</a></li>
					<li><a href="#">Polityka Prywatności</a></li>
				</ul>
			</div>
			<div class="siteFooter__menu">
				<h3>Oferta</h3>
				<ul>
					<li><a href="#">Apartamenty</a></li>
					<li><a href="#">Biura</a></li>
				</ul>
			</div>
			<div class="siteFooter__social">
				<h3>Kontakt</h3>
				<div class="social">
					<a href="#"></a>
					<a href="#"></a>
					<a href="#"></a>
					<a href="#"></a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
