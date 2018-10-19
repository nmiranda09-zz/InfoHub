<?php

	include $_SERVER['DOCUMENT_ROOT']."/Oct/shortcuts.php";
	include $_SERVER['DOCUMENT_ROOT']."/Oct/config/connection.php";

	$action = $p["action"];
	$firstname = $p["firstname"];
	$lastname = $p["lastname"];
	$middlename = $p["middlename"];
	$birthdate = $p["birthdate"];
	$address = $p["address"];
	$username = $p["username"];
	$password = $p["password"];


	$user_signup_sql = "INSERT into users values(0, '$firstname', '$lastname', '$middlename', '$birthdate' , '$address','$username', '$password' , '1')";
	$user_signup = mysql_query($user_signup_sql);
	echo $firstname.$lastname.$middlename.$birthdate.$address;

?>