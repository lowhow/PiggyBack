<?php
/**
 * INIT file for WP Alchemy
 *
 * @version 1.5.0
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * @author How
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