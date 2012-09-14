<?php
/**
 * Facebook Social Plugins for Wordpress
 * 
 * Note that we will not be using WP Alchemy's default setup.php and
 * the sample functions.php. However we do want to preserve the folder
 * structure for future version upgrade.
 *
 * @package PiggyBack
 * @since version 1.1
 *
 */

/**
 *  This function will:
 *  - create and insert Open Graph Meta tags into header
 *  - insert FBML JSSDK script into footer
 *  - create shortcode [pb_fbcomment], [pb_fblikebutton]
 */
function piggyback_init_facebook_ogtags(){
  
  add_action( 'wp_head', 'insert_fb_in_head', 5 );
  add_filter('language_attributes', 'add_opengraph_doctype');
  add_action('wp_footer', 'fbmlsetup_jssdk', 100);
  add_shortcode( 'pb_fbcomment', 'pb_fbcomment' );
  add_shortcode( 'pb_fblikebutton', 'pb_fblikebutton' );
  add_shortcode( 'pb_fbshare', 'pb_fbshare');
  
}


/**
 * Add Shortcode for Facebook Comment [pb_fbcomment]
 */
function pb_fbcomment(){
  global $post;
  $options = get_option('superduper');
		
  $fbcomment = get_xfbml_plugin_comments(get_permalink(),
                                         $options['sd_fbcomment_num_posts'],
                                         $options['sd_fbcomment_width'],
                                         $options['sd_fbcomment_colorscheme']);
  return $fbcomment;
}

/**
 * Add Shortcode for Facebook Comment [pb_fblikebutton]
 */
function pb_fblikebutton(){
  global $post;
  $options = get_option('superduper');
  $fblikebutton = get_xfbml_plugin_likebutton(get_permalink(),
																								FALSE,'box_count',100,FALSE,'');
  return $fblikebutton;
}

/**
 *
 */
function pb_fbshare(){
  global $post;
  $output = '';
  $output .= '<script>var fbShare = {'.
									'url: "'.get_permalink().'",'.
									'size: "large",'.
									//'badge_text: "333333",'.
									//'badge_color: "FFFFFF",'.
									'google_analytics: "true"'.
								'}</script>';
	$output .= 	'<script src="http://widgets.fbshare.me/files/fbshare.js"></script>';
  
  return $output;
  
}


function insert_fb_in_head() { 
	global $post;
  $options = get_option('superduper');

	$fbadmins = $options['sd_fb_admins'];
	$fbappID = $options['sd_fb_appid'];
  $fbDefaultImg = $options['sd_fb_sitelogo'];
  $fbogtype = $options['sd_fb_ogtype'];

	
  /**
   * Setting Default Open Graph metas
   */
  $args = array();
  $args['title']        = get_bloginfo('name');
  $args['type']         = $fbogtype;
  $args['image']        = $fbDefaultImg; //
  $args['site_name']    = get_bloginfo('name');
  $args['url']          = get_bloginfo('url');
  $args['description']  = get_bloginfo('description');
    
  /**
   * If single post or single page, override Open Graph metas
   */
	if(is_singular()){
    $args['title'] = $post->post_title;
    $args['url'] = get_permalink();
    $args['description']  = $post->post_excerpt;

    if(has_post_thumbnail( $post->ID )){
      $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
      $args['image'] = $thumbnail_src[0];
    }
  }
  
  echo get_ogtags($args,$fbappID,$fbadmins);
}

/**
 * Adding the Open Graph in the Language Attributes
 */
function add_opengraph_doctype( $output ) {
	return $output .' '. get_xfbml_xmlns();
}

/**
 * Inserting FBML JSSDK
 */
function fbmlsetup_jssdk() {
  $options = get_option('superduper');

	$fblang = $options['sd_fb_lang'];
	$fbappID = $options['sd_fb_appid'];
?>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/<?php echo $fblang; ?>/all.js#xfbml=1&appId=<?php echo $fbappID; ?>";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<?php
}



