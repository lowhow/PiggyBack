<?php
/**
 *  @todo 2012/08/06 - Cleanup comments.
 */

/**
 * INIT file for jQuery Validation
 *
 * @version 1.9.0
 * @link http://bassistance.de/jquery-plugins/jquery-plugin-validation/
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * 
 * @dependencies jQuery
 */

class piggyback_jqueryvalidation extends piggyback_lib_setting { 
  
		function setting () {
				return array(
						'1.9.0' => array( // library version
								'_location_folder' => '1_9_0', // library folder
								'_library_name' => 'jqueryvalidation', // library name
								'_jquery_dependency' => true, // jquery dependency, true or false
								'_js' => array('jquery.validate.min.js'), // js file
						),
				);
		}
	
}