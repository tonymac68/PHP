<?php 
include('include/sessionStart.php'); 
include('include/validateSession.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>users</title>
<?php include('include/headers.php'); ?>
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
    <div class="pagetitle"><h1>Users</h1></div>
    </div>
  				
<?php 
   include('include/menu.php'); 
?>	 			
    <div id="welcome">
       <p>Welcome Back <?php echo ($row['first_name']); ?></p> 
    </div>	
    <div id="p-left">		
    		<h3>Booked Events</h3>
			<?php

error_reporting(0); // Turn off all error reporting

?>
				<?php
			
					$con=mysql_connect("localhost","root","")
					or die (mysql_error());
					mysql_select_db("flexiflash", $con);
					
					$sql = "SELECT e.event_id, e.event_name, e.event_date, e.start_time, e.cost, e.location FROM events e INNER JOIN bookings b on e.event_id = b.event_id WHERE b.user_id = " . $_SESSION['user_id'];
			
					$result= mysql_query($sql, $con);	
					echo "<table width=100% border=0 cellpadding=5 cellspacing=2>	
	 				<tr>
	 				<th>Event ID</th>event
	 				<th>Event Name</th>
	 				<th>Event Date</th>
	 				<th>Start Time</th>
	 				<th>Cost</th>
	 				<th>Location</th>
	 				<tr>";	 
					while($row=mysql_fetch_array($result))
					{
					$event_id = $row['event_id'];
					$event_name = $row['event_name'];
					$event_date = $row['event_date'];
					$start_time = $row['start_time'];
					$cost = $row['cost'];
					$location = $row['location'];					
					echo "<tr>";
					echo "<td>" .$event_id. "</td>";
					echo "<td>" .$event_name. "</td>";
					echo "<td>" .$event_date. "</td>";
					echo "<td>" .$start_time. "</td>";
					echo "<td>&pound;" .$cost. "</td>";
					echo "<td>".$location. "</td>"; 
					}
					echo "</table>";	
					?>
	</div> 
				<?php 
				include('include/validateSession.php');
				?>
        <div id="p-right">
  				<div id="contentregister"> 				
  	<form name="registration" method="get" onsubmit="return registrationvalidation();" action="functions/users_update_details.php"> 			
  		<fieldset> 						
  			<p>Update your first name</p>							
			<input id="first_name" type="text" value="<?php echo ($row['first_name']); ?>" name="first_name" />
			<p>Update your surname</p>							
			<input id="last_name" type="text" value="<?php echo ($row['last_name']); ?>" name="last_name" />
			<p>Please update your email </p>							
			<input id="email" type="text" value="<?php echo ($row['email']); ?>" name="email" />
			<p>Update your password</p>							
			<input id="password" type="password" value="<?php echo ($row['password']); ?>" name="password" />
			<p>Choose one interest area</p>
			<div>
			<select name="interest">
				<option selected value = "Choose">Choose</option>
				<option value = "Out at sea">Out at sea</option> 					
	  			<option value = "Forest at night">Forest at night</option> 
  	  			<option value = "Cold up north">Cold up north</option>
  	  			<option value = "Hot in the desert">Hot in the desert</option>
  	  			<option value = "Climate change">Climate change</option>	
		        </select>									
		</div>
		<input class="submitlarge" type="submit" name="submit" value="SUBMIT" id="submit" />
		</fieldset>
		</form>
	</div>
	
</div>
</body>	
</html>