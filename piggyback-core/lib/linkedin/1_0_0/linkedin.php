<?php
/**
 * Linkedin Share plugin.
 * 
 * @version 1.0.0 2012-Sept-13
 * @link http://developer.linkedin.com/plugins/share-plugin-generator
 */

	/**
	 * Linkedin Share by setting its attributes.
	 *
	 * @param string $url	URL to be shared
	 * @param string $countmode 'top'|'right'|''
	 */
	function get_linkedin_share($url, $countmode='') {
		
		$dataUrl = 'data-url="'.$url.'" ';
		$dataCounter = '';
		if($countmode) $dataCounter = 'data-counter="'.$countmode.'" ';
		
		return	'<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>'.
						'<script type="IN/Share" '.
							$dataUrl.
							$dataCounter.
						'></script>';
	}


  

