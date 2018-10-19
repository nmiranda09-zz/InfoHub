<?php 
	date_default_timezone_set('Asia/Manila');
	$db_name = "db_hackaton";
	$conn = mysql_connect("localhost", "root" , "");
	$db = mysql_select_db($db_name, $conn);
?>