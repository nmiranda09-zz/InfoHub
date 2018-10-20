<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="../../css/styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>

<body class="signup-page">
	<div class="fixed-header">
        <header>
		    <div class="logo-container">
		        <a href="../../index.php">
		            <img src="../../images/logo-new.png"/>
		            <h1><?php echo "InfoHub" ?></h1>
		        </a>
		    </div>
		</header>

        <nav>
            <ul>
                <li><a href="#">Announcements</a></li>
                <li><a href="#">News Updates</a></li>
                <li><a href="#">Incoming Events</a></li>
                <li><a href="#">Job Postings</a></li>
                <li><a href="#">Scholarships</a></li>
                <li><a href="#">Wanted List</a></li>
                <li><a href="#">Suppliers</a></li>
                <li><a href="#">Ticket Postings</a></li>
            </ul>
        </nav>
    </div>

	<div class="page-main">
		<div class="company-details">
			<div class="primary-details">
				<div class="logo-section">
	                <img src="../../images/company-placeholder-logo.png" alt="" />
	            </div>
	            <div class="name-acro-section">
            		<div>
            			<h3>DFA</h3>
	                	<span>Department of Foreign Affairs</span>
            		</div>
	            </div>
			</div>
            
		</div>
		<div class="company-feeds">
			<div class="post-area">
				<textarea>Post message here...
				</textarea>
				<button class="btn btn-primary">Post</button>
			</div>	
		</div>		
	</div>

	<?php include $_SERVER['DOCUMENT_ROOT']."/infohub/footer.php"; ?>
</body>

</body>
</html>