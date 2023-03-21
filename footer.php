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
	<div id="scrollTop" class="scrollTop">
		<img src="<?php echo get_template_directory_uri() . '/images/icons/slider_arrow_left.svg'; ?>" />
	</div>
	<footer id="colophon" class="siteFooter">
		<div class="siteFooter__wrap container">
			<div class="siteFooter__info">
				<div class="logo">
					<img src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>"/>
				</div>
				<div class="contact">
					<div class="contact__row">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/marker_ico.svg'; ?>" />
						<p>Inwestycja - <a href="https://goo.gl/maps/CY1kmm1qRN3UE1Qf8" target="_blank">Gen. Władysława Sikorskiego 13, 53-659 Wrocław</a></p>
					</div>
					<div class="contact__row">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/marker_ico.svg'; ?>" />
						<p>Biuro sprzedaży - <a href="https://goo.gl/maps/nDzPnLGHDnJaDa4u7" target="_blank">Fabryczna 6, 53-609 Wrocław</a></p>
					</div>
					<div class="contact__row">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/phone_ico.svg'; ?>" />
						<p>Mieszkania: <a href="tel:+48530052270">+48 530 052 270</a> lub <a href="tel:+48530044913">+48 530 044 913</a></p>
					</div>
					<div class="contact__row">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/phone_ico.svg'; ?>" />
						<p>Biura: <a href="tel:+48661990995">+48 661 990 995</a> lub <a href="tel:+48537098334">+48 537 098 334</a></p>
					</div>
				</div>
			</div>
			<div class="siteFooter__menu">
				<h3>O nas</h3>
				<ul>
					<li><a href="<?php echo home_url(); ?>">Quorum</a></li>
					<li><a href="<?php echo home_url() . '#team'; ?>">Zespół</a></li>
					<li><a href="https://cavatina.pl/rodo/gw/klauzula.pdf">Polityka Prywatności</a></li>
				</ul>
			</div>
			<div class="siteFooter__menu">
				<h3>Zobacz</h3>
				<ul>
					<li><a href="<?php echo home_url() . '/mieszkania'; ?>">Apartamenty</a></li>
					<li><a href="<?php echo home_url() . '/biura'; ?>">Biura</a></li>
					<li><a href="<?php echo home_url() . '/galeria'; ?>">Galeria</a></li>
				</ul>
			</div>
			<div class="siteFooter__social">
				<h3>Kontakt</h3>
				<div class="social">
					<a href="https://www.facebook.com/ResiCapital" class="facebook">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/social/fb_ico.svg'; ?>" />
					</a>
					<a href="https://www.instagram.com/resi.capital/">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/social/ig_ico.svg'; ?>" />
					</a>
					<a href="https://www.linkedin.com/company/resi-capital/">
						<img src="<?php echo get_template_directory_uri() . '/images/icons/social/in_ico.svg'; ?>" />
					</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div class="quorumModal">
		<div class="quorumModal__wrap">
			<div class="quorumModal__close">
				<img src="<?php echo get_template_directory_uri() . '/images/quorum_modal_close.svg'; ?>"/>
			</div>
			<a href="https://quorumapartments.pl/">
				<img src="<?php echo get_template_directory_uri() . '/images/break_modal.jpg'; ?>"/>
			</a>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
