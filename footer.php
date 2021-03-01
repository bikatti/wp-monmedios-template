<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>
            </main><!-- #headerSticky -->
        </div><!-- #content -->

        <?php 
            if ( is_page('23') ) { 
                get_template_part( 'template-parts/contact/pop-contact' );

                get_template_part( 'template-parts/footer/up-bar' );
                get_template_part( 'template-parts/footer/site-footer' );
            }
        ?>

        <?php wp_footer(  ); ?>

    </body>
</html>