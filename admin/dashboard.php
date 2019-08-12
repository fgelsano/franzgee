<?php 
	session_start();

	if(empty($_SESSION)){
		header("location: index");
	} 

	require "config/dbConn.php";
	$userId = $_SESSION['id'];

	$user = $dbConn->query("SELECT * FROM users WHERE id = '$userId'")->fetch_assoc();

?>
<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body style="background-color: #fff">
		<div class="container">
			<div class="nav margin-top-20">
				<h3>Welcome back <?php echo $user['firstName'] . ' ' . $user['lastName']; ?></h3>
				<a href="logout.php">Log Out</a>
			</div>
			<hr>
			<div id="skills">
				<div class="titleArea">
					<h3>Skills</h3>
					<a class="btn" href="addSkills.php">Add New Skills</a>
				</div>
				<table style="width: 100%;">
					<thead style="text-align: center; background-color: #eee; border-bottom: 1px solid #eee;">
						<th width="10%" style="text-align: center;">Icon</th>
						<th width="20%" style="bold; text-align: center">Skill Name</th>
						<th width="50%" colspan="2">Level</th>
						<th width="10%" style="text-align: center;">Color</th>
					</thead>
					<?php $skills = $dbConn->query("SELECT * FROM skills"); ?>
					<?php while ($skill = $skills->fetch_assoc()):?>
						<tr>
							<td style="display: flex; justify-content: center;">
								<a href="" title="Click to Edit this Skill">
									<img src="../uploads/skills/<?php echo $skill['icon']; ?>" 
									 alt="<?php echo $skill['skill']; ?>" 
									 width="50px" height="50px"
									 style="padding: 15px;"
									 >
								</a>
							</td>
							<td style="text-align: center;">
								<a href="" title="Click to Edit this Skill" style="text-decoration: none;">
									<p><?php echo $skill['skill']; ?></p>
								</a>
							</td>
							<td>
								<?php echo $skill['level']; ?>
							</td>
							<td style="">		
								<input type="range" 
									min="1" max="100" 
									value="<?php echo $skill['level']; ?>" 
									class="slider" 
									id="myRange">
							</td>
							<td>
								<p style="background-color: <?php echo $skill['color']; ?>; padding: 10px; text-align: center; color: #fff;"><?php echo $skill['color']; ?></p>
							</td>
						</tr>
					<?php endwhile ?>
				</table>
				<hr class="margin-top-20">
			</div>
			<div id="portfolio">
				<div class="titleArea">
					<h3>Porfilio</h3>
					<a href="newPortfolio.php" class="btn">Add New Portfolio</a>
				</div>
				<table style="width: 100%;">
					<thead style="text-align: center; background-color: #eee; border-bottom: 1px solid #eee;">
						<td width="30%" style="font-weight: bold;">Title</td>
						<td width="30%" style="font-weight: bold;">URL</td>
						<td width="40%" style="font-weight: bold;">Images</td>
					</thead>

					
		
					<?php $portfolios = $dbConn->query("SELECT * FROM portfolios"); ?>
					<?php while($portfolio = $portfolios->fetch_assoc()): ?>
					<tr>
						<td><?php echo $portfolio['title']; ?></td>
						<td><?php echo $portfolio['url']; ?></td>
						<td>
							<?php
								$portfolioId = $portfolio['id'];
								$images = $dbConn->query("SELECT * FROM portfolio_images WHERE portfolio_id = '$portfolioId'"); ?>
								<ul>
									<?php while($image = $images->fetch_assoc()): ?>
										<li><?php echo $image['image_url']; ?></li>
									<?php endwhile; ?>
								</ul>
						</td>
					</tr>
					<?php endwhile; ?>
				</table>
				<hr class="margin-top-20">
			</div>
			<div id="blogs">
				<div class="titleArea">
					<h3>Blogs</h3>
					<a href="newBlog.php" class="btn">Add New Blog</a>
				</div>
				<table style="width: 100%;">
					<thead style="text-align: center; background-color: #eee; border-bottom: 1px solid #eee;">
						<td width="20%" style="text-align: left; font-weight: bold;">Date</td>
						<td width="40%" style="text-align: left; font-weight: bold;">Titles</td>
						<td width="20%" style="text-align: left; font-weight: bold;">Author</td>
						<td width="20%" style="text-align: left; font-weight: bold;">Categories</td>
					</thead>

					<?php $blogs = $dbConn->query("SELECT * FROM blogs"); ?>
					<?php while($blog = $blogs->fetch_assoc()): ?>
						<?php  $author = $blog['author']; ?>
						<tr>
							<td><a href=""><?php echo $blog['created']; ?></a></td>
							<td><a href=""><?php echo $blog['title']; ?></a></td>

							<?php $author = $dbConn->query("SELECT * FROM users WHERE id = '$author'")->fetch_assoc();  ?>
							<td><a href=""><?php echo $author['firstName']. ' ' .$author['lastName']; ?></a></td>
							<td><a href=""><?php echo $blog['categories']; ?></a></td>
						</tr>
					<?php endwhile; ?>
				</table>
			</div>
		</div>
		<?php require "config/footer.php"; ?>
	</body>
</html>