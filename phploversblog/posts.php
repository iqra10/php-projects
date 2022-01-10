<?php include 'includes/header.php'; ?>

<?php include 'includes/nav.php'; ?>

<?php 

// Get id

if(isset($_GET['category'])) {
    
    $category = $_GET['category'];
} else {
    
    $category = '';
}

// Create DB object

$db = new Database();

// Select post

// Select post by category

$posts_by_category = $db->select_by_category('posts', $category);

?>

<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <article class="blog-post">
          <?php if(mysqli_num_rows($posts_by_category) > 0 ) : ?>
          <?php while($categories = mysqli_fetch_assoc($posts_by_category)) : ?>
          <a style="text-decoration: none; color: black;" href="post.php?id=<?php echo $categories['id']; ?>"><h2 class="blog-post-title" style="margin-top: 20px;"><?php echo $categories['title']; ?></h2></a>
        <p class="blog-post-meta"><?php echo format_date($categories['date']); ?> by <a href="#"><?php echo $categories['author']; ?></a></p>
        <p><?php echo shortenText($categories['body']); ?></p>
        <span style="margin-top: 20px; margin-bottom: 20px;" class="space">
        <a style="padding: 10px 20px; background: #f4f4f4; color: black; text-decoration: none; border: 1px solid #cccccc;" href="post.php?id=<?php echo $categories['id']; ?>">Read More</a>
        </span>
        <?php endwhile; ?>
        <?php else : ?>
        <p>No Posts for this Category Yet.</p>
        <br/>
        <?php endif; ?>
        </article>

    </div>
<?php include 'includes/sidebar.php'; ?>      
  </div>

</main>

<?php include 'includes/footer.php'; ?>

    

    
  
