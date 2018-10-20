<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<script type="text/javascript" src="../../global/libs/jquery.js"></script>	
	<link rel="stylesheet" type="text/css" href="../../css/styles.css">
	<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>	

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<script>
		tinymce.init({
			selector: '#mytextarea'
		});
	</script>	
</head>
<body>

<body class="signup-page">
	<div class="fixed-header">
        <?php include "../infohub/header.php" ?>

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

	<?php 
		include $_SERVER['DOCUMENT_ROOT']."/InfoHub/shortcuts.php";
		include $_SERVER['DOCUMENT_ROOT']."/InfoHub/config/connection.php";

		$id = $_SESSION["id"];

		$sql_user = "SELECT * from users WHERE id ='$id'";
		$query_user = mysql_query($sql_user);
		$data = mysql_fetch_array($query_user);
	?>
	<!-- company name -->
	<?php echo $data["company_name"];?>
	<!-- company address -->
	<?php echo $data["company_address"];?>
	<!-- sector -->
	<?php echo $data["sector"];?>
	<!-- username -->
	<?php echo $data["username"];?>

	<!-- <iframe style="width: 100%;min-height: 300px;" src="../../post/views/post.client.view.php"></iframe> -->

	<?php 

		// $sql_post = "SELECT * from posts";
		// $query_post = mysql_query($sql_post);
		// while ($post_result = mysql_fetch_array($query_post)) {
		// 	echo "<h1>".$post_result["content"]."</h1><br>";
		// }

	?>
	<form onsubmit="return savePost()">
		<textarea id="mytextarea" placeholder="Post goes here ......"></textarea>
		<input type="submit" name="" value="test">
	</form>
	<div id="user_feed">
		
	</div>

</body>
	<script type="text/javascript" src="../../global/libs/jquery.js"></script>
	<script type="text/javascript" src="../client/post.client.controller.js"></script>
	<script type="text/javascript" src="../client/profile.client.controller.js"></script>
</html>