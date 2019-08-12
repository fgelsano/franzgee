<?php 
	
	require('static.php');
	$dbConn = mysqli_connect($server, $username, $password, $dbname);

	if(!$dbConn){
		die('Connection error: ' . mysqli_connect_error());
	}

?>