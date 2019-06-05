<?php
/*
Plugin Name: YouTube Subs
Description: Display YouTube sub button and count
*/
// Exit if accessed directly
if(!defined('ABSPATH')){
  exit;
}
// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');
// Load Class
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');
// Register Widget
function register_youtubesubs(){
  register_widget('Youtube_Subs_Widget');
}
// Hook in function
add_action('widgets_init', 'register_youtubesubs');
?>