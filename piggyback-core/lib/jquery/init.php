<?php
/**
 * INIT file for JQuery
 *
 * @version 2012-Sep-13
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * 
 */

class piggyback_jquery extends piggyback_lib_setting { 

    function setting () {
				return array(
						'1.7.2' => array( // library version
								'_location_folder' => '1_7_2', // library version
								'_library_name' => 'jquery', // library name
								'_jquery_dependency' => true, // jquery dependency, true or false
								'_js' => array ('jquery-1.7.2.min.js'), // js file
						),
				);
		}
}