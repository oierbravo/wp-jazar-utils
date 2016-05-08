
<?php
/*
Plugin Name: Jazar Utils
Plugin URI: http://wordpress.org/#
Description: Our first filter event
Author: Oier Bravo Urtasun
Version: 0.0.1
Author URI: https://github.com/oierbravo/wp-jazar-utils
*/
add_action( 'init', 'post_types_rest_support', 25 );
function post_types_rest_support() {
    global $wp_post_types;

    //be sure to set this to the name of your post type!
    //$post_type_name = 'portfolio_page';
    if( isset( $wp_post_types[ 'portfolio_page' ] ) ) {
            $wp_post_types['portfolio_page']->show_in_rest = true;
            $wp_post_types['portfolio_page']->rest_base = 'portfolios';
            $wp_post_types['portfolio_page']->rest_controller_class = 'WP_REST_Posts_Controller';
    }
  
}

