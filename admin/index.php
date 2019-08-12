<?php 

	session_start();
	if(!empty($_SESSION)){
		header("location: dashboard");
	}

?>
<html>
	<head>
		<title>Dashboard Secured Login</title>
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body>
		<form action="login.php" method="POST">
			<h3>Log In</h3>
			<input type="email" placeholder="Email Address" name="email"><br>
			<input type="password" name="password"><br><br>
			<input type="submit" value="Sign In">
			
			<!-- <p class="text-right">No Account Yet? <a href="signup.php">Sign Up Here!</a></p> -->
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