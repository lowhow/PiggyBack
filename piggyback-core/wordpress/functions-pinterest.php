<?php
/**
 * Pinterest Pin It Button plugin for Wordpress
 * 
 *
 * @package PiggyBack
 * @since version 2.0
 *
 */

/**
 *  This function will:
 *  - insert Pinterest script to end of body tag
 *  - create shortcode [pb_pinit], [pb_pinit]
 */
function piggyback_init_pinterest(){
	add_action('wp_footer', 'insert_pinit_js',100);
  add_shortcode( 'pb_pinit', 'pb_pinit' );
}


function insert_pinit_js() {
	echo get_pinit_js();
}


/**
 * Add Shortcode for Pinterest Pin it [pb_pinit]
 */
function pb_pinit(){
  global $post;
	
	if(has_post_thumbnail( $post->ID )){
		$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		$args['image'] = $thumbnail_src[0];
	}else{
		return false;
	}
	
  $options = get_option('superduper');
	$pincount = 'vertical';
	if($options['sd_pinit_count']) $pincount = $options['sd_pinit_count'];
	
	$pinitbutton = get_pinit_button(get_permalink(),$thumbnail_src[0],$pincount);
		
  return $pinitbutton;
}



