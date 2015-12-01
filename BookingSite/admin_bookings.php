<?php 
include('include/sessionStart.php'); 
include('include/validateSession.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Manage Bookings</title><?php include('include/headers.php'); ?>
</head>
<body>		
<div id="wrapper">
  <div id="header">
    <div id="sitelogo" class="sitelogo"><h1>FlexiFlash <br /><span>Promotions</span></h1></div>
    	    <div id="nav">
		    <ul>
		    	<li><a href="/">Home</a></li>
		    	<li><a href="/registration.php?submit=SIGN+UP">Register</a></li>
		    	<li><a href="/">Contact us</a></li>
		    	<li><a href="/">Help</a></li>
		    </ul>
	    </div>
    	<div class="pagetitle"><h1>Administrator Manage Bookings</h1></div>
  </div>	
				<?php include('include/menu.php'); ?> 

<div id="p-full">			
					<?php
					
					$con=mysql_connect("localhost","root","")
					or die (mysql_error());
					mysql_select_db("flexiflash", $con);
						
					$sql = "select b.booking_id, e.event_name, e.event_date, e.start_time, e.cost, e.location, u.first_name, u.last_name from events e inner join ( users u inner join bookings b On u.user_id = b.user_id) on e.event_id = b.event_id ";
					
					$result= mysql_query($sql, $con);	
					$row=mysql_fetch_array($result);
					
					echo "<table width=100% border=0 cellpadding=0>	
	 				<tr>
	 				<th>Booking Id</th>
	 				<th>Event Name</th>
	 				<th>Event Date</th>
	 				<th>Start Time</th>
	 				<th>Cost </th>
	 				<th>Location</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th></th>
	 				<tr>";	 
					while($row=mysql_fetch_array($result))
					{
					$booking_id = $row['booking_id'];
					$event_name = $row['event_name'];
					$event_date = $row['event_date'];
					$start_time = $row['start_time'];
					$cost = $row['cost'];
					$location = $row['location'];
					$first_name = $row['first_name'];
					$last_name = $row['last_name'];					
					echo "<tr>";
					echo "<td>".$booking_id."</td>";
					echo "<td>".$event_name."</td>";
					echo "<td>".$event_date."</td>";
					echo "<td>".$start_time."</td>";
					echo "<td>&pound;".$cost."</td>";
					echo "<td>".$location."</td>";
					echo "<td>".$first_name."</td>";
					echo "<td>".$last_name."</td>";
					echo "<td><a href='functions/admin_delete_booking.php?bookingid=" . $booking_id . "'><img src='images/delete.png' border='0' /></a></td>";
					echo "</tr>";
					}
					echo "</table>";	
					?>
				</div>
		 		
  			</div>		
</body>
</html>