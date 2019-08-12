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
	        <li class="active"><a href="hero.php">Hero</a></li>
	        <li><a href="about.php">About Me</a></li>
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
<section class="hero">
	<div class="hero-text container">
	  <h1>Hi! I'm Francis</h1>
	  <h2>I'm a Web Developer</h2>
	  <br>
	  <a href="#" class="btn btn-success hvr-ripple-out hire-me" role="button">Hire Me!</a>
	</div>
</section>
<section class="hero-config container">
	<fieldset style="margin-top: 50px;">
		<legend>Hero Section Configuration</legend>
		<div class="col-md-6">
			<form action="pages/php-controllers/upload.php" method="post" enctype="multipart/form-data">
			    <p>Select image for the background image:</p>
			    <input type="file" name="fileToUpload" id="fileToUpload"><br/>
			    <input type="submit" value="Upload Image" name="submit" class="btn btn-success">
			</form>
		</div>
		<div class="col-md-6">
			<form action="">
				
			</form>
		</div>
	</fieldset>
</section>
<?php require('requisites/footer.php'); ?>
