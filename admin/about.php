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
        <li class="active"><a href="about.php">About Me</a></li>
        <li><a href="portfolio.php">Portfolio</a></li> 
        <li><a href="blogs.php">Blogs</a></li> 
        <li><a href="inbox.php">Inbox</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
	<section class="about-me">
		<div class="container">
			<div class="blurbs col-md-12 col-sm-12">
				<h4>Blurbs:</h4>
				<textarea name="" id="" cols="30" rows="20"></textarea>
			</div>
			<div class="col-md-6" style="margin-top: 20px;">
				<form action="pages/php-controllers/upload.php" method="post" enctype="multipart/form-data">
				    <p>Select image for the profile picture:</p>
				    <input type="file" name="fileToUpload" id="fileToUpload"><br/>
				    <input type="submit" value="Upload Image" name="submit" class="btn btn-success">
				    <input type="text" placeholder="Image URL" name="profilePicURL">
				</form>
			</div>
			<div class="col-md-6" style="margin-top: 20px;">
				<form action="pages/php-controllers/upload.php" method="post" enctype="multipart/form-data">
				    <p>Upload Resume:</p>
				    <input type="file" name="fileToUpload" id="fileToUpload"><br/>
				    <input type="submit" value="Upload Image" name="submit" class="btn btn-success">
				    <input type="text" placeholder="Resume URL" name="profilePicURL">
				</form>
			</div>
			<hr>
			<div class="col-md-12 col-sm-12" style="margin-top: 50px;">
				<form action="pages/php-controllers/upload.php" method="post" enctype="multipart/form-data">
					<div class="col-md-6">
					    <p>Upload Logo:</p>
					    <input type="file" name="fileToUpload" id="fileToUpload"><br/>
					    <input type="submit" value="Upload Image" name="submit" class="btn btn-success">
				    </div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="skill">Skill</label>
							<input type="text" placeholder="Type skills here">
						</div>
						<div class="form-group">
							<label for="skill-level">Skill Level</label>
							<input type="text" placeholder="Type skills here">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
<?php require('requisites/footer.php'); ?>
