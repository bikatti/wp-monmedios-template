<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>

<nav class="m-footer__nav">
    <?php
        if ( has_nav_menu( 'footer_column' ) ) {
            wp_nav_menu([
            'theme_location'  => 'footer_column',
            'menu_class'      => 'm-footer__menu -medium',
            'container' => 'ul'
            ]);
        }
    ?>
    <button class="m-footer__button" id="contactFooter"><span class="-medium">Contactar</span></button>
</nav>