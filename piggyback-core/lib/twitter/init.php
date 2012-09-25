<?php
/**
 * INIT file for Twitter Tweet Button
 * 
 * @version 2012-Sept-13
 * @link http://pinterest.com/about/goodies/
 * 
 * @package PiggyBack
 * @since version 2.0.0
 */

class piggyback_twitter extends piggyback_lib_setting { 

		function setting () {
				return array(
						'1.0.0' => array( // library version
								'_location_folder' => '1_0_0', // library folder
								'_library_name' => 'twitter', // library name
								'_php' => array('twitter.php')
						),
				);
		}
    
}