<?php
/**
 * INIT file for Google Plugins
 * 
 * @version 2012-Sep-13
 * @link http://pinterest.com/about/goodies/
 * 
 * @package PiggyBack
 * @since version 2.0.0
 */

class piggyback_google extends piggyback_lib_setting { 

		function setting () {
				return array(
						'1.0.0' => array( // library version
								'_location_folder' => '1_0_0', // library folder
								'_library_name' => 'google', // library name
								'_php' => array('google.php')
						),
				);
		}
    
}