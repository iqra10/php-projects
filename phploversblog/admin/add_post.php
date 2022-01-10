<?php include 'includes/header.php'; ?>
   <div class="container">
       
<?php        
  
$db = new Database();
       
$categories = $db->select('categories');

       
if(isset($_POST['add'])) {
    
$title = mysqli_real_escape_string($db->link, $_POST['title']);    
$body = mysqli_real_escape_string($db->link, $_POST['body']);    
$author = mysqli_real_escape_string($db->link, $_POST['author']);    
$tags = mysqli_real_escape_string($db->link, $_POST['tags']);    
$category = mysqli_real_escape_string($db->link, $_POST['category']);    
    
    // Validation
if(empty($title)|| empty($category) || empty($body) || empty($author)) {
    
    $msg = 'Please fill these fields';
} else {


$query = "INSERT INTO posts(title, body, author, tags, category) " ;
$query .= "VALUES('{$title}', '{$body}', '{$author}', '{$tags}', '{$category}')";
$insert_rows = $db->insert($query);
header("Location: index.php?msg_post=".urlencode('Record Added'));

    
}
    
}       
       
       
?>       
       <form method="post" action="add_post.php">
     <div class="form-group">
    <label  style='font-size:18px; padding-bottom: 5px; font-weight:bold; font-family: arial;' for="formGroupExampleInput">Post Title</label>
    <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Enter Title">
  </div>
           <br/>
  <div class="form-group">
    <label style='font-size:18px; padding-bottom: 5px; font-weight:bold; font-family: arial;' for="formGroupExampleInput2">Post Body</label>
      <textarea class="form-control" name="body" id="formGroupExampleInput2" placeholder="Enter Body Text"></textarea>
  </div>
<br/>
  <div class="form-group">
    <label style='font-size:18px; padding-bottom: 5px; font-weight:bold; font-family: arial;' for="formGroupExampleInput2">Categories</label>
      <select class="custom-select custom-select-lg mb-3" name="category">
          
          <?php while($cat = mysqli_fetch_assoc( $categories ) ) :  ?>
            
          <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option> 
            
 <?php endwhile; ?>
      </select>
  </div>
<br/>
  <div class="form-group">
    <label style='font-size:18px; padding-bottom: 5px; font-weight:bold; font-family: arial;' for="formGroupExampleInput2">Author</label>
      <textarea class="form-control" name="author" id="formGroupExampleInput2" placeholder="Enter Author Name"></textarea>
  </div>
 <br/>          
    <div class="form-group">
    <label  style='font-size:18px; padding-bottom: 5px; font-weight:bold; font-family: arial;' for="formGroupExampleInput2">Tags</label>
      <textarea class="form-control" name="tags" id="formGroupExampleInput2" placeholder="Enter Tags"></textarea>
  </div> 
<br/>           
           
 <button type="submit" name="add" class="btn btn-primary">Submit</button>

</form>
    </div>
<?php include 'includes/footer.php'; ?>