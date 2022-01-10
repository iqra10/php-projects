<?php include 'includes/header.php'; ?>
   <div class="container">
<?php        
  
$db = new Database();
       
$categories = $db->select('categories');

       
if(isset($_POST['add'])) {
    
$title = mysqli_real_escape_string($db->link, $_POST['title']);
    
if(empty($title)) {
    
    $msg = "Fields should not be empty";
    
} else {
    
    $query = "INSERT INTO categories(name) " ;
    $query .= "VALUES('{$title}')";
    $insert_row = $db->insert($query);
header('Location: index.php?msg_cat=Record+Added');    
    
}   
    
}
    
?>       
       
    <form method="post" action="add_category.php">
     <div class="form-group">
    <label style='font-size:18px; padding-bottom: 5px; font-weight:bold;' for="formGroupExampleInput">Category Name</label>
    <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Enter Category">
  </div>
 <br/>        
 <button type="submit" name="add" class="btn btn-primary">Submit</button>
<br/>
</form>
    </div>
<?php include 'includes/footer.php'; ?>