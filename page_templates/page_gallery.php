<?php
    /**
     * Template name: Galeria
     */
get_header(); ?>

<main class="quorum quorum--gallery">
    <section class="subpageHeader">
        <div class="subpageHeader__box">
            <div class="content">
                <p class="lead">Zobacz postępy na placu budowy</p>
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </section>
    <?php $gallery_plan = get_field('gallery_plan');
    if($gallery_plan): ?>
    <section class="galleryList">
        <div class="galleryList__wrap container">
            <div class="galleryList__heading">
                <h2>Zdjęcia z planu budowy</h2>
            </div>
            <div class="galleryList__list">
                <?php foreach( $gallery_plan as $image ): ?>
                    <a href="<?php echo $image['url']; ?>" data-lightbox="plac" class="image" style="background-image: url('<?php echo $image['url']; ?>')"></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php $gallery_wiz = get_field('gallery_wizualizacje');
    if($gallery_wiz): ?>
    <section class="galleryList">
        <div class="galleryList__wrap container">
            <div class="galleryList__heading">
                <h2>Wizualizacje</h2>
            </div>
            <div class="galleryList__list">
                <?php foreach( $gallery_wiz as $image ): ?>
                    <a href="<?php echo $image['url']; ?>" data-lightbox="wizualizacje" class="image" style="background-image: url('<?php echo $image['url']; ?>')"></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>