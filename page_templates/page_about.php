<?php
    /**
     * Template name: O nas
     */
get_header(); ?>

<main class="quorum quorum--about">
    <section class="subpageHeader">
        <div class="subpageHeader__box">
            <div class="content">
                <p class="lead">Cavatina Group</p>
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="apOverview apOverview--about">
        <div class="apOverview__wrap container">
            <div class="apOverview__content">
                <div class="heading">
                    <p class="lead"><?php echo get_field('apOverview_lead'); ?></p>
                    <h2><?php echo get_field('apOverview_title'); ?></h2>
                </div>
                <div class="content">
                    <?php echo get_field('apOverview_content'); ?>
                </div>
                <div class="cta">
                    <a href="#" class="btn"><span>Dowiedz się więcej</span></a>
                </div>
            </div>
            <div class="apOverview__images">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/about/about_image.jpg'; ?>" />
                    <div class="image__play">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/play_btn.svg'; ?>" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if(get_field('usp_list')): ?>
    <section class="apInfo">
        <div class="apInfo__wrap container">
            <div class="apInfo__list">
                <?php while(have_rows('usp_list')): the_row();
                    $icon = get_sub_field('usp_list_icon');   
                    $title = get_sub_field('usp_list_title');   
                    $content = get_sub_field('usp_list_content');   
                ?>
                <div class="pos">
                    <div class="pos__icon">
                        <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt']; ?>" />
                    </div>
                    <h3><?php echo $title; ?></h3>
                    <p><?php echo $content; ?></p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
</main>

<?php get_footer(); ?>