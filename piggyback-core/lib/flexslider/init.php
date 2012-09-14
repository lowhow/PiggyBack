<?php
/**
 * INIT file for FlexSlider
 *
 * @version 2.0.0
 * @link http://www.woothemes.com/flexslider/
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * 
 * @dependencies jQuery
 */

class piggyback_flexslider extends piggyback_lib_setting { 
  
		function setting () {
				return array(
						'2.0.0' => array( // library version
								'_location_folder' => '2_0_0', // library folder
								'_library_name' => 'flexslider', // library name
								'_jquery_dependency' => true, // jquery dependency, true or false
								'_js' => array('jquery.flexslider-min.js'), // js file
								'_css' => array('flexslider.css'), // css file
						),
				);
		}
    
		function get_flexslider($slideID = '', $slideitems = array(), $setup = array()){

      /** Build image list and container for FlexSlider */
      $flexslider2HTML =
      '<div id="'.$slideID.'" class="flexslider">'."\n".
        ' <ul class="slides">'."\n";
      
      if(isset($slideitems)){                      
        foreach($slideitems as $slideitem){
          $flexslider2HTML .= '<li>'.$slideitem.'</li>'."\n";
        }
      }else{
        $flexslider2HTML .=
        '<li><img src="'.$this->library_url().'demo/images/kitchen_adventurer_caramel.jpg" /></li>'."\n".
        '<li><img src="'.$this->library_url().'demo/images/kitchen_adventurer_donut.jpg" /></li>'."\n".
        '<li><img src="'.$this->library_url().'demo/images/kitchen_adventurer_cheesecake_brownie.jpg" /></li>'."\n";  
      }
      
      $flexslider2HTML .= ' </ul>'."\n".'</div>';
                          
      $flexslider2HTML .=
      '<script type="text/javascript" charset="utf-8">'."\n".
      ' jQuery(window).load(function() {'."\n".
      '   jQuery("#'.$slideID.'").flexslider({';
      
      if(isset($setup)){
        //point to end of the array
        end($setup);
        //fetch key of the last element of the array.
        $lastElementKey = key($setup);
    
        foreach($setup as $key => $value){
    
          if(is_string($value)) $value = '"'.$value.'"';
          if(is_bool($value)) {
            if($value) {
              $value = 'true';
            }else{
              $value = 'false';
            }
          }
          
          $flexslider2HTML .= $key.': '.$value;
          
          if ($key !== $lastElementKey){
            $flexslider2HTML .= ', ';  
          }
        }
      }else{
        $flexslider2HTML .= 'animation: "slide"';                           
      }
                                        
      $flexslider2HTML .=
      '   });'."\n".
      ' });'."\n".
      '</script>' . "\n";
                       
      return $flexslider2HTML;
    }
    
}
