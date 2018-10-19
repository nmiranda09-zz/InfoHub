<?php 

	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/shortcuts.php";
	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/config/connection.php";

	$username = $p["username"];
	$password = $p["password"];


	$user_login_sql = "SELECT * from users WHERE username='$username'";
	$user_login_query = mysql_query($user_login_sql);
	$userinfo = mysql_fetch_array($user_login_query);
	$count = mysql_num_rows($user_login_query);
	if($count > 0){
		//username has been found
		$user_id = $userinfo["id"];
		$sql_check_password = "SELECT * from users WHERE id = '$user_id'";
		$query_check_password = mysql_query($sql_check_password);
		$userpassword = mysql_fetch_array($query_check_password);
		if($userpassword["password"] == $password){
			session_start();
			$_SESSION["id"] = $userinfo["id"];
			$_SESSION["username"] = $userinfo["username"];
			echo json_encode(array("Account Found", 1));
		}
		else{
			echo json_encode(array("Invalid Password!", 0));
		}

	}
	else{
		//username not found
		echo json_encode(array("Account doesn't exist!", 0));
	}

?>