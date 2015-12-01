<?php
session_start();
if(isset($_REQUEST['event_id']))
{
$con=mysql_connect("localhost","root","")
or die (mysql_error());
					
mysql_select_db("flexiflash", $con);

	$user_id = $_SESSION['user_id'];
	$event_id = $_GET['event_id'];
	$paymentType = $_GET['paymentType'];

	$sql = "INSERT INTO `antho12_flexiflash`.`bookings` (`user_id`, `event_id`, `paymentType`) VALUES ('" . $user_id . "', '" . $event_id . "', '" . $paymentType . "')";
	
	mysql_query($sql, $con);
	header('Location: ../users.php');
	
}

?>