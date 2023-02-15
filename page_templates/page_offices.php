<?php
    /**
     * Template name: Biura
     */
get_header(); ?>

<main class="quorum quorum--offices">
    <section class="subpageHeader">
        <div class="subpageHeader__box">
            <div class="content">
                <p class="lead">Quorum</p>
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="apOverview apOverview--offices">
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
                        <h3>86 000</h3>
                        <p>M² powierzchni GLA</p>
                    </div>
                    <div class="info__pos">
                        <h3>76 758</h3>
                        <p>Dostępnej powierzchni biurowej</p>
                    </div>
                    <div class="info__pos">
                        <h3>1 114</h3>
                        <p>Dostępnych miejsc parkingowych</p>
                    </div>
                </div>
            </div>
            <div class="apOverview__images">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/offices/offices.jpg'; ?>" />
                    <?php if(get_field('apOverview_video')): ?>
                    <div class="image__play">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/play_btn.svg'; ?>" />
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(get_field('apOverview_video')): ?>
            <div class="apOverview__video">
                <div class="videoWrap">
                    <div class="video">
                        <?php echo get_field('apOverview_video'); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
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

    <section class="typesInfo typesInfo--offices"> 
        <div class="typesInfo__wrap container">
            <div class="typesInfo__heading">
                <p class="lead">Szczegóły</p>
                <h2>Rodzaje biur</h2>
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
                    $plan = get_sub_field('typesList_plan');
                    $office_sq = get_sub_field('typesList_office_sq');
                    $services_sq = get_sub_field('typesList_services_sq');
                    $terrace_sq = get_sub_field('typesList_terrace_sq');
                    $floors = get_sub_field('typesList_floors');
                    $parking = get_sub_field('typesList_parking');
                    $available = get_sub_field('typesList_available');
                    $pdf = get_sub_field('typesList_pdf');
                ?>
                <div class="typeSlide" data-value="<?php echo $name; ?>">
                    <div class="typeSlide__content">
                        <p><?php echo $desc; ?></p>
                        <ul class="list">
                            <li><p class="label">Powierzchnia biurowa</p><p class="value"><?php echo $office_sq; ?> m²</p></li>
                            <li><p class="label">Powierzchnia usługowa</p><p class="value"><?php echo $services_sq; ?> m²</p></li>
                            <?php if($terrace_sq): ?>
                            <li><p class="label">Powierzchnia tarasów</p><p class="value"><?php echo $terrace_sq; ?> m²</p></li>
                            <?php endif; ?>
                            <li><p class="label">Piętra </p><p class="value"><?php echo $floors; ?></p></li>
                            <li><p class="label">Miejsca parkingowe</p><p class="value"><?php echo $parking; ?></p></li>
                            <li><p class="label">Dostępność</p><p class="value"><?php echo $available; ?></p></li>
                        </ul>
                        <a href="<?php echo $pdf; ?>" class="btn"><span>Pobierz PDF</span></a>
                    </div>
                    <div class="typeSlide__image">
                        <img src="<?php echo $plan['url']; ?>" alt="<?php echo $plan['alt']; ?>"/>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="apGallery">
        <div class="apGallery__big" style="background-image: url(<?php echo get_field('apVirtual_image')['url']; ?>);">
            <a href="<?php // echo get_field('apVirtual_url'); ?>" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/images/icons/play_btn.svg'; ?>" />
                <span>Zobacz wideo</span>
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

    <section class="homeTable homeTable--offices">
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Quorum A</b></td>
                            <td>17800</td>
                            <td>11</td>
                            <td>339</td>
                            <td>Q2 2023</td>
                        </tr>
                        <tr>
                            <td><b>Quorum B</b></td>
                            <td>51915</td>
                            <td>35</td>
                            <td>582</td>
                            <td>Q4 2024</td>
                        </tr>
                        <tr>
                            <td><b>Quorum D</b></td>
                            <td>16230</td>
                            <td>5</td>
                            <td>229</td>
                            <td>OD ZARAZ</td>
                        </tr>
                        <tr>
                            <td><b>Quorum E</b></td>
                            <td colspan="4">W FAZIE PROJEKTOWANIA</td>
                        </tr>
                    </tbody>
                </table>
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
                <div class="notices"></div>
                <div class="visitForm__row">
                    <input type="text" placeholder="Imię i nazwisko" name="visitName" required/>
                </div>
                <div class="visitForm__row">
                    <input type="email" placeholder="Email" name="visitEmail" required/>
                </div>
                <div class="visitForm__row">
                    <input type="phone" placeholder="Telefon" name="visitPhone" required/>
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