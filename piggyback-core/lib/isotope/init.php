<?php
/**
 * INIT file for Isotope
 *
 * @version 2012-Sep-13
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * 
 * @dependencies jQuery
 *
 * @todo complete this library
 */

class piggyback_isotope extends piggyback_lib_setting { 

    function setting () {
				return array(
						'1.5.19' => array( // library version
								'_location_folder' => '1_5_19', // library folder
								'_library_name' => 'isotope', // library name
								'_jquery_dependency' => true, // jquery dependency, true or false
								'_js' => array('jquery.isotope.min.js'), // js file
						),
				);
		}
}