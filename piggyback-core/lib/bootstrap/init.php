<?php
/**
 * INIT file for Boostrap
 *
 * @version 2012-Sep-25
 * @author How
 * 
 * @package PIGGYBACK
 * @since version 2.0.0
 * 
 * @dependencies jQuery
 */

class piggyback_bootstrap extends piggyback_lib_setting { 

		function setting () {
				return array(
						'2.1.0' => array( // library version
								'_location_folder' => '2_1_0', // library folder
								'_library_name' => 'bootstrap', // library name
								'_jquery_dependency' => true, // jquery dependency, true or false
								'_meta_reponsive' => array(  // meta responsive content can be empty
										'content' => 'width=device-width, initial-scale=1.0', 
										'css' => 'css/bootstrap-responsive.min.css'
								),
								'_js' => array('js/bootstrap.min.js'), // js file
								'_css' => array('css/bootstrap.min.css'), // css file
						),

						'2.0.4' => array( // library version
								'_location_folder' => '2_0_4', // library folder
								'_library_name' => 'bootstrap', // library name
								'_jquery_dependency' => true, // jquery dependency, true or false
								'_meta_reponsive' => array(  // meta responsive content can be empty
										'content' => 'width=device-width, initial-scale=1.0', 
										'css' => 'css/bootstrap-responsive.min.css'
								),
								'_js' => array('js/bootstrap.min.js'), // js file
								'_css' => array('css/bootstrap.min.css'), // css file
						),
				);
		}

}

