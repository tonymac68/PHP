<?php
	session_start();
	
	$con=mysql_connect("localhost","root","")
	or die (mysql_error());
	mysql_select_db("flexiflash", $con);

	$event_name = $_GET['event_name'];
	$event_date = $_GET['event_date'];
	$eventDate = (date("d/m/Y", strtotime($row['eventDate'])));
	$start_time = $_GET['start_time'];
	$cost = $_GET['cost'];
	$location = $_GET['location'];

	$sql = "INSERT INTO events (event_name, event_date, start_time, cost, location) VALUES('" . $event_name . "', '" . $event_date . "', '" . $start_time . "', '" . $cost . "', '" . $location . "')";
	
	mysql_query($sql, $con);
	header('Location: ../admin_events.php');
			
?>