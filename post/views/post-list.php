<?php

	session_start();

	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/shortcuts.php";
	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/config/connection.php";

	$id = $_SESSION["id"];

	$post_list = array();

	$sql_post = "SELECT * from posts";
	$query_post = mysql_query($sql_post);
	while ($post_result = mysql_fetch_array($query_post)) {
		// echo "<h1>".$post_result["content"]."</h1><br>";
		array_push($post_list, $post_result["content"]);
	}

?>