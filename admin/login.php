<?php 
	session_start();

	$email = $_POST['email'];
	$pass = $_POST['password'];

	require "config/dbConn.php";

	$data = $dbConn->query("SELECT * FROM users WHERE email = '$email'")->fetch_assoc();
	var_dump($data);
	if(!empty($data)){
		$hashPassword = $data['password'];
		if(password_verify($pass, $hashPassword)){
			$_SESSION['id'] = $data['id'];
			header("location: dashboard?id=" . $data['id']);
		} else {
			header ("location: index?status=failed");
		}
	} else {
		header("location: index?status=not_found");
	}
?>