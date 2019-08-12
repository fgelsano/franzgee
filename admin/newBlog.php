<?php 

	session_start();
	$userId = $_SESSION['id'];

	require "config/dbConn.php";
	$user = $dbConn->query("SELECT * FROM users WHERE id = '$userId'")->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New Blog</title>
	<link rel="stylesheet" href="assets/css/newBlog-styles.css">
	<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
</head>
<body style="background-color: #fff;">
	<div class="container">
		<div class="titleArea">
			<h3>Add New Blog</h3>
			<p><?php echo date("m/d/Y"). ' ' . date("h:i:sa"); ?></p>
		</div>
		<form action="saveBlog.php" method="POST">
			<label for="title"></label>
			<input type="text" name="blogTitle" placeholder="Title">
			<textarea>1tni1s14cb8aq36ucv48pqfcbd8fr74h1xu0cp1c3ceov61x</textarea>
			<input type="text" name="blogCategory" placeholder="Categories">
			<input type="text" hidden="" name="blogAuthor" value="<?php echo $user['id']; ?>">
			<input type="text" hidden="" name="datePosted" value="<?php echo date("m/d/Y"). ' ' . date("h:i:sa"); ?>">
			<input type="submit" value="Save" class="btn" style="margin: 0;">
		</form>
	</div>
	<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=1tni1s14cb8aq36ucv48pqfcbd8fr74h1xu0cp1c3ceov61x"></script>
</body>
</html>