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
                    <a href="https://cavatina.pl/" class="btn"><span>Dowiedz się więcej</span></a>
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
    
    <section class="homeOverview homeOverview--about">
        <div class="homeOverview__wrap container">
            <div class="homeOverview__images">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/about/about_image_02.jpg'; ?>" />
                </div>
            </div>
            <div class="homeOverview__content">
                <div class="heading">
                    <p class="lead">Model biznesowy</p>
                    <h2>Szerokie kompetencje wewnątrz Grupy</h2>
                </div>
                <div class="content">
                    <p>Cavatina Holding stworzyła unikatowy model biznesowy, który opiera się na konsekwentnym budowaniu rozległych kompetencji wewnątrz Grupy. Cavatina Holding samodzielnie zarządza wszystkimi kluczowymi etapami procesu inwestycyjnego, od analizy i zakupu gruntów, przez projektowanie, generalne wykonawstwo i zarządzanie budżetem projektu, aż po komercjalizację obiektu, wykończenie, aranżację wnętrz i zarządzanie budynkiem w fazie operacyjnej. Skupienie wszystkich kluczowych kompetencji pozwala obok elastyczności względem Klienta, ograniczać ryzyka i zachowywać marże wewnątrz organizacji na każdym etapie realizacji, co przekłada się na wysokie łączne marże osiągane na prowadzonych projektach.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutImages">
        <div class="aboutImages__wrap">
            <div class="aboutImages__image">
                <img src="<?php echo get_template_directory_uri() . '/images/about/about_image_full_01.jpg'; ?>" />
            </div>
            <div class="aboutImages__image aboutImages__image--fixed">
                <img src="<?php echo get_template_directory_uri() . '/images/about/about_image_full_02.jpg'; ?>" />
            </div>
        </div>
    </section>

    <section class="homeOverview homeOverview--reverse">
        <div class="homeOverview__wrap container">
            <div class="homeOverview__images">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/about/about_projects.jpg'; ?>" />
                </div>
            </div>
            <div class="homeOverview__content">
                <div class="heading">
                    <p class="lead">Cavatina i Resi Capital</p>
                    <h2>Nasze projekty</h2>
                </div>
                <div class="content">
                    <p>Realizowane przez Grupę Cavatina Holding projekty wyróżniają się unikalną architekturą, nagradzaną w polskich i międzynarodowych konkursach oraz wysoką jakością wykończenia. Cavatina Holding kładzie również nacisk na zrównoważone budownictwo, co znajduje potwierdzenie w otrzymanych certyfikatach BREEAM i WELL HSR. Grupa przywiązuje dużą wagę do miastotwórczej roli swoich projektów, dbając o ich naturalne wpasowanie w istniejącą tkankę miejską i zaspokojenie potrzeb lokalnej społeczności.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutProjects">
        <div class="aboutProjects__wrap container">
            <div class="aboutProjects__list">
                <h3>Cavatina</h3>
                <ul>
                    <?php while(have_rows('cavatina_projects')): the_row(); ?>
                    <li><p class="city"><?php echo get_sub_field('cavatina_projects_city'); ?></p><p><?php echo get_sub_field('cavatina_projects_name'); ?></p></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="aboutProjects__list">
                <h3>Resi Capital</h3>
                <ul>
                <?php while(have_rows('resi_projects')): the_row(); ?>
                    <li><p class="city"><?php echo get_sub_field('resi_projects_city'); ?></p><p><?php echo get_sub_field('resi_projects_name'); ?></p></li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>