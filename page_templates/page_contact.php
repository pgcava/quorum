<?php
    /**
     * Template name: Kontakt
     */
get_header(); ?>

<main class="quorum quorum--contact">
    <div class="contactMenu"></div>
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