<?php 

class Topic{
    
    // Init DB
    
private $db;

/*
* Constructor
*/
 
 public function __construct() {
     
     $this->db = new Database;
          
 }
  
/*
* Get All Topics
*/   
    
public function getAllTopics() {
    
    $this->db->query("SELECT topics.*, users.username, users.avatar, categories.name FROM topics
                      INNER JOIN users ON topics.user_id = users.id
                      INNER JOIN categories ON topics.category_id = categories.id
                      ORDER BY create_date DESC");
    
// Assign Result set
    
$results = $this->db->resultset();
    
return $results;
        
}    

public function getTotalTopics() {
    
  $this->db->query("SELECT * FROM topics");
  $row = $this->db->resultset();
  return $this->db->rowCount();
}   
    
public function getTotalCategories() {
    
  $this->db->query("SELECT * FROM categories");
  $row = $this->db->resultset();
  return $this->db->rowCount();
}   
 
public function getTotalReplies() {
    
  $this->db->query("SELECT * FROM replies WHERE topic_id = $topic_id");
  $row = $this->db->resultset();
  return $this->db->rowCount();
}     
     

function getByCategory($category) {
    
 $this->db->query("SELECT topics.*, categories.*, users.username, users.avatar FROM topics
 INNER JOIN categories ON topics.category_id = categories.id INNER JOIN users ON topics.user_id = users.id WHERE topics.category_id = :category_id;
 ");
       
//  $this->db->query("SELECT * FROM categories WHERE id = :category_id");  
    
    
    $this->db->bind(":category_id" , $category);
    // Assign rows
    
$results = $this->db->resultset();
    
return $results;
        
}    

public function getTopic($id) {
    
    $this->db->query("SELECT topics.*, users.username, users.name, users.avatar FROM topics
    INNER JOIN users ON topics.user_id = users.id WHERE topics.id = :id");
    
    $this->db->bind(':id', $id);
    
    $row = $this->db->single();
    
    return $row;
}
 
public function getReplies($topic_id) {
    
    $this->db->query("SELECT replies.*, users.* FROM replies
    INNER JOIN users ON replies.user_id = users.id WHERE replies.topic_id = :topic_id
    ");
    
    $this->db->bind(':topic_id', $topic_id);
        
    $results = $this->db->resultset();
    
    return $results;
}    
 
public function getByUser($user_id)     {
    
    $this->db->query("SELECT topics.*, categories.*, users.username, users.avatar FROM topics
     INNER JOIN categories ON topics.category_id = categories.id 
     INNER JOIN users ON topics.user_id = users.id 
     WHERE topics.user_id = :user_id;
    ");
    $this->db->bind(':user_id', $user_id);
        
    $results = $this->db->resultset();
    
    return $results;
    
}
    
    
}



?>