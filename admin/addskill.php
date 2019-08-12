<?php 

	$skill = $_POST['skill'];
	$color = $_POST['color'];
	$skill_lvl = $_POST['level'];
	$skill_img = $_FILES['fileToUpload']['name'];

	// var_dump($skill);
	// var_dump($skill_lvl);
	// var_dump($fileToUpload);

	require "config/dbConn.php";

	$target_dir = "../uploads/skills/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $uploadOk = 0;
	        header("location: addskills?status=not-image");
	    }
	}

	if ($uploadOk == 0) {
	    header("location: addskills?status=not-image");
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

			$check = $dbConn->query("SELECT * FROM skills WHERE skill = '$skill'");

				if ($check->num_rows==0) {
					$data = $dbConn->query("INSERT INTO skills VALUES(NULL, '$skill_img','$skill_lvl','$skill', '$color')");

					if($data){
						header("location: dashboard");
					} else {
						header("location: addskills?failed");
					}
				} else {
					header("location: addskills?existing");
				}


	        header("location: dashboard");
	    } else {
	        header("location: addskills?status=failed");
	    }
	}
?>