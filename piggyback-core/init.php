<?php
/**
 * init.php 
 *
 * @version 2.0
 *
 * @package PIGGYBACK
 * @since version 1.0
 */

/** PIGGYBACK Theme server path */
define ( 'PIGGYBACK_CORE', dirname ( dirname ( __FILE__ ) ).'/piggyback-core' );

/* detect platform current used */
if (!empty($wp_version)){
	define( 'PIGGYBACK_PLATFORM', 'wordpress');
	define( 'PIGGYBACK_PLATFORM_VERSION', $wp_version);
}

/** SYSTEM CORE */
require_once(PIGGYBACK_CORE.'/core/config.php');
require_once(PIGGYBACK_CORE.'/core/header.php');
require_once(PIGGYBACK_CORE.'/core/library.php');
require_once(PIGGYBACK_CORE.'/core/core.php');
require_once(PIGGYBACK_CORE.'/core/functions_util.php');

$piggyback =  new piggyback_core();


/**
 * Defining Media folder URL
 * 
 * @author HOW
 * @package PIGGYBACK
 * @since version 1.1
 */
if(is_dir(dirname ( dirname ( __FILE__ ) ).'/piggyback-media')){
  define ( 'PIGGYBACK_MEDIA_URL', $piggyback_config['core_url'] . '/piggyback-media' );
}