<?php
/**
 * The template for displaying all single news
 *
 * @package Quorum
 */

get_header();
?>

	<main class="singleArticle">
        <section class="subpageHeader"></section>

        <div class="singleArticle__content container">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

	</main><!-- #main -->

<?php
get_footer();
