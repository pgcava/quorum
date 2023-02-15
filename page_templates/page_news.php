<?php
    /**
     * Template name: News
     */
get_header(); ?>

<main class="quorum quorum--news">
    <section class="subpageHeader">
        <div class="subpageHeader__box">
            <div class="content">
                <p class="lead">News</p>
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </section>

    <?php
    $args = array(
        'posts_per_page'	=> 999,
        'posts_status'	    => 'publish',
        'post_type'		    => 'news',
    );
    $query = new WP_Query($args);
    if( $query->have_posts() ): ?>
    <section class="newsList">
        <div class="newsList__wrap container">
            <?php while( $query->have_posts() ) : $query->the_post(); ?>
            <a href="<?php echo get_permalink(); ?>" class="article">
                <div class="article__thumb">
                    <img src="<?php echo get_field('article_thumb')['url']; ?>" alt="<?php echo get_field('article_thumb')['alt']; ?>" />
                </div>
                <div class="article__content">
                    <p class="type"><?php echo get_field('article_type')['label']; ?></p>
                    <h3><?php echo get_the_title(); ?></h3>
                </div>
            </a>
            <?php endwhile; ?>
        </div>
    </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>