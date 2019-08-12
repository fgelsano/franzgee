<?php 

	$title = $_POST['blogTitle'];
	$body = $_POST['blogBody'];
	$category = $_POST['blogCategory'];
	$author = $_POST['blogAuthor'];
	$datePosted = $_POST['datePosted'];

	require "config/dbConn.php";

	$data = $dbConn->query("INSERT INTO blogs VALUES(NULL, '$title','$body','$category', '$author', '$datePosted')");

	header("location: dashboard");


?>