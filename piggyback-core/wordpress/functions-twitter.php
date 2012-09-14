<?php
/**
 * Twitter Tweet Button for Wordpress
 * 
 * @package PiggyBack
 * @since version 2.0
 */

/**
 *  This function will:
 *  - create shortcode [pb_twitterbutton], [pb_twitterbutton]
 */
function piggyback_init_twitter(){
  add_shortcode( 'pb_twitterbutton', 'pb_twitterbutton' );
}


/**
 * Add Shortcode for Facebook Comment [pb_twitterbutton]
 */
function pb_twitterbutton(){
  global $post;

	$twitterbutton = get_twitter_button(get_permalink(),'vertical','','zh-cn','');

  return $twitterbutton;
}



