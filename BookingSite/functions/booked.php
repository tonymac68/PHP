<?php
session_start();
if(isset($_REQUEST['user_id']))
{
$con=mysql_connect("localhost","root","")
or die (mysql_error());
					
mysql_select_db("flexiflash", $con);
	
	$user_id = $_GET['user_id'];
	$event_name = $_GET['event_name'];
	$event_date = $_GET['event_date'];
	//$event_date = Datetime::createFromFormat('d/m/Y', $event_date)->format('Y-m-d');
	$start_time = $_GET['start_time'];
	$cost = $_GET['cost'];
	$location = $_GET['location'];
	$paymentType = $_GET['paymentType'];
	
	
	$sql = "INSERT INTO `antho12_flexiflash`.`bookings` (`booking_id`, `users_id`, `event_id`, `paymentType`) VALUES (NULL, '" . $_SESSION['user_id'] . "','" . $event_id . "', '" . $paymentType . "')";
	
	echo $sql;
	
	header('Location: ../users.php');
}	

?>