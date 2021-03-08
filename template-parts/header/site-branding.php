<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>


<div class="m-header__brand">
    <a href="<?php echo home_url( ); ?>"  id="branding">
        <img src="<?php echo get_template_directory_uri( ).'/assets/img/logo/imagotipo_white.png'; ?>" alt="logotipo de <?php echo esc_attr( get_bloginfo('name') ); ?>">
    </a>
</div><!-- #branding -->