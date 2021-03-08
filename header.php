<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @package WordPress
 * @subpackage Monmedios
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> id="header">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <?php wp_head(  ); ?>
    </head>
    <?php 
    if ( is_front_page( ) || is_404() ) {
        echo '<body class="theBody -frontPage" id="theBody">';
    } else {
        echo '<body class="theBody" id="theBody">';
    }

        get_template_part( 'template-parts/header/site-header' );
    ?>
        
        <div id="content">
            <main class="o-content" id="headerSticky">