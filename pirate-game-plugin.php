<?php
/**
* Plugin Name: Pirate Game Plugin
* Plugin URI:
* Description: Updates doubloons widget value dynamically
* Version: 1.0
* Author: Elliot Roe
* Author URI:
**/

//handles all the initial values of the user's custom meta value
function er_set_intial_game_data_val($user_id) {
  $init_game_data = '{"inventory":{"playerID":0,"items":[{"name":"Bexley Coding Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(0).png","cost":150,"expired":false,"type":"Flag","disabled":false}],"displayIndex":[0,0,0],"upgrades":[0,0,0],"flags":[{"name":"Bexley Coding Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(0).png","cost":150,"expired":false,"type":"Flag","disabled":false}],"figureheads":[],"soundtracks":[{"name":"Theme 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 01.wav","cost":0,"expired":false,"type":"Soundtrack","disabled":false}],"open":true,"displayItems":[{"name":"Theme 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 01.wav","cost":0,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Bexley Coding Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(0).png","cost":150,"expired":false,"type":"Flag","disabled":false},null],"upgradeCosts":[50,100,175],"money":100},"shop":{"itemList":[{"name":"Theme 2","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 05.wav","cost":75,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Peaceful 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 09.wav","cost":100,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Peaceful 2","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 11.wav","cost":100,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Halloween 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 14.wav","cost":125,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Halloween 2","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 16 - Halloween.wav","cost":150,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Hawaiian","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 19.wav","cost":150,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Excited","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 20.wav","cost":150,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Pirate Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(1).png","cost":150,"expired":false,"type":"Flag","disabled":false},{"name":"Sun Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(2).png","cost":150,"expired":false,"type":"Flag","disabled":false},{"name":"Weird Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(3).png","cost":300,"expired":false,"type":"Flag","disabled":false},{"name":"Swirl Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(4).png","cost":150,"expired":false,"type":"Flag","disabled":false},{"name":"Stripe Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(5).png","cost":150,"expired":false,"type":"Flag","disabled":false},{"name":"Wolf Mast Head","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"FigureHead(1).png","cost":300,"expired":false,"type":"Mast","disabled":false},{"name":"Unicorn Mast Head","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"FigureHead(2).png","cost":400,"expired":false,"type":"Mast","disabled":true}],"shopName":"mainShop","open":true,"numberOfItemsDisplayed":3,"displayItems":[{"name":"Halloween 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 14.wav","cost":125,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Sun Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(2).png","cost":150,"expired":false,"type":"Flag","disabled":false},{"name":"Unicorn Mast Head","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"FigureHead(2).png","cost":400,"expired":false,"type":"Mast","disabled":true}],"alreadyDisplayed":[],"boughtItems":[],"executed":false,"connectedInven":{"playerID":0,"items":[{"name":"Bexley Coding Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(0).png","cost":150,"expired":false,"type":"Flag","disabled":false}],"displayIndex":[0,0,0],"upgrades":[0,0,0],"flags":[{"name":"Bexley Coding Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(0).png","cost":150,"expired":false,"type":"Flag","disabled":false}],"figureheads":[],"soundtracks":[{"name":"Theme 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 01.wav","cost":0,"expired":false,"type":"Soundtrack","disabled":false}],"open":true,"displayItems":[{"name":"Theme 1","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"UI\\ShopMenu\\soundtrackButton(2).png","audioSrc":"Audio\\Music Loops\\Casual Game Music 01.wav","cost":0,"expired":false,"type":"Soundtrack","disabled":false},{"name":"Bexley Coding Flag","timeParam":[24,0,0],"time":86400000,"startTime":1585615722662,"finishTime":1585702122662,"timeLeft":86400000,"imageSrc":"Flag(0).png","cost":150,"expired":false,"type":"Flag","disabled":false},null],"upgradeCosts":[50,100,175],"money":100}}}';

  update_user_meta($user_id, 'user_game_data', $init_game_data);
  update_user_meta($user_id,'scratch_progress', 0);
}

//sets initial game state for a newly logged on user
add_action('user_register','er_set_intial_game_data_val');

//enqueues scripts and styles
function er_load_scripts() {

  wp_enqueue_script('er-script', plugin_dir_url( __FILE__ ) . 'js/er-script.js', array('wp-api','er-onload-handler') );
  wp_enqueue_style('er-text-style', plugin_dir_url(__FILE__) . 'css/er-text-style.css');

}

//adds the sfx only if on the course pages
function er_add_audio_element() {
  if (er_is_current_parent_page(158)) {
    echo '<audio src="https://bexleycodingcamp.com/wp-content/uploads/2020/04/Positive-3.wav" type="audio/wav" class="rewardSFX"></audio>';
  }
}

add_action('wp_footer', 'er_add_audio_element');

//if the page's parent is scratch then waits 2 minutes then when the next page button is pressed it gives the user points
function er_time_points() {

  //needs to be registered for front end handling of the window.onload function
  wp_register_script('er-onload-handler',plugin_dir_url( __FILE__ ) . 'js/er-onload-handler.js');

  if (er_is_current_parent_page(158)) {

    //Handles tracking of students' progress
    $current_id = get_current_user_id();

    $inputArray = array('child_of' => 158,
						    'sort_column' => 'menu_order');
		$pages = get_pages($inputArray);
		$pageNames  = array();
		for ($i = 0; $i<count($pages);$i++) {
			array_push($pageNames, get_the_title($pages[$i]));
		}

		$farthestPage = get_user_meta($current_id, "farthest_page",true);
		$currentPage = the_title('','',false);
		update_user_meta($current_id,"current_page", $currentPage);

		$currentIndex = array_search($currentPage,$pageNames);
		$farthestIndex = array_search($farthestPage,$pageNames);

		if ($farthestIndex == "") {
			$farthestIndex = 1;
			update_user_meta($current_id,"farthest_page", $pageNames[1]);
		}

		if($currentIndex>$farthestIndex) {
			update_user_meta($current_id,"farthest_page", $currentPage);
			$farthestIndex=$currentIndex;

      //enqueues the reward script if this is the farthest the  student had ever been
      wp_enqueue_script('er-reward-script', plugin_dir_url( __FILE__ ) . 'js/er-reward-script.js', array('wp-api','er-onload-handler'));
      er_set_user_id('er-reward-script');
		}

		$progress = floor(($farthestIndex-1)/(count($pageNames)-2)*100);

		update_user_meta($current_id,"scratch_progress",$progress);
  }
}

function er_is_current_parent_page($ID) {
  global $post;
  $parentPage = $post->post_parent;
  return $parentPage==$ID;
}

//used to give points after watching a video
add_action('wp_enqueue_scripts', 'er_time_points');

//updates the js script to display
function er_set_user_id($script_slug) {
  wp_localize_script($script_slug, 'user_meta', array(
    'user_id' => get_current_user_id(),
    'logged_in' => (get_current_user_id()!=0)
  ));
}

//This will allow shortcodes to be used in custom html widgets
add_filter( 'widget_text', 'do_shortcode' );

/*Adds the html needed to display the user meta. As well as enqueueing scripts and style.
Also fetches the current user's ID to pass to the enqueued script*/
function er_display_meta($atts) {
  er_load_scripts();
  er_set_user_id('er-script');

  //html to return
  $content = '<div class="flex-container">';
  $content .= '<div><img id="coin" src="https://bexleycodingcamp.com/wp-content/uploads/2020/04/Coin.png" alt="" width="30" height="30"></div>';
  $content .= '<div><span id="points">---</span></div>';
  $content .= '<div><span id="log_in">Please log in to see your doubloons!</span></div>';
  $content .= '</div>';

  return $content;
}

//shortcode that is recognized in the page
add_shortcode('doubloons-live-data','er_display_meta');

function er_generate_url() {
  $URL = 'https://bexleyboardgames.com/app/pirate-minigame/main.html?id=';
  $URL .= get_current_user_id();
  $content = '<iframe src="'. $URL .'" scrolling="no" class="frame" frameborder="0"></iframe>';

  return $content;
}

add_shortcode('generate-game-iframe','er_generate_url');
