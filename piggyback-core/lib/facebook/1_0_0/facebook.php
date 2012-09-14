<?php
/**
 * Facebook Social Plugins
 * 
 * @version 1.0.0 2012-Sept-12
 * @link http://developers.facebook.com/docs/plugins/
 */
//class FacebookForPB {
  
  function get_xfbml_jssdk( $appID, $language='en_US'){
    $xfbml =
    '<div id="fb-root" style="display:none"></div>'.
		'<script>(function(d, s, id) {'.
		'var js, fjs = d.getElementsByTagName(s)[0];'.
		'if (d.getElementById(id)) return;'.
		'js = d.createElement(s); js.id = id;'.
		'js.src = "//connect.facebook.net/'.$language.'/all.js#xfbml=1&appId='.$appID.'";'.
		'fjs.parentNode.insertBefore(js, fjs);'.
		'}(document, "script", "facebook-jssdk"));</script>';
    
    return $xfbml;
  }
  
  /**
   * Get Facebook XML namespace to the <html> tag of your document.
   * This is necessary for XFBML to work in earlier versions of Internet Explorer.
   * 
   */
  function get_xfbml_xmlns(){
    return 'xmlns:fb="http://ogp.me/ns/fb#"';
  }
  
  /**
   * Get Facebook Comments box plugin code (XFBML)
   * 
   * @param string $href The URL for this comments box.
   * @param integer $num_posts The number of posts to display by default.
   * @param integer $width The width of the plugin in pixels.
   * @param string $colorscheme The color scheme of the plugin.
   *
   * @return string plugin code (XFBML)
   *
   * @link http://developers.facebook.com/docs/reference/plugins/comments/
   */
  function get_xfbml_plugin_comments($href, $num_posts, $width, $colorscheme =''){
    $href       = 'href="'.$href.'"';
    $num_posts  = 'num_posts="'.$num_posts.'"';
    $width      = 'width="'.$width.'"';
    if($colorscheme) $colorscheme = 'colorscheme="'.$colorscheme.'"';
    return '<fb:comments '.$href.' '.$num_posts.' '.$width.' '.$colorscheme.'></fb:comments>';
  }
  
  /**
   * Get Facebook Comments box plugin code (HTML5)
   * 
   * @param string $href The URL for this comments box.
   * @param integer $num_posts The number of posts to display by default.
   * @param integer $width The width of the plugin in pixels.
   * @param string $colorscheme The color scheme of the plugin. options: 'dark'
   *
   * @return string plugin code (HTML5)
   *
   * @link http://developers.facebook.com/docs/reference/plugins/comments/
   */
  function get_html5_plugin_comments($href, $num_posts, $width, $colorscheme=''){
    $href       = 'data-href="'.$href.'"';
    $num_posts  = 'data-num-posts="'.$num_posts.'"';
    $width      = 'data-width="'.$width.'"';
    $coloscheme ? $colorscheme = 'data-colorscheme="'.$colorscheme.'"' :$colorscheme = '';

    return '<div class="fb-comments" '.$href.' '.$num_posts.' '.$width.' '.$colorscheme.'></div>';
  }
  
  /**
   * Get Facebook Comments box plugin code (XFBML)
   *
   * @param string $href The URL to like. In XFBML, defaults to the current page.
   * @param bool $send Send Button(XFBML Only). Include a Send button.
   * 			The Send Button is available only on sites that use the Javascript SDK.
   * @param string $layout Layout Style. Determines the size and amount of social context next to the button.
   * 'standard'|'button_count'|'box_count'
   * @param integer $width 
   * @param bool $show_faces 
   * @param string $action Options: 'recommend'.
   * @param string $colorscheme options: 'dark'.
   * @param string $font Options: 'arial'|'lucida grande'|'segoe ui'|'tahoma'|'trebuchet ms'|'verdana'.
   * @param string $ref
   *
   * @return string plugin code (XFBML)
   *
   * @link http://developers.facebook.com/docs/reference/plugins/like/
   */					
	function get_xfbml_plugin_likebutton( $href, $send=TRUE, $layout='', $width=450, $show_faces=TRUE, $action='', $colorscheme='', $font='', $ref='' ){
    $href   = 'href="'.$href.'"';
    $width  = 'width="'.$width.'"';
    $send         ? $send = 'send="true"' : $send = 'send="false"';
    $show_faces   ? $show_faces = 'show_faces="true"' : $show_faces = 'show_faces="false"';
    $layout       ? $layout = 'layout="'.$layout.'"' : $layout = '';
    $action       ? $action = 'action="'.$action.'"' : $action = '';
    $colorscheme  ? $colorscheme = 'colorscheme="'.$colorscheme.'"' : $colorscheme = '';
    $font         ? $font = 'font="'.$colorscheme.'"' : $font= '';
    $ref          ? $ref = 'ref="'.$ref.'"' : $ref = '';
    
    return '<fb:like '.$href.' '.$send.' '.$width.' '.$show_faces.' '.$layout.' '.$action.' '.$colorscheme.' '.$font.' '.$ref.' ></fb:like>';
	}
  
  /**
   * Get Facebook Comments box plugin code (HTML5)
   *
   * @param string $href The URL to like. In XFBML, defaults to the current page.
   * @param bool $send Send Button(XFBML Only). Include a Send button.
   * 			The Send Button is available only on sites that use the Javascript SDK.
   * @param string $layout Layout Style. Determines the size and amount of social context next to the button.
   * 'standard'|'button_count'|'box_count'
   * @param integer $width 
   * @param bool $show_faces 
   * @param string $action Options: 'recommend'.
   * @param string $colorscheme options: 'dark'.
   * @param string $font Options: 'arial'|'lucida grande'|'segoe ui'|'tahoma'|'trebuchet ms'|'verdana'.
   * @param string $ref
   *
   * @return string plugin code (HTML5)
   *
   * @link http://developers.facebook.com/docs/reference/plugins/like/
   */					
	function get_html5_plugin_likebutton( $href, $send=TRUE, $layout='', $width=450, $show_faces=TRUE, $action='', $colorscheme='', $font='', $ref='' ){
    $href   = 'data-href="'.$href.'"';
    $width  = 'data-width="'.$width.'"';
    $send         ? $send = 'data-send="true"' : $send = 'data-send="false"';
    $show_faces   ? $show_faces = 'data-show-faces="true"' : $show_faces = 'show_faces="false"';
    $layout       ? $layout = 'data-layout="'.$layout.'"' : $layout = '';
    $action       ? $action = 'data-action="'.$action.'"' : $action = '';
    $colorscheme  ? $colorscheme = 'data-colorscheme="'.$colorscheme.'"' : $colorscheme = '';
    $font         ? $font = 'data-font="'.$colorscheme.'"' : $font= '';
    $ref          ? $ref = 'data-ref="'.$ref.'"' : $ref = '';

    return '<div class="fb-like"  '.$href.' '.$send.' '.$width.' '.$show_faces.' '.$layout.' '.$action.' '.$colorscheme.' '.$font.' '.$ref.' ></div>';
	}
  
  
  /**
   *  Get meta Open Graph Tags
   *
   *  @param array $og An associative array where key is Property and value is Content.
   *  @example
   *  <code>
      $args = array(
        'title'        => 'The Rock',
        'type'         => 'movie',
        'image'        => 'http://www.imdb.com/title/tt0117500/',
        'url'          => 'http://ia.media-imdb.com/rock.jpg',
        'site_name'    => 'IMDb',
         'description'  => 'A group of U.S. Marines, under command of
                              a renegade general, take over Alcatraz and
                              threaten San Francisco Bay with biological
                              weapons.'
      )
   *  </code>
   *  @param string $app_ID Facebook Platform application ID. Leave blank if not in used.
   *  @param array $admins 
   */
  function get_ogtags($og, $app_ID='', $admins=array()){
    $ogtags = '';
    foreach($og as $ogproperty => $ogcontent){
      $ogtags .= '<meta property="og:'.$ogproperty.'" content="'.$ogcontent.'">';
    }
    if($app_ID){
      $ogtags .= '<meta property="fb:app_id" content="'.$app_ID.'" >'."\n\n";  
    }elseif($admins){
      $adminsStr = '';
      foreach($admins as $admin){
        $adminsStr .= $admin.',';
      }
      $adminsStr = substr($adminsStr,0,-1);
      $ogtags .= '<meta property="fb:admins" content="'.$adminsStr.'">';
    }
    
    return $ogtags;
  }
//}