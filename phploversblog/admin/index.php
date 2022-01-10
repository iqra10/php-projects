<?php include 'includes/header.php'; ?>

<?php 
// Create Object 

$db = new Database();

// Select Posts

$posts = $db->select('posts');

// Select Category

$categories = $db->select('categories');
 
// Delete post by id

if(isset($_GET['delete_p'])) {
    
   $id = $_GET['delete_p']; 
    
  $delete = $db->delete('posts', $id);
    
 header("Location: index.php?msg_post=".urlencode('Post Deleted'));

    
}

// Delete category by id

if(isset($_GET['delete_cat'])) {
    
   $id = $_GET['delete_cat']; 
    
  $delete = $db->delete('categories', $id);
    
 header("Location: index.php?msg_cat=".urlencode('Category Deleted'));

    
}



?>

<br/>
<br/>
<div class="container">
    
 <?php if(isset($_GET['msg_post'])) : ?>    

<p style="background-color: black; color: white; padding: 10px;"> <?php echo $_GET['msg_post']; ?>
    
</p>
    
<?php endif;  ?>    
    
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Post ID#</th>
      <th scope="col">Post Title</th>
      <th scope="col">Category</th>
      <th scope="col">Author</th>
      <th scope="col">Date</th>
      <th scope="col">Delete</th>
      </tr>
  </thead>
  <tbody>
<?php while( $row = mysqli_fetch_assoc( $posts ) ) : ?>      
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
        <td><a href="edit_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
      <td><?php echo $row['category']; ?></td>
      <td><?php echo $row['author']; ?></td>
      <td><?php echo format_date($row['date']); ?></td>
    <td><a class="btn btn-danger" style="font-size: 14px;" href="index.php?delete_p=<?php echo $row['id']; ?>">Delete</a></td>    
    </tr>
<?php endwhile; ?>
</table>
    
<br/><br/>
  
 <?php if(isset($_GET['msg_cat'])) : ?>    

<p style="background-color: black; color: white; padding: 10px;"> <?php echo $_GET['msg_cat']; ?>
    
</p>
    
<?php endif;  ?>     
    
    
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Category ID#</th>
      <th scope="col">Category Title</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
<?php while( $row =  mysqli_fetch_assoc( $categories )) : ?>      
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><a href="edit_category.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
  <td><a class="btn btn-danger" style="font-size: 14px;" href="index.php?delete_cat=<?php echo $row['id']; ?>">Delete</a></td>
      </tr>
<?php endwhile; ?>      
  </tbody>
</table>

    </div>



<?php include 'includes/footer.php'; ?>