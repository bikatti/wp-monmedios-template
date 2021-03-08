<?php
/**
 * Pop contact para más información del producto
 *
 * @package WordPress
 * @subpackage Monmedios
 */

$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>

<div class="o-contact" id="contactForm">
    <div class="m-contact__model">
        <div class="m-contact__content">
            <div class="m-contact__hook"></div>
            <div class="m-contact__corp">
                <button class="-close" id="contactOut">x</button>
                <div class="m-contact__logo"><img src="<?php echo $image[0]; ?>" alt="logotipo de <?php echo esc_attr( get_bloginfo('name') ); ?>"></div>
                <div class="m-contact__subtitle"><?php dynamic_sidebar( 'text-contact' );?></div>
            </div>
            <div class="m-contact__body">
                <?php echo do_shortcode('[contact-form-7 id="230" title="Formulario de contacto"]') ?>
            </div>
        </div>
    </div>
</div>

<div class="-blur" id="modalBlur"></div>
