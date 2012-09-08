<?php
/**
 * init.php 
 *
 * @package PIGGYBACK
 * @since version 0.1
 */

/** PIGGYBACK Theme server path */
define ( 'PIGGYBACK_CORE', dirname ( dirname ( __FILE__ ) ).'/piggyback-core' );

require_once ( PIGGYBACK_CORE.'/../piggyback-config.php' );

/**
 *  System autoload. Whether you like it or not.
 */

/** SYSTEM CORE */
require_once ( PIGGYBACK_CORE.'/core/init.php' );


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


