<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../../css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script type="text/javascript" src="../../global/libs/jquery.js"></script>
    <script type="text/javascript" src="../client/userlogin.client.controller.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<body class="login-page">
<header>
    <div class="logo-container">
        <a href="../../index.php">
            <img src="../../images/logo-new.png"/>
            <h1><?php echo "InfoHub" ?></h1>
        </a>
    </div>

    <a class="get-started-btn" href="../../main.php">Get started <i class="fas fa-angle-right"></i></a>
</header>

<div class="page-main">
    <div class="login-container">
        <div class="info-container">
            <h2>Welcome to InfoHub!</h2>
            <span>If you want to sign up with us</span>
            <span>please sign up <a href="../../signup/views/signup.client.view.php"><?php echo "here." ?>
				</a></span>
        </div>

        <form class="login-form" onsubmit="return userLogin()">
            <h3>Welcome back! If you have an account, sign in with your email address.</h3>
            <legend>Required Fields *</legend>
            <input type="text" id="username" placeholder="Username *" required>
            <input type="password" id="password" placeholder="Password *" required>
            <input class="login-btn" type="submit" value="login" name="">
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