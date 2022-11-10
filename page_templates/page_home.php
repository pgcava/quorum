<?php
    /**
     * Template name: Home
     */
get_header(); ?>


<main class="quorum quorum--home">
    <section class="homeHeader">
        <div class="homeHeader__video">
            <?php 
                $src = get_template_directory_uri() . '/images/homepage/video/quorum_heading_video_v2.mp4';
                echo do_shortcode('[videojs_video url="' . $src . '" autoplay="true" loop="true" muted="true" controls="false"]')
            ?>
        </div>
        <div class="homeHeader__wrap container">
            <div class="title">
                <h1>Quorum <span>The meeting place</span></h1>
                <a href="#"><span>Spotkajmy się</span></a>
            </div>
        </div>
    </section>
    <section class="homeOverview">
        <div class="homeOverview__wrap container">
            <div class="homeOverview__images">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/homepage/segments.png'; ?>" />
                </div>
            </div>
            <div class="homeOverview__content">
                <div class="heading">
                    <p class="lead">Quorum</p>
                    <h2>Nowoczesne Biura i Apartamenty Premium</h2>
                </div>
                <div class="content">
                    <p>Quorum to największy na Dolnym Śląsku projekt typu mixed-use. Kompleks pięciu budynków, o funkcji biurowej i mieszkaniowej usytuowany jest w ścisłym centrum, nad Odrą przy ul. Sikorskiego na wrocławskim Szczepinie.</p>
                    <p>Poza 341 mieszkaniami od Resi Capital znajdą się tu między innymi przestrzenie usługowe i biurowe, uzupełnione strefami zieleni i relaksu, tak, aby jak najlepiej odpowiedzieć na potrzeby rozwijającego się miasta i jego mieszkańców. Dowiedz się więcej:</p>
                </div>
                <div class="actions">
                    <a href="#"><span>Mieszkania</span></a>
                    <a href="#"><span>Biura</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="homeInfo">
        <div class="homeInfo__wrap container">
            <div class="homeInfo__heading">
                <p class="lead">Nowe miejsce spotkań</p>
                <h2>Poznaj Quorum</h2>
            </div>
            <div class="homeInfo__list">
                <div class="box">
                    <h3>106 280</h3>
                    <p>łącznej powierzchni GLA</p>
                </div>
                <div class="box">
                    <h3>1 220</h3>
                    <p>miejsc parkingowych dla biur</p>
                </div>
                <div class="box">
                    <h3>7 000</h3>
                    <p>powierzchni tarasów</p>
                </div>
                <div class="box">
                    <h3>330</h3>
                    <p>mieszkań</p>
                </div>
                <div class="box">
                    <h3>334</h3>
                    <p>miejsc parkingowych dla mieszkańców</p>
                </div>
                <div class="box">
                    <h3>3 000</h3>
                    <p>powierzchni usługowej</p>
                </div>
            </div>
        </div>
    </section>
    <section class="homeApartments">
        <div class="homeApartments__wrap container">
            <div class="homeApartments__heading">
                <p class="lead">Quorum apartments</p>
                <h2>Wybierz swoje wymarzone mieszkanie</h2>
            </div>
            <div class="homeApartments__list">
                <?php while(have_rows('homeApartments')): the_row(); 
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
    <section class="homeFeatured">
        <div class="homeFeatured__wrap container">
            <div class="homeFeatured__image">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/homepage/featuredimage.webp'; ?>"/>
                </div>
            </div>
            <div class="homeFeatured__content">
                <div class="heading">
                    <p class="lead">Kompleks</p>
                    <h2>Zalety mieszkania w Quorum Apartments</h2>
                </div>
                <div class="content" data="maincontent">
                    <p>Wyjątkowa lokalizacja, panoramiczne widoki i bezpośredni dostęp do stref relaksu, między innymi na nowo tworzonej promenadzie nad rzeką – to tylko niektóre zalety projektu Quorum.</p>
                </div>
                <div class="list featuredlist">
                    <div class="pos">
                        <h3>Bulwary i promenada</h3>
                        <div class="pos__content">
                            <p>Kompleks usytuowany jest przy samym nabrzeżu Odry, której bulwary stanowić będą strefę odpoczynku i rekreacji. Wzdłuż promenady planowany jest szereg lokali usługowych o funkcjach gastronomicznych z ogródkami i widokiem na rzekę.</p>
                        </div>
                    </div>
                    <div class="pos">
                        <h3>Zielone tarasy</h3>
                        <div class="pos__content">
                            <p>Quorum zostanie wyposażone w wielopoziomowe tarasy i patio z przestrzenią do relaksu oraz miejscem spotkań. Łącznie będzie to aż 7 000 m² zielonych terenów.</p>
                        </div>
                    </div>
                    <div class="pos">
                        <h3>Usługi</h3>
                        <div class="pos__content">
                            <p>W parterze obiektów Quorum od strony wschodniej, północnej i zachodniej znajdą się lokale usługowe ze sklepami, usługami i gastronomią, zaspokajając potrzeby najemców i mieszkańców kompleksu.</p>
                        </div>
                    </div>
                </div>
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
            </form>
        </div>
    </section>

    <section class="homeOverview homeOverview--offices">
        <div class="homeOverview__wrap container">
            <div class="homeOverview__images">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/homepage/overview_03.webp'; ?>" />
                </div>
                <div class="image image--fixed">
                    <div class="image__play">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/play_btn.svg'; ?>" />
                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/images/homepage/overview_04.webp'; ?>" />
                </div>
            </div>
            <div class="homeOverview__content">
                <div class="heading">
                    <p class="lead"><?php echo get_field('officesOverview_lead'); ?></p>
                    <h2><?php echo get_field('officesOverview_title'); ?></h2>
                </div>
                <div class="content">
                    <?php echo get_field('officesOverview_content'); ?>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="homeOverview__video">
            <div class="videoWrap">
                <div class="video">
                    <?php echo get_field('officesOverview_video'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="homeTable">
        <div class="homeTable__wrap container">
            <div class="homeTable__heading">
                <p class="lead">Office</p>
                <h2>Sprawdź dostępność</h2>
            </div>
            <div class="homeTable__table">
                <table class="table" border="0">
                    <thead>
                        <tr>
                            <th width="10%">Budynek</th>
                            <th width="10%">Powierzchnia GLA</th>
                            <th width="10%">Liczba pięter</th>
                            <th width="10%">Miejsca parkingowe</th>
                            <th width="10%">Dostępność</th>
                            <th width="10%">Floor plan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Quorum A</b></td>
                            <td>17800</td>
                            <td>12</td>
                            <td>339</td>
                            <td>Q2 2023</td>
                            <td><a href="#">Zobacz</a></td>
                        </tr>
                        <tr>
                            <td><b>Quorum B</b></td>
                            <td>51915</td>
                            <td>33</td>
                            <td>582</td>
                            <td>Q4 2024</td>
                            <td><a href="#">Zobacz</a></td>
                        </tr>
                        <tr>
                            <td><b>Quorum D</b></td>
                            <td>16230</td>
                            <td>6</td>
                            <td>229</td>
                            <td>OD ZARAZ</td>
                            <td><a href="#">Zobacz</a></td>
                        </tr>
                        <tr>
                            <td><b>Quorum E</b></td>
                            <td>4853</td>
                            <td>5</td>
                            <td>70</td>
                            <td>Q4 2025</td>
                            <td><a href="#">Zobacz</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="homeTeam">
        <div class="homeTeam__wrap container">
            <div class="homeTeam__heading">
                <p class="lead">Kontakt</p>
                <h2>Poznaj nasz zespół</h2>
            </div>
            <div class="homeTeam__list">
                <article class="teammate">
                    <div class="teammate__image">
                        <img src="<?php echo get_template_directory_uri() . '/images/homepage/teammate_01.webp'; ?>"/>
                        <a href="#" target="_blank" class="teammate__social"></a>
                    </div>
                    <div class="teammate__info">
                        <h3>Patryk Czernik</h3>
                        <p>Office Leasing Director</p>
                    </div>
                </article>
                <article class="teammate">
                    <div class="teammate__image">
                        <img src="<?php echo get_template_directory_uri() . '/images/homepage/teammate_02.webp'; ?>"/>
                        <a href="#" target="_blank" class="teammate__social"></a>
                    </div>
                    <div class="teammate__info">
                        <h3>Anna Lagowska-Cioch</h3>
                        <p>Head of Residential Sales</p>
                    </div>
                </article>
                <article class="teammate">
                    <div class="teammate__image">
                        <img src="<?php echo get_template_directory_uri() . '/images/homepage/teammate_03.webp'; ?>"/>
                        <a href="#" target="_blank" class="teammate__social"></a>
                    </div>
                    <div class="teammate__info">
                        <h3>Kamil Dolat</h3>
                        <p>Real Estate Agent</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="homeForm homeForm--map">
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
            </form>
        </div>
        <div class="homeForm__divider"></div>
    </section>

    <?php
    $args = array(
        'posts_per_page'	=> 3,
        'post_type'		    => 'news',
    );
    $query = new WP_Query($args);
    if( $query->have_posts() ): ?>
    <section class="homeNews">
        <div class="homeNews__wrap container">
            <div class="homeNews__heading">
                <p class="lead">News</p>
                <h2>Aktualności Quorum</h2>
            </div>
            <div class="homeNews__list">
                <?php while( $query->have_posts() ) : $query->the_post(); ?>
                <a href="<?php echo get_field('article_url'); ?>" class="article">
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
            <div class="homeNews__cta">
                <a href="#" class="btn"><span>Więcej</span></a>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

</main>

<?php get_footer(); ?>