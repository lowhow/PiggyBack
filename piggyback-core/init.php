<?php
/**
 * init.php 
 *
 * @version 2.0.1
 * @author Fenzy
 *
 * @package PIGGYBACK
 * @since version 2.0.0
 */

/** PIGGYBACK server path */
define ('PIGGYBACK_CORE', dirname(dirname(__FILE__ )).'/piggyback-core');

/* detect platform current used */
if (!empty($wp_version)){
		define('PIGGYBACK_PLATFORM', 'wordpress');
		define('PIGGYBACK_PLATFORM_VERSION', $wp_version);
} elseif (defined('BASEPATH') && defined('CI_VERSION')){
		define('PIGGYBACK_PLATFORM', 'codeigniter');
		define('PIGGYBACK_PLATFORM_VERSION', CI_VERSION);
} else {
		define('PIGGYBACK_PLATFORM', 'normal');
		define('PIGGYBACK_PLATFORM_VERSION', '1.0.0');
}

/** SYSTEM CORE */
require_once(PIGGYBACK_CORE.'/core/config.php');
require_once(PIGGYBACK_CORE.'/core/header.php');
require_once(PIGGYBACK_CORE.'/core/library.php');
require_once(PIGGYBACK_CORE.'/core/core.php');
require_once(PIGGYBACK_CORE.'/core/functions_util.php');

if (PIGGYBACK_PLATFORM == "wordpress"){
		$piggyback = new piggyback_core();
}

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