<?php include 'includes/header.php'; ?>

<?php 

// Get id

if(isset($_GET['id'])) {
    
    $id = $_GET['id'];
    
} else {
    
    $id = '';
}

// Create DB object

$db = new Database();
        
// Select category by id         
 
$category = $db->select_by_id('categories', $id);

$row = mysqli_fetch_assoc($category); 
      
?>

   <div class="container">
       
<?php        
  
if(isset($_POST['update'])) {
        
$title = mysqli_real_escape_string($db->link, $_POST['title']);
    
if(empty($title)) {
    
    $msg = "Fields should not be empty";
    
} else {
    
  $query = "UPDATE categories SET ";
  $query .="name = '{$title}' ";
  $query .= "WHERE id = {$id}";
    
$update = $db->update($query);
header("Location: index.php?msg_cat=".urlencode('Record Updated'));
   
    
} 
    }

?>       
    <form method="post" action="edit_category.php?id=<?php echo $id; ?>">
     <div class="form-group">
    <label style='font-size:18px; padding-bottom: 5px; font-weight:bold;' for="formGroupExampleInput">Category Name</label>
    
    <input type="text" class="form-control" name="title" value="<?php echo $row['name']; ?>" id="formGroupExampleInput" placeholder="Enter Category">
  </div>
 <br/>        
 <button type="submit" name="update" class="btn btn-primary">Submit</button>
<br/>
</form>
    </div>
<?php include 'includes/footer.php'; ?>