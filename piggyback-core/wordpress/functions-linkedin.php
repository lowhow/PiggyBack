<?php
/**
 * Linkedin Share plugin for Wordpress
 * 
 * @package PiggyBack
 * @since version 2.0
 */

/**
 *  This function will:
 *  - create shortcode [pb_linkedinshare], [pb_linkedinshare]
 */
function piggyback_init_linkedin(){
  add_shortcode( 'pb_linkedinshare', 'pb_linkedinshare' );
}


/**
 * Add Shortcode for Linkedin Share [pb_linkedinshare]
 */
function pb_linkedinshare(){
  global $post;

	$linkedin = get_linkedin_share(get_permalink(),'top');
		
  return $linkedin;
}



