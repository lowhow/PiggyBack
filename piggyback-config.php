<?php
/** 囧
 * Config File
 *
 * @package PIGGYBACK
 * @since version 0.1
 */

$piggyback_config = array(
											'core_url' =>  get_bloginfo('stylesheet_directory'), // Core url location without "/piggyback-core".
											/**
											*		NOTE: If components are jQuery dependent, jQuery will be loaded automatically.
											*/
											'jsload' => 'jquery', // 'none', 'jquery'.
											'autoload' => array (
                        
                          /** Bootstrap as a css framework. */
                          array('name' => 'bootstrap', 'version' => '2.1.0', 'responsive' => true),
                          
                          /** Isotope is a jQuery plugin */
                          //array('name' => 'isotope', 'version' => '1.5.9'),
                          
                          /** jQuery Validation is a jQuery plugin to validate input fields using jQuery. */
                          array('name' => 'jqueryvalidation', 'version' => ''),
                          
                          /** Flexslider is a jQuery plugin */
                          array('name' => 'flexslider', 'version' => ''),
                          
                          /** PrettyPhoto is a jQuery plugin */
                          array('name' => 'prettyphoto', 'version' => ''),
                          
                          /** NHPOptions is a WordPress Theme Option framework. */
                          array('name' => 'nhpoptions', 'version' => ''),
                          
                          /** WP Alchemy is a WordPress metabox framework.
                           *
                           *  Must do prior autoload:
                           *  1. Create folder 'metaboxes' in theme folder.
                           *  2. Create file call 'functions-metaboxes.php'.
                           *  3. In 'functions-metaboxes.php', include_once the metaboxes files.
                           */
                          array('name' => 'wpalchemy', 'version' => ''),
                          
                          array('name'=> 'facebook', 'version' => '1.0.0'),
                          array('name'=> 'google', 'version' => '1.0.0'),
                          array('name'=> 'pinterest', 'version' => '1.0.0'),
                          array('name'=> 'linkedin', 'version' => '1.0.0'),
                          array('name'=> 'twitter', 'version' => '1.0.0')
                        )
                    );

require_once(get_stylesheet_directory().'/piggyback-core/init.php');
