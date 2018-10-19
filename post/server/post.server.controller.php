<?php 

	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/shortcuts.php";
	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/config/connection.php";
	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/config/session.php";

	$content = $p["content"];
	$userId = $_SESSION["id"];


	$sql_insert_post = "INSERT into posts values(0, '$content', '$userId', '1')";
	$query_insert_post = mysql_query($sql_insert_post);

	echo "Post Added!";
?>