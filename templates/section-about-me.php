<?php 
  include($_SERVER['DOCUMENT_ROOT'].'/admin/config/dbConn.php');
  $sql = 'SELECT * FROM about';
  $results = mysqli_query($dbConn, $sql);
  $about = mysqli_fetch_assoc($results);

  $skills = $dbConn->query("SELECT * FROM skills");

  // include($_SERVER['DOCUMENT_ROOT'].'/admin/config/closeConn.php');
?>


<div class="about-me">
  <div class="row">
    <div class="col-md-4 my-portrait">
      <img src="<?php echo htmlspecialchars($about['Profile_Picture_URL']); ?>" alt="My Portrait" class="img-responsive">
    </div>
    <div class="col-md-8">
      <h1>About Me</h1>  
      <br>
      <?php echo htmlspecialchars_decode(stripslashes($about['Blurbs'])); ?>
      <a href="<?php echo htmlspecialchars($about['Resume_URL']); ?>" class="btn btn-success">Download a PDF Copy of my Resume</a>
    </div>
  </div>
  <br>
</div>
<div class="my-skills m-top-50">
  <h2>My Skills</h2>  
  <?php while($skill = $skills->fetch_assoc()): ?>
  <div class="row chartBarsWrap chartBarsHorizontal" style="display: flex; padding: 0; flex-flow: row"> 
    <div class="col-md-1 text-center" style="display: flex; flex-flow: column; justify-content: center;">
      <img src="uploads/skills/<?php echo $skill['icon']; ?>" alt="<?php echo $skill['skill']; ?>" class="img-responsive">
    </div>
    <div class="col-md-10 chartBars" style="margin: 0; height: 100px;"> 
      <ul class="bars" style="height: 75%;">  
        <li> 
          <div data-percentage="<?php echo $skill['level']; ?>" class="bar <?php echo $skill['color']; ?>BarFlat" style="height: 50px!important; position: relative;"></div>
        </li>
      </ul>
    </div>
    <div class="col-md-1" style="display: flex; flex-flow: column; justify-content: center;">
      <h3><?php echo $skill['skill']; ?></h3>
    </div>
  </div>
  <?php endwhile; ?>