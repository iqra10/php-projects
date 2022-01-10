<?php 

function format_date($date){
    
    return date('F j, Y, g:i a', strtotime($date));
    
}

function shortenText($text) {
    
        $new = substr($text, 0, 350);

        if (strlen($text) > 350) {
            
            return $new.'...';
            
        } else {
            
            return $text;
            
        }
    }




?>