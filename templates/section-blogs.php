<?php 

  require "admin/config/dbConn.php";
  

?>

<div class="container m-top-30">
  <h2>My Blogs</h2>
    <?php $blogs = $dbConn->query("SELECT * FROM blogs"); ?>
    <?php while($blog = $blogs->fetch_assoc()): ?>
    <div class="row blog-item">
      <a href="#">
        <div class="col-md-2 date-box text-center">
          <h3>Nov</h3>
          <h1>03</h1>
          <h3>2018</h3>
        </div>
      </a>
      <div class="col-md-10">
        <a href="#"><h1><?php echo $blog['title']; ?></h1> </a>
        <p><?php echo $blog['body']; ?></p>
      </div>
    </div>
    <?php endwhile; ?>
</div>