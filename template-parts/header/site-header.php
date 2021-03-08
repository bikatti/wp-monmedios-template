<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Monmedios
 */


if ( is_front_page() || is_404() ) {
    echo '<header class="o-header -frontPage">';
} else {
    echo '<header class="o-header">';
}
    get_template_part( 'template-parts/header/site-branding' );
    get_template_part( 'template-parts/header/site-nav' ); ?>
    
</header><!-- .o-header -->