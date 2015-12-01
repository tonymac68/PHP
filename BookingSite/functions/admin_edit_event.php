<?php
session_start();
if(isset($_REQUEST['event_id']))
{
	$con=mysql_connect("localhost","root","")
	or die (mysql_error());				
	mysql_select_db("flexiflash", $con);
	
	$event_id = $_GET['event_id'];
	$event_name=$_GET['event_name'];
	$event_date = $_GET['event_date'];
	$eventDate = (date("d/m/Y", strtotime($row['eventDate'])));
	$start_time=$_GET['start_time'];
	$cost=$_GET['cost'];
	$location=$_GET['location'];

	$sql = "UPDATE events SET event_name = '" . $event_name . "', event_date = '" . $event_date . "', start_time = '" . $start_time . "', cost = '" . $cost . "', location ='" . $location . "' WHERE event_id = '" . $event_id . "'";
	
	mysql_query($sql, $con);
	header('Location: ../admin_events.php');
}
else{
echo "no";	
}
?>

