<html>
	<head>
		<title>Add User</title>
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body>
		<form action="addUser.php" method="POST" enctype="multipart/form-data">
			<h3>Add User</h3>
			<input type="text" placeholder="First Name" name="firstName">
			<input type="text" placeholder="Last Name" name="lastName">
			<input type="email" placeholder="Email Address" name="email">
			<label for="password">Password</label>
			<input type="password" name="password">
			<input type="submit" value="Add User" class="margin-top-20">


			<?php 
				if(!empty($_POST['submit'])){
					if($_GET['status'] == "success"){
						echo "<p class='success'>Sign Up Sucess!</p>";
					} else if ($_GET['status'] == "failed") {
						echo "<p class='failed'>Sign Up Failed!</p>";
					} else if ($_GET['status'] == "existing"){
						echo "<p class='existing'>Email already exists!</p>";
					}
				}
			?>
		</form>
	</body>
</html>