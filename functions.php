<?php
/**
 * @package Under_Construction
 */

 add_action( 'wp_enqueue_scripts', function() {
   wp_enqueue_style( 'under-construction-style', get_stylesheet_uri() );
 } );
