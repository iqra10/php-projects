<?php 

class Template{
    
    // Path to template
    
 protected $template;
     
    // Variables passed in 

 protected $vars = array();
    
/*
 * Class Constructor
*/

public function __construct($template) {
    
    $this->template = $template;
}    

/*
 * Class Constructor
*/    
  
public function __get($key) {
    
    return $this->vars[$key];
}    

/*
 * Convert Object To String
*/    
  
public function __toString() {
    
    extract($this->vars);
    chdir(dirname($this->template));
    ob_start();
    
    include basename($this->template);
    
    return ob_get_clean();
    
}       
    
}


?>