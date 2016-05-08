
<?php
/*
Plugin Name: Jazar Utils
Plugin URI: http://wordpress.org/#
Description: Utils and Tweaks for jazar.org
Author: Oier Bravo Urtasun
Version: 0.0.1
Author URI: https://github.com/oierbravo/wp-jazar-utils
*/
add_action( 'init', 'post_types_rest_support', 25 );
function post_types_rest_support() {
    global $wp_post_types;

    //Añadimos portfolio_page al REST
    if( isset( $wp_post_types[ 'portfolio_page' ] ) ) {
            $wp_post_types['portfolio_page']->show_in_rest = true;
            //setting ENDPOINT to portfolios
            $wp_post_types['portfolio_page']->rest_base = 'portfolios';
            $wp_post_types['portfolio_page']->rest_controller_class = 'WP_REST_Posts_Controller';
    }

     //Añadimos ai1ec_event al REST
    if( isset( $wp_post_types[ 'ai1ec_event' ] ) ) {
            $wp_post_types['ai1ec_event']->show_in_rest = true;
            //setting ENDPOINT to portfolios
            $wp_post_types['ai1ec_event']->rest_base = 'events';
            $wp_post_types['ai1ec_event']->rest_controller_class = 'WP_REST_Posts_Controller';
    }
  
}

