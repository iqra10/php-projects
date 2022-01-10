<?php include 'includes/header.php'; ?>

<?php

// Get id 

if(isset($_GET['id'])) {
    
    $id = $_GET['id'];
} else{
    
    $id = '';
}

// Creat Object

$db = new Database();

// Select post by id

 $post = $db->select_by_id('posts', $id);
 $row = mysqli_fetch_assoc($post);        


// Select Categories

$categories = $db->select('categories');

// Update post

if(isset($_POST['update'])) {
    
$title = mysqli_real_escape_string($db->link, $_POST['title']);    
$body = mysqli_real_escape_string($db->link, $_POST['body']);    
$author = mysqli_real_escape_string($db->link, $_POST['author']);    
$tags = mysqli_real_escape_string($db->link, $_POST['tags']);    
$category = mysqli_real_escape_string($db->link, $_POST['category']); 
  
if(empty($title)|| empty($category) || empty($body) || empty($author)) {
    
    $msg = "Fields should not be empty";
    
} else {
    
  $query = "UPDATE posts SET ";
  $query .="title = '{$title}', ";
  $query .="body = '{$body}', ";
  $query .="author = '{$author}', ";
  $query .="tags = '{$tags}', ";
  $query .="category = '{$category}' ";
  $query .="WHERE id = {$id}";
    
$update = $db->update($query);
header("Location: index.php?msg_post=".urlencode('Record Updated'));

        
} 
    }

?>   


<div class="container">
       <form method="post" action="edit_post.php?id=<?php echo $id; ?>">
     <div class="form-group">
    <label  style='font-size:18px; padding-bottom: 5px; font-weight:bold; font-family: arial;' for="formGroupExampleInput">Post Title</label>
    <input type="text" value="<?php echo $row['title']; ?>" name="title" class="form-control" id="formGroupExampleInput" placeholder="Enter Title">
  </div>
           <br/>
  <div class="form-group">
    <label style='font-size:18px; padding-bottom: 5px; font-weight:bold; font-family: arial;' for="formGroupExampleInput2">Post Body</label>
      <textarea class="form-control" id="formGroupExampleInput2" name="body" placeholder="Enter Body Text">
    <?php echo $row['body']; ?>              
    </textarea>
  </div>
<br/>

<br/>
 <div class="form-group">
    <label  style='font-size:18px; padding-bottom: 5px; font-weight:bold; font-family: arial;' for="formGroupExampleInput">Post Author</label>
    <input type="text" value="<?php echo $row['title']; ?>" name="author" class="form-control" id="formGroupExampleInput" placeholder="Enter Title">
  </div>
 <br/>          
    <div class="form-group">
    <label  style='font-size:18px; padding-bottom: 5px; font-weight:bold; font-family: arial;' for="formGroupExampleInput2">Tags</label>
      <textarea class="form-control" id="formGroupExampleInput2" name="tags" placeholder="Enter Tags">
    <?php echo $row['tags']; ?>
        </textarea>
  </div> 
<br/> 
  
    <div class="form-group">
    <label style='font-size:18px; padding-bottom: 5px; font-weight:bold; font-family: arial;' for="formGroupExampleInput2">Categories</label>
        <select class="custom-select custom-select-lg mb-3" name="category">
<?php while($cat = mysqli_fetch_assoc( $categories ) ) :  ?>
            
            <?php if($cat['id'] == $row['category'] ) {
    
               $selected = 'selected'; 
    
            } else {
        
              $selected = '';
             }
    
            ?>
            
          <option <?php echo $selected; ?> value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option> 
            
 <?php endwhile; ?>
            
        </select>
  </div>
<br/>         

           
<button type="submit"  style="margin-bottom: 50px;" name="update" class="btn btn-primary">Submit</button>


</form>
    </div>
<?php include 'includes/footer.php'; ?>