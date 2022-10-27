<?php
    /**
     * Template name: Home
     */
get_header(); ?>

<main class="quorum quorum--home">
    <section class="homeHeader">
        <div class="homeHeader__wrap container">
            <div class="title">
                <h1>Quorum <span>The meeting place</span></h1>
                <a href="#"><span>Schedue a visit</span></a>
            </div>
        </div>
    </section>
    <section class="homeOverview">
        <div class="homeOverview__wrap container">
            <div class="homeOverview__images">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/images/homepage/overview_01.webp'; ?>" />
                </div>
                <div class="image image--fixed">
                    <div class="image__play">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/play_btn.svg'; ?>" />
                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/images/homepage/overview_02.webp'; ?>" />
                </div>
            </div>
            <div class="homeOverview__content">
                <div class="heading">
                    <p class="lead">Overview</p>
                    <h2>Modern Offices and Premium Apartments</h2>
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet , consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam , quis nostrud exercitation ullamco laboris</p>
                    <p>Lorem ipsum dolor sit amet , consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam , quis nostrud exercitation ullamco laboris</p>
                </div>
                <div class="actions">
                    <a href="#"><span>Residential</span></a>
                    <a href="#"><span>Office</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="homeInfo">
        <div class="homeInfo__wrap container">
            <div class="homeInfo__heading">
                <p class="lead">The meeting place</p>
                <h2>Discover Quorum</h2>
            </div>
            <div class="homeInfo__list">
                <div class="box">
                    <h3>106 280</h3>
                    <p>Total Office GLA</p>
                </div>
                <div class="box">
                    <h3>1 220</h3>
                    <p>Car parking for office</p>
                </div>
                <div class="box">
                    <h3>7 000</h3>
                    <p>Terraces area</p>
                </div>
                <div class="box">
                    <h3>330</h3>
                    <p>Apartments</p>
                </div>
                <div class="box">
                    <h3>334</h3>
                    <p>Car parking for residence</p>
                </div>
                <div class="box">
                    <h3>3 000</h3>
                    <p>Service area</p>
                </div>
            </div>
        </div>
    </section>
    <section class="homeApartments">
        <div class="homeApartments__wrap container">
            <div class="homeApartments__heading">
                <p class="lead">Quorum apartments</p>
                <h2>Choose an Apartment</h2>
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
                            <p><b><?php echo $rooms; ?></b> room<?php if($rooms > 1): ?>s<?php endif; ?></p>
                        </div>
                        <div class="pos">
                            <p><b><?php echo $floor; ?></b><sup><?php if($floor == 1): ?>st<?php elseif($floor == 2): ?>nd<?php elseif($floor >= 3): ?>th<?php endif; ?></sup> floor</p>
                        </div>
                        <div class="pos">
                            <p><b><?php echo $meters; ?></b> m2</p>
                        </div>
                    </div>
                    <div class="apartment__image">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    </div>
                    <div class="apartment__actions">
                        <a href="<?php echo $url; ?>"><span>More info</span></a>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>
            <div class="homeApartments__actions">
                <a href="#"><span>Check other apartments</span></a>
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
                    <p class="lead">Featured</p>
                    <h2>Values of living in Quorum Apartments</h2>
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                </div>
                <div class="list">
                    <p class="pos">Restaurants</p>
                    <p class="pos">Services</p>
                    <p class="pos">Boulevards</p>
                </div>
            </div>
        </div>
    </section>

    <section class="homeForm">
        <div class="homeForm__wrap">
            <form class="visitForm">
                <div class="visitForm__heading">
                    <p class="lead">Quorum Apartments</p>
                    <h2>Request a Visit</h2>
                </div>
                <div class="visitForm__row">
                    <input type="text" placeholder="Name" name="visitName" />
                </div>
                <div class="visitForm__row">
                    <input type="email" placeholder="Email" name="visitEmail" />
                </div>
                <div class="visitForm__row">
                    <input type="phone" placeholder="Telephone" name="visitPhone" />
                </div>
                <div class="visitForm__row visitForm__row--half">
                    <input type="text" placeholder="DD.MM.YYYY" name="visitDate" />
                    <input type="text" placeholder="HH.MM" name="visitHour" />
                </div>
                <div class="visitForm__submit">
                    <button type="submit"><span>Contact</span></button>
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
                    <p class="lead">Quorum offices</p>
                    <h2>Modern Offices near Odra River</h2>
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet , consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam , quis nostrud exercitation ullamco laboris</p>
                    <p>Lorem ipsum dolor sit amet , consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam , quis nostrud exercitation ullamco laboris</p>
                </div>
            </div>
        </div>
    </section>

    <section class="homeTable">
        <div class="homeTable__wrap container">
            <div class="homeTable__heading">
                <p class="lead">Office</p>
                <h2>Check Availability</h2>
            </div>
            <div class="homeTable__table">
                <table class="table" border="0">
                    <thead>
                        <tr>
                            <th width="10%">Building</th>
                            <th width="10%">SQ. FT.</th>
                            <th width="10%">Office rent</th>
                            <th width="10%">Operation cost</th>
                            <th width="10%">Parking space</th>
                            <th width="10%">Floor plan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Quorum A</b></td>
                            <td>100</td>
                            <td>$500</td>
                            <td>$500</td>
                            <td>100</td>
                            <td><a href="#">View now</a></td>
                        </tr>
                        <tr>
                            <td><b>Quorum B</b></td>
                            <td>100</td>
                            <td>$500</td>
                            <td>$500</td>
                            <td>100</td>
                            <td><a href="#">View now</a></td>
                        </tr>
                        <tr>
                            <td><b>Quorum D</b></td>
                            <td>100</td>
                            <td>$500</td>
                            <td>$500</td>
                            <td>100</td>
                            <td><a href="#">View now</a></td>
                        </tr>
                        <tr>
                            <td><b>Quorum E</b></td>
                            <td>100</td>
                            <td>$500</td>
                            <td>$500</td>
                            <td>100</td>
                            <td><a href="#">View now</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>