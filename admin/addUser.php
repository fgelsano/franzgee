<?php 
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	$hashPassword = password_hash($pass, PASSWORD_BCRYPT);

	require "config/dbConn.php";

	$check = $dbConn->query("SELECT * FROM users WHERE email = '$email'");

	if($check->num_rows == 0){
		$data = $dbConn->query("INSERT INTO users VALUES(NULL, '$email','$hashPassword','$lastName','$firstName')");
		if($data){
			header("Location: signup?status=success");
		} else {
			header("Location: signup?status=failed");
		}
	} else {
		header("Location: signup.php?status=existing");
	}

 ?>