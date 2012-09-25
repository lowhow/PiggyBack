<?php
/**
 * INIT file for WP Alchemy
 *
 * @version 2012-Sep-25
 * @author How
 * 
 * @package PIGGYBACK
 * @since version 2.0
 * 
 * @dependencies jQuery
 */

class piggyback_wpalchemy extends piggyback_lib_setting { 

		function setting () {
				return array(
						'1.5.0' => array( // library version
								'_location_folder' => '1_5_0', // library folder
								'_library_name' => 'wpalchemy', // library name
						),
				);
		}

}