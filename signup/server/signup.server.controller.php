<?php

	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/shortcuts.php";
	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/config/connection.php";

	$action = $p["action"];
	$company_name = $p["company_name"];
	$company_address = $p["company_address"];
	$sector = $p["sector"];
	$username = $p["username"];
	$password = $p["password"];



	$sql_check_username = "SELECT * from users WHERE username='$username'";
	$query_check_username = mysql_query($sql_check_username);
	$count = mysql_num_rows($query_check_username);

	if($count > 0){
		echo json_encode(array("Username Already Exist !", 0));
	}
	else{
		$user_signup_sql = "INSERT into users values(0, '$company_name', '$company_address', '$sector','$username', '$password', '1')";
		$user_signup = mysql_query($user_signup_sql);		
		echo json_encode(array("Account Added !", 1));
	}


?>