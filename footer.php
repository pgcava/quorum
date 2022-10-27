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
						<img src="<?php echo get_template_directory_uri() . '/images/icons/phone_ico.svg'; ?>" />
						<p><a href="tel:512342345">+48 512 342 345</a> or <a href="tel:512342345">+48 513 372 3543</a></p>
					</div>
					<div class="contact__row">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/mail_ico.svg'; ?>" />
						<p><a href="mailto:contact.tayta@gmail.com">contact.tayta@gmail.com</a></p>
					</div>
					<div class="contact__row">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/marker_ico.svg'; ?>" />
						<p><a href="#">2159 Ralph, Brooklyn, NY, United States</a></p>
					</div>
					<div class="contact__row">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/clock_ico.svg'; ?>" />
						<p>8am - 6pm EST, Monday - Sunday</p>
					</div>
				</div>
			</div>
			<div class="siteFooter__menu">
				<h3>About</h3>
				<ul>
					<li><a href="#">Services</a></li>
					<li><a href="#">Team Member</a></li>
					<li><a href="#">Propreties</a></li>
					<li><a href="#">About us</a></li>
				</ul>
			</div>
			<div class="siteFooter__menu">
				<h3>Explore</h3>
				<ul>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Contact us</a></li>
					<li><a href="#">Request Viewing</a></li>
				</ul>
			</div>
			<div class="siteFooter__social">
				<h3>Connect</h3>
				<div class="social">
					<a href="#"></a>
					<a href="#"></a>
					<a href="#"></a>
					<a href="#"></a>
				</div>
				<p>We bring the years, global experience, and stamina to guide our clients through new.</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
