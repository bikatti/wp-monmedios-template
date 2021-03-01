<?php

function init_template() {
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    add_theme_support('editor-styles');

    register_nav_menus( 
        array(
            'top_menu' => 'Menú Principal',
            'footer_column' => 'Footer',
        )
    );
}

add_action('after_setup_theme', 'init_template');

function noSticky( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
        $query->set( 'ignore_sticky_posts', 1 );
    }
}
add_filter( 'pre_get_posts', 'noSticky' );


/**
 * Styles & Script
 */

function assets() {
    $ver = '1.2.18';
    wp_register_style( 'rubik', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', '', $ver , 'all' );
    wp_register_style( 'Frank Ruhl Libre', 'https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;700;900&display=swap', '', $ver, 'all' );

    wp_register_style( 'index', get_template_directory_uri( ).'/style.css', '', $ver, 'all' );

    if ( is_front_page() || is_404() || is_page() ) {
        wp_enqueue_style( 'style', get_stylesheet_uri(  ) , array( 'rubik', 'Frank Ruhl Libre', 'index'), $ver, 'all' );
    }

    wp_enqueue_script( 'jscustom', get_template_directory_uri( ).'/assets/js/custom.js', '', $ver, true );
}

add_action( 'wp_enqueue_scripts', 'assets' );

function site_block_editor_js() {
    $ver = '1.2.18';
    wp_register_style( 'rubik', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', '', $ver , 'all' );
    wp_register_style( 'Frank Ruhl Libre', 'https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;700;900&display=swap', '', $ver, 'all' );
    
    wp_register_style( 'editor', get_template_directory_uri( ).'/assets/css/editor-style.css', '', $ver, 'all' );
    wp_enqueue_style( 'editor-gutenberg', get_stylesheet_uri(  ) , array( 'editor', 'rubik', 'Frank Ruhl Libre'), $ver, 'all' );
    // wp_enqueue_script( 'header', get_template_directory_uri( ).'/assets/js/addHeader.js', '', $ver, true );
}
add_action( 'enqueue_block_editor_assets', 'site_block_editor_js' );

// Logo de Login
function login_logo() { 
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo $image[0]; ?>);
            height: 60px;
            width: 100%;
            background-size: 100%;
            background-repeat: no-repeat;
            /* padding-bottom: 10px; */
        }

        #login form, .login form {
            background: none;
            padding: 0;
            border: none;
            box-shadow: none;
        }

        #login {
            margin: 50px auto !important;
            border-radius: 4px;
            box-shadow: 0 3px 9px rgb(0 0 0 / 14%);
            padding: 20px !important;
            background: #fff;
        }

        .login #backtoblog, .login #nav {
            text-align: center;
        }

        .login {
            display: flex;
            justify-content: center;
            height: auto;
        }

        @media screen and (max-width: 550px) {
            #login {
                margin: 25px 20px !important;
            }
        }
    </style>
<?php }


add_action( 'login_enqueue_scripts', 'login_logo' );

function login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'login_logo_url' );

// sidebar contactar
function text_contact() {
    register_sidebar(
        array(
            'name' => 'Texto en contactar',
            'id' => 'text-contact',
            'description' => 'Texto en la caja emergente de contactar antes de los inputs a rellenar',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget'  => '',
        )
    );
}

add_action('widgets_init', 'text_contact');