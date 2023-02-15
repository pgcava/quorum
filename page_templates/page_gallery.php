<?php
    /**
     * Template name: Galeria
     */
get_header(); ?>

<main class="quorum quorum--gallery">
    <section class="subpageHeader">
        <div class="subpageHeader__box">
            <div class="content">
                <p class="lead">Zobacz aktualne zdjęcia oraz wizualizacje</p>
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </section>

    <?php $gallery_all = get_field('gallery_all');
    if($gallery_all): ?>
    <section class="galleryList">
        <div class="galleryList__wrap container">
            <div class="galleryList__heading">
                <h2>Zdjęcia kompleksu</h2>
            </div>
            <div class="galleryList__list">
                <?php foreach( $gallery_all as $image ): ?>
                    <a href="<?php echo $image['url']; ?>" data-lightbox="all" class="image" style="background-image: url('<?php echo $image['url']; ?>')"></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php $gallery_lobby = get_field('gallery_lobby');
    if($gallery_lobby): ?>
    <section class="galleryList">
        <div class="galleryList__wrap container">
            <div class="galleryList__heading">
                <h2>Części wspólne</h2>
            </div>
            <div class="galleryList__list">
                <?php foreach( $gallery_lobby as $image ): ?>
                    <a href="<?php echo $image['url']; ?>" data-lightbox="lobby" class="image" style="background-image: url('<?php echo $image['url']; ?>')"></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php $gallery_mieszkania = get_field('gallery_mieszkania');
    if($gallery_mieszkania): ?>
    <section class="galleryList">
        <div class="galleryList__wrap container">
            <div class="galleryList__heading">
                <h2>Mieszkania w środku dzień/noc</h2>
            </div>
            <div class="galleryList__list">
                <?php foreach( $gallery_mieszkania as $image ): ?>
                    <a href="<?php echo $image['url']; ?>" data-lightbox="mieszkania" class="image" style="background-image: url('<?php echo $image['url']; ?>')"></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php $gallery_wykonczenia = get_field('gallery_wykonczenia');
    if($gallery_wykonczenia): ?>
    <section class="galleryList">
        <div class="galleryList__wrap container">
            <div class="galleryList__heading">
                <h2>Przykładowe wykończenia apartamentów</h2>
            </div>
            <div class="galleryList__list">
                <?php foreach( $gallery_wykonczenia as $image ): ?>
                    <a href="<?php echo $image['url']; ?>" data-lightbox="wykonczenia" class="image" style="background-image: url('<?php echo $image['url']; ?>')"></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php $gallery_plan = get_field('gallery_plan');
    if($gallery_plan): ?>
    <section class="galleryList">
        <div class="galleryList__wrap container">
            <div class="galleryList__heading">
                <h2>Zdjęcia z placu budowy</h2>
            </div>
            <div class="galleryList__list">
                <?php foreach( $gallery_plan as $image ): ?>
                    <a href="<?php echo $image; ?>" data-lightbox="plac" class="image" style="background-image: url('<?php echo $image; ?>')"></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>