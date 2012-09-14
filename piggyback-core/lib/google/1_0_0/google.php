<?php
/**
 * Google Plusone Button plugin.
 * 
 * @version 1.0.0 2012-Sept-13
 * @link https://dev.twitter.com/docs/tweet-button
 */

   /**
   * Get Facebook XML namespace to the <html> tag of your document.
   * This is necessary for XFBML to work in earlier versions of Internet Explorer.
   * 
   */
  function get_gplusone_itemscope(){
    return ' itemscope itemtype="http://schema.org/Article"';
  }

	/**
	 * Google Plusone by setting its attributes.
	 *
	 * @param string $href 
	 * @param string $size Options: null - Standard(24px), 'small' (15px), 'medium' - (20px), 'tall' - (60px).
	 * @param string $annotation Options: null - bubble, 'none', 'inline'.
	 */
	function get_gplusone_button($url, $size=null, $annotation=null, $lang='') {
		
		if(!$size) $size = 'tall';
		if($annotation) $annotation = ' annotation="'.$annotation.'" ';
		
		if($lang) $lang = ' window.___gcfg = {lang: "'.$lang.'"}; ';
		
		return'<g:plusone size="'.$size.'" '.$annotation.' href="'.$url.'"></g:plusone>

					<script type="text/javascript">'.$lang.
						'(function() {
							var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
							po.src = "https://apis.google.com/js/plusone.js";
							var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
						})();
					</script>';
	}


  

