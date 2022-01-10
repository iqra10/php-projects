<?php 

 class Database{
     
     public $host     = DB_HOST;
     public $username = DB_USER;
     public $password = DB_PASSWORD;
     public $db_name  = DB_NAME;
     
  public $link;
  public $error;
    
/*
* class constructor
*/
     
   public function __construct() {
       // Call connect
    $this->connect();   
           
   }    
     
/*
*Connector
*/     
 
  private function connect(){
      
      $this->link = new mysqli($this->host, $this->username, $this->password, $this->db_name);
      
      if(!$this->link){
          
        $this->error = "Connection failed: " . $this->link->connect_error;
        return false;
          
      }
      
  }
  
/*
*Select
*/     
      
public function select($table){
    
    $query = "SELECT * FROM . $table ORDER BY id DESC";
    return $result = mysqli_query($this->link, $query);        
    // select validation
    
    if($result->num_rows > 0){
        
        return true;
        
    } else{
        
        return false;
        
    }
} 
     
     
     
public function select_by_id($table, $id){
    
    $query = "SELECT * FROM . {$table} WHERE id = $id";
    return $result = mysqli_query($this->link, $query);
        
    // select validation
    
    if($result->num_rows > 0){
        
        return true;
        
    } else{
        
        return false;
        
    }
}       
     
     
     
public function select_by_category($table, $category){
    
    $query = "SELECT * FROM . $table WHERE category = $category";
    return $result = mysqli_query($this->link, $query);
        
    // select validation
    
    if($result->num_rows > 0){
        
        return true;
        
    } else{
        
        return false;
        
    }
}            
     
     
 
/*
*Insert
*/      
   
public function insert($query){
    
     $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
    
    // insert validation
    
    if($insert_row){
        
        return true;
        
    } else{
        
     die('Error : ('. $this->link->errno .') '. $this->link->error);

    }
}     

/*
*Update
*/      
   
public function update($query){
    
     $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
    
    // update validation
    
    if($update_row){
        
        return true;
        
        
    } else{
        
     die('Error : ('. $this->link->errno .') '. $this->link->error);

    }
}     
     
/*
*Delete
*/      
   
public function delete($table, $id){
    
    $query = "DELETE FROM . $table WHERE id = '{$id}'" ;
     $delete_row = mysqli_query($this->link, $query);
        
    // delete validation
    
    if($delete_row){
       
        return true;
        
    } else{
         
     die('Error : ('. $this->link->errno .') '. $this->link->error);

    }
}     
     
}     
     
 

?>