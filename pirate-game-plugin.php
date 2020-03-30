<?php
/**
* Plugin Name: Pirate Game Plugin
* Plugin URI:
* Description: Updates doubloons widget value dynamically
* Version: 1.0
* Author: Elliot Roe
* Author URI:
**/

//enqueues scripts and styles
function er_load_scripts() {

  wp_enqueue_script('er-script', plugin_dir_url( __FILE__ ) . 'js/er-script.js');
  wp_enqueue_style('er-text-style', plugin_dir_url(__FILE__) . 'css/er-text-style.css');

}

add_action('wp_enqueue_scripts', 'er_load_scripts');

function er_update_js_obj() {
  wp_localize_script('er-script', 'user_meta', array(
    'points' => get_user_meta(get_current_user_id(), 'user_game_data', true);
  ));
}

add_action('updated_postmeta','er_update_js_obj');

//sets initial game state for a newly logged on user
add_action('user_register','er_set_intial_game_data_val')

//This will allow shortcodes to be used in widgets
add_filter( 'widget_text', 'do_shortcode' );
