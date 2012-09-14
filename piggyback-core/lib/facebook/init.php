<?php
/**
 * INIT file for Facebook Social Plugins
 * 
 * @version 1.0.0 2012-Sept-12
 * @link http://developers.facebook.com/docs/plugins/
 * 
 * @package PiggyBack
 * @since version 1.1
 */

class piggyback_facebook extends piggyback_lib_setting { 

		function setting () {
				return array(
						'1.0.0' => array( // library version
								'_location_folder' => '1_0_0', // library folder
								'_library_name' => 'facebook', // library name
								'_php' => array('facebook.php')
						),
				);
		}
    
}