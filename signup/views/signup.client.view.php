<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../../css/styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script type="text/javascript" src="../../global/libs/jquery.js"></script>
	<script type="text/javascript" src="../client/signup.client.controller.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
</head>
<body>

<body class="signup-page">
	<header>
		<div class="logo-container">
			<a href="../../index.php">
				<img src="../../images/logo-new.png" />
				<h1><?php echo "InfoHub" ?></h1>
			</a>
		</div>

        <a class="get-started-btn" href="../../main.php">Get started <i class="fas fa-angle-right"></i></a>
	</header>

	<div class="page-main">
		<div class="signup-container">
			<div class="info-container">
				<h2>Welcome to InfoHub!</h2>
				<span>Already have an account?</span>
				<span>Please login <a href="../../login/views/login.client.view.php"><?php echo "here." ?>
				</a></span>
			</div>

			<form class="signup-form" onsubmit="return userSubmit()">
				<h3>Create an account</h3>
				<legend>Required Fields *</legend>
				<div>
					<input type="text" id="company-name" placeholder="Company Name *" required>
					<input type="text" id="address" placeholder="Company Address *" required>
				</div>

				<select>
				    <option value="" disabled selected>Select Sector *</option>
				    <option value="hurr">Government</option>
				    <option value="hurr">Private</option>
				</select>
				<!-- <input type="text" id="firstname" placeholder="firstname" required>
				<input type="text" id="lastname" placeholder="lastname" required>
				<input type="text" id="middlename" placeholder="middlename" required> -->
				<!-- <input type="date" id="birthdate" placeholder="birthdate" required> -->

				<legend>Upload a valid document that supports your company.</legend>
				<input type="file" id="file" required>

				<div>
					<input type="text" id="username" placeholder="username" required>
				<input type="password" id="password" placeholder="password" required>
				</div>

				<input class="signup-btn" type="submit" value="Sign Up" name="">
			</form>
		</div>

	</div>

    <footer>
        <img src="../../images/footer-bg.png" alt="" />
        <p class="copyright"><?php echo "Copyright Hackathon 2018 | All rights reserved." ?> </p>
    </footer>
</body>

</body>
</html>