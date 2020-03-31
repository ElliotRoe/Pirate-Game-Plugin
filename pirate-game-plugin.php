<?php
/**
* Plugin Name: Pirate Game Plugin
* Plugin URI:
* Description: Updates doubloons widget value dynamically
* Version: 1.0
* Author: Elliot Roe
* Author URI:
**/

$init_game_data = '{"inventory":{"playerID":0,"items":[{"name":"Bexley Coding Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(0).png","cost":150,"expired":false,"type":"Flag","disabled":false}],"displayIndex":[0,0,0],"upgrades":[0,0,0],"flags":[{"name":"Bexley Coding Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(0).png","cost":150,"expired":false,"type":"Flag","disabled":false}],"figureheads":[],"soundtracks":[{"name":"Theme 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 01.wav","cost":0,"expired":false,"type":"Soundtrack","disabled":false}],"open":true,"displayItems":[{"name":"Theme 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 01.wav","cost":0,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Bexley Coding Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(0).png","cost":150,"expired":false,"type":"Flag","disabled":false},null],"upgradeCosts":[50,100,175],"money":100},"shop":{"itemList":[{"name":"Theme 2","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 05.wav","cost":75,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Peaceful 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 09.wav","cost":100,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Peaceful 2","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 11.wav","cost":100,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Halloween 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 14.wav","cost":125,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Halloween 2","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 16 - Halloween.wav","cost":150,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Hawaiian","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 19.wav","cost":150,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Excited","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 20.wav","cost":150,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Pirate Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(1).png","cost":150,"expired":false,"type":"Flag","disabled":false},{"name":"Sun Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(2).png","cost":150,"expired":false,"type":"Flag","disabled":false},{"name":"Weird Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(3).png","cost":300,"expired":false,"type":"Flag","disabled":false},{"name":"Swirl Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(4).png","cost":150,"expired":false,"type":"Flag","disabled":false},{"name":"Stripe Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(5).png","cost":150,"expired":false,"type":"Flag","disabled":false},{"name":"Wolf Mast Head","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"FigureHead(1).png","cost":300,"expired":false,"type":"Mast","disabled":false},{"name":"Unicorn Mast Head","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"FigureHead(2).png","cost":400,"expired":false,"type":"Mast","disabled":true}],"shopName":"mainShop","open":true,"numberOfItemsDisplayed":3,"displayItems":[{"name":"Halloween 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 14.wav","cost":125,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Sun Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(2).png","cost":150,"expired":false,"type":"Flag","disabled":false},{"name":"Unicorn Mast Head","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"FigureHead(2).png","cost":400,"expired":false,"type":"Mast","disabled":true}],"alreadyDisplayed":[],"boughtItems":[],"executed":false,"connectedInven":{"playerID":0,"items":[{"name":"Bexley Coding Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(0).png","cost":150,"expired":false,"type":"Flag","disabled":false}],"displayIndex":[0,0,0],"upgrades":[0,0,0],"flags":[{"name":"Bexley Coding Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(0).png","cost":150,"expired":false,"type":"Flag","disabled":false}],"figureheads":[],"soundtracks":[{"name":"Theme 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 01.wav","cost":0,"expired":false,"type":"Soundtrack","disabled":false}],"open":true,"displayItems":[{"name":"Theme 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 01.wav","cost":0,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Bexley Coding Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(0).png","cost":150,"expired":false,"type":"Flag","disabled":false},null],"upgradeCosts":[50,100,175],"money":100}}}'

//handles all the initial values of the user's custom meta value
function er_set_intial_game_data_val($user_id) {
  update_user_meta($user_id, 'user_game_data', $init_game_data);
  update_user_meta($user_id,'scratch_progress', 0);
}

//sets initial game state for a newly logged on user
add_action('user_register','er_set_intial_game_data_val');

//enqueues scripts and styles
function er_load_scripts() {

  wp_enqueue_script('er-script', plugin_dir_url( __FILE__ ) . 'js/er-script.js', array( 'wp-api' ) );
  wp_enqueue_style('er-text-style', plugin_dir_url(__FILE__) . 'css/er-text-style.css');

}

//I don't think this is needed
//add_action('wp_enqueue_scripts', 'er_load_scripts');

//updates the js script to display
function er_set_user_id() {
  wp_localize_script('er-script', 'user_meta', array(
    'user_id' => get_current_user_id();
  ));
}

//This will allow shortcodes to be used in custom html widgets
add_filter( 'widget_text', 'do_shortcode' );

/*Adds the html needed to display the user meta. As well as enqueueing scripts and style.
Also fetches the current user's ID to pass to the enqueued script*/
function er_display_meta($atts) {
  er_load_scripts();
  er_set_user_id();

  //html to return
  $content = '<div class="flex-container">\r\n';
  $content .= '<div><img id="coin" src="https://bexleycodingcamp.com/wp-content/uploads/2020/03/Doubloon-Clipart.png" alt="" width="25" height="25"></div>\r\n';
  $content .= '<div><span id="points">00</span></div>\r\n';
  $content .= '</div>\r\n';

  return $content;
}

//shortcode that is recognized in the page
add_shortcode('doubloons-live-data','er_display_meta')
