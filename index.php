<?php 
	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/config/session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>InfoHub</title>
	<?php include "../infohub/meta.php" ?>
	
</head>
<body class="index-page">
	<?php include "../infohub/header.php" ?>

	<div class="page-main">
		<div class="homepage-inner">
			<div class="info-container">
				<h2>Welcome to InfoHub!</h2>
				<span>Your one stop access to all information within your city</span>
				<span>and make live chat inquiries.</span>

				<a href="../infohub/main.php">Get started <i class="fas fa-angle-right"></i></a>
			</div>

			<div class="image-container">
				<img src="images/image-bg.png" />
			</div>
		</div>
	</div>

	<?php include "../infohub/footer.php" ?>
</body>
</html>