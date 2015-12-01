<?php
session_start();
if(isset($_REQUEST['eventid']))
{	
	$con=mysql_connect("localhost","root","")
	or die (mysql_error());
					
	mysql_select_db("flexiflash", $con);
	
	
	$sql = "DELETE FROM events WHERE event_id = '" . $_REQUEST['eventid'] . "'";
	
	mysql_query($sql, $con);
	
	header('Location: ../admin_events.php');
			
}

?>