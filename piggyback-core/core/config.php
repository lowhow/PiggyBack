<?php
/**
 * Config Core file for Piggyback
 *
 * @version 2.0.1
 * @author Fenzy
 * 
 * @package PIGGYBACK
 * @since version 1.0
 */

class piggyback_config {

		var $_config = array();

    function __construct () {
				$this->initialize ();
				$this->load_config ();
    }

		function initialize () {
				/** initiaze function */
		}

		function load_config () {
				global $piggyback_config;
				if (empty($piggyback_config)) {
					die ("PIGGYBACK Config not setup correctly !!!!");
				}
				
				foreach ($piggyback_config as $key => $configs){
						if ($key == "autoload") {
								foreach ($configs as $key2 => $config) {
									$configs[$key2]['responsive'] = (isset($config['responsive'])) ? $config['responsive'] : false;
								}
						}
						$this->_config[$key] = $configs;
				}

				$this->_config['core_url'] .= "/piggyback-core";
				$this->_config['jquery'] = ($this->_config['jsload'] == "jquery") ? true : false;
		}

		function get_config ($name = "") {
				if ($name == "") {
					return $this->_config;
				}else{
					return $this->_config[$name];
				}
		}

}