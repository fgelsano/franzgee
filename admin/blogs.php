<?php require('requisites/header.php'); ?>
<nav class="navbar navbar-inverse" style="margin-bottom: 0;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">My Admin Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="hero.php">Hero</a></li>
        <li><a href="about.php">About Me</a></li>
        <li><a href="portfolio.php">Portfolio</a></li> 
        <li class="active"><a href="blogs.php">Blogs</a></li> 
        <li><a href="inbox.php">Inbox</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<section class="blogs container" style="margin-top: 30px;">
    <form action="pages/php-controllers/upload.php" method="post" enctype="multipart/form-data">
      <div class="col-md-8">
        <div class="form-group">
          <label for="">Blog Title:</label>
          <input type="text">
        </div>
      </div>
      <div class="col-md-4 text-right">
        <input type="submit" value="Save Blog" name="submit-blog" class="btn btn-info">
      </div>
      <div class="form-group col-md-12">
        <textarea name="" id="" cols="30" rows="30"></textarea>
      </div>
      <div class="form-group col-md-12">
        <p>Upload Thumbnail Image:</p>
        <div class="col-md-6">
          <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <div class="col-md-6 text-right">
          <input type="submit" value="Upload Image" name="submit" class="btn btn-success">
        </div>
      </div>
  </form>
</section>



<?php require('requisites/footer.php'); ?>