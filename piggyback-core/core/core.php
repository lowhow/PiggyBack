<?php
/**
 * Basic Core file for Piggyback
 *
 * @version 2.0.1
 * @author Fenzy
 * 
 * @package PIGGYBACK
 * @since version 1.0
 */

class piggyback_core {

		function __construct() {
				$this->header = new piggyback_header();
				$this->auto_load();
    }
		
		function auto_load() {
				/** initial the auto loading library file */
				$config = new piggyback_config();
				foreach ($config->get_config('autoload') as $autoload){
						
						$autoload_name = $autoload['name'];
						$autoload_version = $autoload['version'];
						$autoload_responsive = ($autoload['responsive']) ? true : false;

						require_once(PIGGYBACK_CORE."/lib/".$autoload_name."/init.php");
						$library = "piggyback_".$autoload_name;
						$this->$autoload_name = new $library($autoload_version);
						$this->header->set_jquery_dependency($this->$autoload_name->get_jquery_dependency());
						$this->header->set_js($this->$autoload_name->get_js());
						$this->header->set_css($this->$autoload_name->get_css());
						
						if ($autoload_responsive){
							$this->header->set_meta_responsive($this->$autoload_name->get_meta_responsive());
						}

						if (is_file(PIGGYBACK_CORE."/".PIGGYBACK_PLATFORM."/functions-".$autoload_name.".php")) {
								require_once(PIGGYBACK_CORE."/".PIGGYBACK_PLATFORM."/functions-".$autoload_name.".php");							
						}
				}
				
				/* include the platform file */
				if (defined('PIGGYBACK_PLATFORM')){
						require_once(PIGGYBACK_CORE."/".PIGGYBACK_PLATFORM."/init.php"); // load plateform
				}
		}

		function debug() {
				echo "Library loaded : <br />";
				foreach ($this as $obj) {
						echo $class = str_replace("piggyback_", "", get_class($obj));
						if ($class != "header") echo " (version : ".$obj->get_version().")";
						echo"<br />";
				}
		}
}