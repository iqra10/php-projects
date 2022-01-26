<?php 
 
function urlFormat($str) {
    
    // strip out all whitspaces
    
$str = preg_replace('/\s*/', '', $str);
// Convert the string into all lowercase
$str = strtolower($str);
    // URL Encode
$str = urlencode($str);
return $str;

}

function formatDate($date)  {
    
    $date = date('F j, Y, g:i a', strtotime($date));
    return $date;
    
}

function is_active($category) {
    
    if(isset($_GET['category'])) {
        
       if($_GET['category'] == $category){
           
           return 'active';
           
       } else {
           
           return '';
       }
        
    } else {
        
      if($category == null){
          
          return 'active';
 
    }
    
}

}

?>