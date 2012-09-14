<?php
/**
 * Config Core file for PHP
 *
 * @version 2.0
 * 
 * @package PIGGYBACK
 * @since version 1.0
 */

class piggyback_config {

		var $_config = array();

    function __construct() {
				$this->initialize();
				$this->load_config();
    }

		function initialize () {
				/** initiaze function */
		}

		function load_config() {
				global $piggyback_config;
				if (empty($piggyback_config)) {
					die ("PIGGYBACK Config not setup correctly !!!!");
				}
				
				foreach ( $piggyback_config as $key => $config ){
						// check config if error show error

						// if error 
						// will show error and 
						//echo "halt here!!";
						//exit;
						$this->_config[$key] = $config;
				}

				$this->_config['core_url'] .= "/piggyback-core";
				$this->_config['jquery'] = ($this->_config['jsload'] == "jquery") ? true : false;
		}

		function get_config($name = "") {
				if ($name == ""){
					return $this->_config;
				}else{
					return $this->_config[$name];
				}
		}

}