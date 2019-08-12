<div class="container">
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

  <!-- The Modal/Lightbox -->
  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

      <div class="mySlides">
        <div class="numbertext">1 / 4</div>
        <img src="assets/img/portfolio/gallery00.jpg" style="width:100%" class="cursor">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 4</div>
        <img src="assets/img/portfolio/gallery01.jpg" style="width:100%" class="cursor">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 4</div>
        <img src="assets/img/portfolio/gallery02.jpg" style="width:100%" class="cursor">
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 4</div>
        <img src="assets/img/portfolio/gallery03.jpg" style="width:100%" class="cursor">
      </div>
              <!-- Caption text -->
        <div class="caption-container">
          <h3>Title Here</h3>
          <h4>URL: <a href="#" target="_blank">www.website.com</a></h4>
        </div>

      <!-- Next/previous controls -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
  </div>
</div>