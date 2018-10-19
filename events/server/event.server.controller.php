<?php 

	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/shortcuts.php";
	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/config/connection.php";
	include $_SERVER['DOCUMENT_ROOT']."/InfoHub/config/session.php";


	$date_start = $p["date_start"];
	$date_end = $p["date_end"];
	$event_name = $p["event_name"];
	$event_description = $p["event_description"];

	$sql_save_event = "INSERT into events values(0, '$event_name', '$event_description', '$date_start', '$date_end', '1')";
	$query_save_event = mysql_query($sql_save_event);

	echo "Event Added!";

?>