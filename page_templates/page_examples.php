<?php
    /**
     * Template name: Przykładowe mieszkania
     */
get_header(); ?>

<main class="quorum quorum--examples">
    <section class="homeExamples">
        <div class="homeExamples__wrap container">
            <div class="homeExamples__heading">
                <h2><?php echo get_field('page_h1_heading'); ?></h2>
            </div>
            <div class="homeExamples__list">
                <div class="exampleBox">
                    <div class="exampleBox__image">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() . '/images/home/examples/example_01.webp'; ?>"/>
                        </div>
                    </div>
                    <div class="exampleBox__info">
                        <div class="heading">
                            <h3>Mieszkanie dwupokojowe</h3>
                            <a href="https://resicapital.pl/znajdz-swoje-mieszkanie-na-sprzedaz/?onlyForSell=1&str=1">Zobacz ofertę</a>
                        </div>
                        <div class="usp">
                            <div class="usp__box">
                                <h4>2</h4>
                                <p>Piętro</p>
                            </div>
                            <div class="usp__box">
                                <h4>46,28 m²</h4>
                                <p>Przestrzeń mieszkalna</p>
                            </div>
                            <div class="usp__box">
                                <h4>11</h4>
                                <p>Mieszkanie</p>
                            </div>
                            <div class="usp__box">
                                <h4>2</h4>
                                <p>Liczba pokoi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="exampleBox">
                    <div class="exampleBox__image">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() . '/images/home/examples/example_02.webp'; ?>"/>
                        </div>
                    </div>
                    <div class="exampleBox__info">
                        <div class="heading">
                            <h3>Mieszkanie trzypokojowe</h3>
                            <a href="https://resicapital.pl/znajdz-swoje-mieszkanie/?rooms[]=3&str=1">Zobacz ofertę</a>
                        </div>
                        <div class="usp">
                            <div class="usp__box">
                                <h4>2</h4>
                                <p>Piętro</p>
                            </div>
                            <div class="usp__box">
                                <h4>58,12 m²</h4>
                                <p>Przestrzeń mieszkalna</p>
                            </div>
                            <div class="usp__box">
                                <h4>19</h4>
                                <p>Mieszkanie</p>
                            </div>
                            <div class="usp__box">
                                <h4>3</h4>
                                <p>Liczba pokoi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="exampleBox">
                    <div class="exampleBox__image">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() . '/images/home/examples/example_04.webp'; ?>"/>
                        </div>
                    </div>
                    <div class="exampleBox__info">
                        <div class="heading">
                            <h3>Mieszkanie czteropokojowe</h3>
                            <a href="https://resicapital.pl/znajdz-swoje-mieszkanie/?rooms[]=4&str=1">Zobacz ofertę</a>
                        </div>
                        <div class="usp">
                            <div class="usp__box">
                                <h4>5</h4>
                                <p>Piętro</p>
                            </div>
                            <div class="usp__box">
                                <h4>70,64 m²</h4>
                                <p>Przestrzeń mieszkalna</p>
                            </div>
                            <div class="usp__box">
                                <h4>48</h4>
                                <p>Mieszkanie</p>
                            </div>
                            <div class="usp__box">
                                <h4>4</h4>
                                <p>Liczba pokoi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="numbers" class="homeNumbers">
        <div class="homeNumbers__wrap container">
            <div class="homeNumbers__heading">
                <h2>O projekcie</h2>
            </div>
            <div class="homeNumbers__list">
                <div class="box">
                    <h3>341</h3>
                    <div class="divider"></div>
                    <p>mieszkań</p>
                </div>
                <div class="box">
                    <h3>23</h3>
                    <div class="divider"></div>
                    <p>piętra</p>
                </div>
                <div class="box">
                    <h3>25-79 m²</h3>
                    <div class="divider"></div>
                    <p>wielkość mieszkań</p>
                </div>
                <div class="box">
                    <h3>1-4</h3>
                    <div class="divider"></div>
                    <p>liczba pokoi</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>