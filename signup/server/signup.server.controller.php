<?php

	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/shortcuts.php";
	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/config/connection.php";

	$action = $p["action"];
	$firstname = $p["firstname"];
	$lastname = $p["lastname"];
	$middlename = $p["middlename"];
	$birthdate = $p["birthdate"];
	$address = $p["address"];
	$username = $p["username"];
	$password = $p["password"];
	$type = $p["type"];



	$sql_check_username = "SELECT * from users WHERE username='$username'";
	$query_check_username = mysql_query($sql_check_username);
	$count = mysql_num_rows($query_check_username);

	if($count > 0){
		echo json_encode(array("Username Already Exist !", 0));
	}
	else{
		$user_signup_sql = "INSERT into users values(0, '$firstname', '$lastname', '$middlename', '$birthdate' , '$address','$username', '$password', '$type' , '1')";
		$user_signup = mysql_query($user_signup_sql);		
		echo json_encode(array("Account Added !", 1));
	}


?>