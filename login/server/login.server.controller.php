<?php 

	include $_SERVER['DOCUMENT_ROOT']."/Oct/shortcuts.php";
	include $_SERVER['DOCUMENT_ROOT']."/Oct/config/connection.php";

	$username = $p["username"];
	$password = $p["password"];

	$user_login_sql = "SELECT * from users WHERE username='$username'";
	$user_login_query = mysql_query($user_login_sql);
	$userinfo = mysql_fetch_array($user_login_query);
	$count = mysql_num_rows($user_login_query);
	if($count > 0){
		//username has been found
		echo $userinfo["id"];
		// $sql_check_password = "SELECT * from users"
	}
	else{
		//username not found
		echo "username is invalid!";
	}

?>