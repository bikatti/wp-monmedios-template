<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<div class="-container" style="padding: 90px 0; max-width: 550px !important;">
    <h1 class="-lightin">404 Error</h1>
    <h3 class="-lightin">Lo sentimos, pero está página ya no se encuentra disponible</h3>
    <div class="wp-block-button">
        <a href="<?php echo home_url( ); ?>" class="wp-block-button__link">← Ir al inicio</a>
    </div>
</div>

<?php
get_footer();