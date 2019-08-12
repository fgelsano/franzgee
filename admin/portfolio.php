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
        <li class="active"><a href="portfolio.php">Portfolio</a></li> 
        <li><a href="blogs.php">Blogs</a></li> 
        <li><a href="inbox.php">Inbox</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<!-- Trigger the modal with a button -->
<div class="text-right" style="margin-top: 30px;">
  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Add New Portfolio</button>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="top: 20px;right: 5%;">&times;</button>
        <h4 class="modal-title">New Portfolio</h4>
      </div>
      <div class="modal-body">
        <form action="pages/php-controllers/upload.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Title:</label>
            <input type="text">
          </div>
          <div class="form-group">
            <label for="">URL:</label>
            <input type="text">
          </div>
          <div class="form-group">
            <label for="">Technologies Used:</label>
            <input type="text">
          </div>
          <div class="form-group">
            <label for="">Description:</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <p>Upload Screenshot:</p>
            <div class="col-md-6">
              <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="col-md-6 text-right">
              <input type="submit" value="Upload Image" name="submit" class="btn btn-success">
            </div>
            <p class="small">Preview:</p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
      </div>
    </div>

  </div>
</div>
<div class="col-md-12">
  <h2>My Portfolio</h2>
  <!-- Images used to open the lightbox -->
  <div class="row m-top-30">
    <div class="column">
      <img src="assets/img/portfolio/gallery00.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" style="width: 250px">
    </div>
    <div class="column">
      <img src="assets/img/portfolio/gallery01.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow" style="width: 250px">
    </div>
    <div class="column">
      <img src="assets/img/portfolio/gallery02.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow" style="width: 250px">
    </div>
    <div class="column">
      <img src="assets/img/portfolio/gallery03.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow" style="width: 250px">
    </div>
    <div class="column">
      <img src="assets/img/portfolio/gallery00.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" style="width: 250px">
    </div>
    <div class="column">
      <img src="assets/img/portfolio/gallery01.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow" style="width: 250px">
    </div>
    <div class="column">
      <img src="assets/img/portfolio/gallery02.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow" style="width: 250px">
    </div>
    <div class="column">
      <img src="assets/img/portfolio/gallery03.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow" style="width: 250px">
    </div>
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="assets/img/portfolio/gallery00.jpg" style="width:100%" class="cursor">

      <!-- Caption text -->
      <div class="caption-container">
        <h3>Title Here</h3>
        <h4>URL: <a href="#" target="_blank">www.website.com</a></h4>
      </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="assets/img/portfolio/gallery01.jpg" style="width:100%" class="cursor">

      <!-- Caption text -->
      <div class="caption-container">
        <h3>Title Here</h3>
        <h4>URL: <a href="#" target="_blank">www.website.com</a></h4>
      </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="assets/img/portfolio/gallery02.jpg" style="width:100%" class="cursor">

      <!-- Caption text -->
      <div class="caption-container">
        <h3>Title Here</h3>
        <h4>URL: <a href="#" target="_blank">www.website.com</a></h4>
      </div>
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="assets/img/portfolio/gallery03.jpg" style="width:100%" class="cursor">

      <!-- Caption text -->
      <div class="caption-container">
        <h3>Title Here</h3>
        <h4>URL: <a href="#" target="_blank">www.website.com</a></h4>
      </div>
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
</div>
</div>

<?php require('requisites/footer.php'); ?>
