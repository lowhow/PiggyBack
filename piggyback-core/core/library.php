<?php
/**
 * Library class for Piggyback
 *
 * @version 2.0.1
 * @author Fenzy
 * 
 * @package PIGGYBACK
 * @since version 1.0
 */

class piggyback_lib_setting {

		var $_version = '2.0.1'; 
		var $_location_folder = ''; 
		var $_library_name = 'library'; 
		var $_jquery_dependency = true; 
		var $_meta_reponsive = array('content' => '', 'css'=> '');
		var $_js = array();
		var $_css = array();
		var $_php = array();

		function __construct($version = ""){
				$settings = $this->setting();
				
				$this->_version = (empty($version)) ? current(array_keys($settings)) : $version;

				foreach($settings[$this->_version] as $key => $setting) {
						$this->$key = $setting;
				}
				
				foreach($this->_php as $php) {
						require_once ($this->library_path().$php);
				}
		}

		function setting(){
				/* Library Settings */
		}

		function library_url() {
				$config = new piggyback_config();
				return $config->get_config('core_url')."/lib/".$this->_library_name."/".(($this->_location_folder) ? $this->_location_folder."/" : "");
		}

		function library_path() {
				return PIGGYBACK_CORE."/lib/".$this->_library_name."/".(($this->_location_folder) ? $this->_location_folder."/" : "");
		}

		function get_version() {
				return $this->_version;
		}

		function get_jquery_dependency() {
				return $this->_jquery_dependency;
		}

		function get_meta_responsive ($key = "") {
				$meta_reponsive['content'] = $this->_meta_reponsive['content'];
				$meta_reponsive['css'] = ($this->_meta_reponsive['css']) ? $this->library_url ().$this->_meta_reponsive['css'] : "";

				if ($key == ""){
						return $meta_reponsive;
				} else {
						return $meta_reponsive[$key];
				}
		}

		function get_css_responsive () {
				return $this->_css_reponsive;
		}

		function get_js() {
				$_js = array();
				foreach ($this->_js as $key => $js) {
						$_js[] = $this->library_url().$js;
				}
				return $_js;
		}

		function get_css() {
				$_css = array();
				foreach ($this->_css as $key => $css) {
						$_css[] = $this->library_url().$css;
				}
				return $_css;
		}
}