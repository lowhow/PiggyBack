<?php
/**
 * Twitter Tweet Button plugin.
 * 
 * @version 1.0.0 2012-Sept-13
 * @link https://dev.twitter.com/docs/tweet-button
 */

	/**
	 * Twitter Tweet Button by setting its attributes.
	 *
	 * @param string $url	URL to be shared
	 * @param string $countmode 'vertical'|'right'
	 * @param string $via
	 * @param string $lang  English ''|Simplified Chinese 'zh-cn'|Traditional Chinese 'zh-tw'|Malay 'msa'
	 * @param string $word default 'Tweet'|Simplified Chinese '发推'|Traditional Chinese '推文'
	 */
	function get_twitter_button($url, $countmode='',$via='',$lang='',$word='Tweet') {
		
		$dataUrl = 'data-url="'.$url.'" ';
		$dataCounter = 'data-count="vertical" ';
		if($countmode) $dataCounter = 'data-count="'.$countmode.'" ';
		$dataVia = '';
		if($via) $dataVia = 'data-via="'.$via.'" ';
		$dataLang = '';
		if($lang) $dataLang = 'data-lang="'.$dataLang.'" ';

		return	'<a href="https://twitter.com/share" class="twitter-share-button" '.
							$dataUrl.
							$dataCounter.
							$dataVia.
							$dataLang.
						' >'.$word.'</a>'.
						'<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
	}


  

