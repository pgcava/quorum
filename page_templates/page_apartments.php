<?php
    /**
     * Template name: Mieszkania
     */
get_header(); ?>

<main class="quorum quorum--apartments">
    <section class="subpageHeader">
        <div class="subpageHeader__box">
            <div class="content">
                <p class="lead">Quorum Apartments</p>
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </section>
    <section class="apOverview">
        <div class="apOverview__wrap container">
            <div class="apOverview__content">
                <div class="heading">
                    <p class="lead"><?php echo get_field('apOverview_lead'); ?></p>
                    <h2><?php echo get_field('apOverview_title'); ?></h2>
                </div>
                <div class="content">
                    <?php echo get_field('apOverview_content'); ?>
                </div>
                <div class="info">
                    <div class="info__pos">
                        <h3>15 489</h3>
                        <p>Powierzchni</p>
                    </div>
                    <div class="info__pos">
                        <h3>340</h3>
                        <p>Dostępnych mieszkań</p>
                    </div>
                    <div class="info__pos">
                        <h3>346</h3>
                        <p>Dostępnych miejsc parkingowych</p>
                    </div>
                </div>
            </div>
            <div class="apOverview__images">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/apartments/apartment.jpg'; ?>" />
                    <div class="image__play">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/play_btn.svg'; ?>" />
                    </div>
                </div>
            </div>
            <div class="apOverview__video">
                <div class="videoWrap">
                    <?php
                        $src = get_template_directory_uri() . '/images/homepage/video/quorum_heading_video_v2.mp4';
                        echo do_shortcode('[videojs_video url="' . $src . '"]')
                    ?>
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

    <section class="typesInfo">
        <div class="typesInfo__wrap container">
            <div class="typesInfo__heading">
                <p class="lead">Szczegóły</p>
                <h2>Rodzaje mieszkań</h2>
            </div>
            <div class="typesInfo__nav">
                <?php while(have_rows('typesList')): the_row(); ?>
                    <button type="button" value="<?php echo get_sub_field('typesList_name'); ?>" class="nav-btn"><span><?php echo get_sub_field('typesList_name'); ?></span></button>
                <?php endwhile; ?>
            </div>
            <div class="typesInfo__list">
                <?php while(have_rows('typesList')): the_row();
                    $name = get_sub_field('typesList_name');
                    $desc = get_sub_field('typesList_desc');
                    $rooms = get_sub_field('typesList_rooms');
                    $sqm = get_sub_field('typesList_sqm');
                    $price = get_sub_field('typesList_price');
                    $available = get_sub_field('typesList_available');
                    $image = get_sub_field('typesList_image');
                ?>
                <div class="typeSlide" data-value="<?php echo $name; ?>">
                    <div class="typeSlide__content">
                        <p><?php echo $desc; ?></p>
                        <ul class="list">
                            <li><p class="label">Pomieszczenia</p><p class="value"><?php echo $rooms; ?></p></li>
                            <li><p class="label">Powierzchnia</p><p class="value"><?php echo $sqm; ?> m²</p></li>
                            <li><p class="label">Cena</p><p class="value">od <?php echo $price; ?> za m²</p></li>
                            <li><p class="label">Dostępność</p><p class="value"><?php echo $available; ?></p></li>
                        </ul>
                        <a href="#" class="btn"><span>Zapytaj o cenę</span></a>
                    </div>
                    <div class="typeSlide__image">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="apGallery">
        <div class="apGallery__big" style="background-image: url(<?php echo get_field('apVirtual_image'); ?>);">
            <a href="<?php echo get_field('apVirtual_url'); ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/images/icons/play_btn.svg'; ?>" />
                <span>Wirtualny spacer</span>
            </a>
        </div>
        <div class="apGallery__list">
            <?php $images = get_field('apGallery'); ?>
            <?php foreach( $images as $image ): ?>
            <div class="image">
                <img src="<?php echo $image['url']; ?>" />
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="homeApartments">
        <div class="homeApartments__wrap container">
            <div class="homeApartments__heading">
                <p class="lead">Quorum apartments</p>
                <h2>Wybierz swoje wymarzone mieszkanie</h2>
            </div>
            <div class="homeApartments__list">
                <?php while(have_rows('homeApartments', 10)): the_row(); 
                    $type = get_sub_field('homeApartments_type');
                    $rooms = get_sub_field('homeApartments_rooms');
                    $floor = get_sub_field('homeApartments_floor');
                    $meters = get_sub_field('homeApartments_meters');
                    $image = get_sub_field('homeApartments_image');
                    $url = get_sub_field('homeApartments_url');
                ?>
                <article class="apartment">
                    <div class="apartment__heading">
                        <p>Quorum Apartments</p>
                        <h3><?php echo $type['label']; ?></h3>
                    </div>
                    <div class="apartment__info">
                        <div class="pos">
                            <p><b><?php echo $rooms; ?></b> <?php if($rooms == 1): ?>pokój<?php elseif($rooms > 1 && $rooms < 5): ?>pokoje<?php elseif($rooms == 5): ?>pokoi<?php endif; ?></p>
                        </div>
                        <div class="pos">
                            <p><b><?php echo $floor; ?></b> piętro</p>
                        </div>
                        <div class="pos">
                            <p><b><?php echo $meters; ?></b> m²</p>
                        </div>
                    </div>
                    <div class="apartment__image">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    </div>
                    <div class="apartment__actions">
                        <a href="<?php echo $url; ?>"><span>Więcej informacji</span></a>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>
            <div class="homeApartments__actions">
                <a href="#"><span>Więcej mieszkań</span></a>
            </div>
        </div>
    </section>

    <section class="homeForm">
        <div class="homeForm__wrap">
            <form class="visitForm">
                <div class="visitForm__heading">
                    <p class="lead">Quorum Apartments</p>
                    <h2>Umów wizytę</h2>
                </div>
                <div class="visitForm__row">
                    <input type="text" placeholder="Imię i nazwisko" name="visitName" />
                </div>
                <div class="visitForm__row">
                    <input type="email" placeholder="Email" name="visitEmail" />
                </div>
                <div class="visitForm__row">
                    <input type="phone" placeholder="Telefon" name="visitPhone" />
                </div>
                <div class="visitForm__row">
                    <p>Interesują mnie:</p>
                    <div class="options">
                        <div class="options__option checked radioEngine">
                            <input type="radio" name="visitType" value="residences" checked/>
                            <div class="checker"></div>
                            <label>Mieszkania</label>
                        </div>
                        <div class="options__option radioEngine">
                            <input type="radio" name="visitType" value="offices"/>
                            <div class="checker"></div>
                            <label>Biura</label>
                        </div>
                    </div>
                </div>
                <div class="visitForm__submit">
                    <button type="submit"><span>Umów spotkanie</span></button>
                </div>
                <div class="visitForm__acceptance">
                    <p>Wyrażam zgodę na przetwarzanie moich danych osobowych przekazanych za pośrednictwem formularza kontaktowego na zasadach określonych w <a href="https://cavatina.pl/rodo/gw/klauzula.pdf">polityce prywatności</a>.</p>
                    <p>Wyrażam zgodę na prowadzenie marketingu bezpośredniego oraz przesyłanie mi informacji marketingowych i ofert handlowych na podany w formularzu adres mailowy.</p>
                </div>
            </form>
        </div>
        <div class="homeForm__divider"></div>
    </section>
</main>

<?php get_footer(); ?>