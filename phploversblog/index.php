<?php include 'includes/header.php'; ?>

<?php include 'includes/nav.php'; ?>

<?php 

// Create DB object

$db = new Database();

// Select post by id

$posts = $db->select('posts');

?>

<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <article class="blog-post">
          <?php while($post = mysqli_fetch_assoc($posts)) : ?>
          <a style="text-decoration: none; color: black;" href="post.php?id=<?php echo $post['id']; ?>"><h2 class="blog-post-title" style="margin-top: 20px;"><?php echo $post['title']; ?></h2></a>
        <p class="blog-post-meta"><?php echo format_date($post['date']); ?> by <a href="#"><?php echo $post['author']; ?></a></p>
        <p><?php echo shortenText($post['body']); ?></p>
        <span style="margin-top: 20px; margin-bottom: 20px;" class="space">
        <a style="padding: 10px 20px; background: #f4f4f4; color: black; text-decoration: none; border: 1px solid #cccccc;" href="post.php?id=<?php echo $post['id']; ?>">Read More</a>
        </span>
        <?php endwhile; ?>
        <br/>
        </article>

    </div>
<?php include 'includes/sidebar.php'; ?>      
  </div>

</main>

<?php include 'includes/footer.php'; ?>

    