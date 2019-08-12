<?php 

	session_start();

	if(empty($_SESSION)){
		header("location: index");
	} 


?>
<!DOCTYPE html>
<html>
<head>
	<!-- <meta charset="UTF-8"> -->
	<title>Add New Skill</title>
	<link rel="stylesheet" href="assets/css/styles.css">
	<style>
		input{
			width: 93%;
		}
	</style>
</head>
<body>
	<form action="addSkill.php" method="POST" enctype="multipart/form-data">
		<h3>Add New Skill</h3>
		<input type="text" placeholder="Skill" name="skill">
		<input type="text" placeholder="Name of the color (e.g. red, blue, orange)" name="color">
		<div style="display: flex; justify-content: space-between;">
			<input type="range" min="1" max="100" value="50" class="slider" id="myRange" style="width: 80%; margin: 0;">
			<input type="text" id="demo" name="level" style="text-align: center; display: flex; flex-flow: column; justify-content: center; width: 25px; height: 6px;" value="50">
		</div>
		<input type="file" name="fileToUpload" id="fileToUpload" style="padding: 10px 0;" >
		<input type="submit" name="submit" value="Add Skill" style="width: 100%;">
		</div>

		<script>
		var slider = document.getElementById("myRange");
		var output = document.getElementById("demo");
		output.innerHTML = slider.value;

		slider.oninput = function() {
		  output.value = this.value;
		}
		</script>
		<?php 
			if(!empty($_GET)){
				if($_GET['status'] == 'failed'){
					echo "<p class='failed'>Username/Password Incorrect!</p>";
				} else if ($_GET['status'] == 'not_found') {
					echo "<p class='not_found'>User Account Not Found!</p>";
				}
			}
		?>
	</form>
</body>
</html>