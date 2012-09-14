<?php
/**
 * INIT file for PrettyPhoto
 *
 * @version 3.1.4
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * @author How
 * 
 * @dependencies jQuery
 */

class piggyback_prettyphoto extends piggyback_lib_setting { 

		function setting () {
				return array(
						'3.1.4' => array( // library version
								'_location_folder' => '3_1_4', // library folder
								'_library_name' => 'prettyphoto', // library name
								'_jquery_dependency' => true, // jquery dependency, true or false
								'_js' => array('js/jquery.prettyPhoto.js'), // js file
								'_css' => array('css/prettyPhoto.css'), // css file
						),
				);
		}

}
