<?php
session_start();
if(isset($_REQUEST['bookingid']))
{
	$con=mysql_connect("localhost","root","")
	or die (mysql_error());				
	mysql_select_db("flexiflash", $con);
	
	$sql = "DELETE FROM bookings WHERE booking_id = '" . $_REQUEST['bookingid'] . "'";
	
	mysql_query($sql, $con);
	
	header('Location: ../admin_bookings.php');
			
}

?>