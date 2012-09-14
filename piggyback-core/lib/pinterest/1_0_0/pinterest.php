<?php
/**
 * Pinterest Pin It Button plugin.
 * 
 * @version 1.0.0 2012-Sept-12
 * @link http://developers.facebook.com/docs/plugins/
 */
  
  /**
   * Get Pinterest Pin It Script
   * 
   * @return string Add this code to your page only once, directly above the closing </BODY> tag:
   */
  function get_pinit_js(){
    return '<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>';
  }
  
	/**
	 * Initialize SocialPinterest by setting its attributes.
	 *
	 * @param string $url URL of the page the pin is on. Adds param value to 'url' key. Will be converted to raw url encoding.
	 * @param string $media URL of the image to be pinned. Adds param value to media key. Will be converted to raw url encoding.
	 * @param string $description Optional. Description of what they're pinning. Descriptions are optional but recommended; they will make pinning much easier for your users.
	 * @param string $layout Optional. Adds 'count-layout' attribute. Options: 'horizontal'(default)|'vertical'|'none'
	 */
	function get_pinit_button($url, $media, $description = '', $layout = 'vertical'){
		$url = rawurlencode($url);
		$media = rawurlencode($media);
		$description = rawurlencode($description);
		$layout = rawurlencode($layout);
		
		return 	'<a href="http://pinterest.com/pin/create/button/?'.
							'url='.$url.'&'.
							'media='.$media.'&'.
							'description='.$description.'" '.
							' class="pin-it-button" target="_blank" count-layout="'.$layout.'">'.
							'<img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" />'.
						'</a>';
	}


  

