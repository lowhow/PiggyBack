<?php
/**
 * Google Plusone plugin for Wordpress
 * 
 * @package PiggyBack
 * @since version 2.0
 *
 */

/**
 *  This function will:
 *  - insert itemscope in language attribute
 *  - create shortcode [pb_pinit], [pb_pinit]
 */
function piggyback_init_gplusone(){
	add_filter('language_attributes', 'add_itemscope_doctype');
	add_shortcode( 'pb_gplusone', 'pb_gplusone');
}

function add_itemscope_doctype( $output ) {
	return $output.' '.get_gplusone_itemscope();
}


/**
 * Add Shortcode for Facebook Comment [pb_fblikebutton]
 */
function pb_gplusone(){
	  global $post;
  $options = get_option('superduper');
		
  $gplusone = get_gplusone_button(get_permalink,'tall',null,'zh-CN');
  return $gplusone;
}



