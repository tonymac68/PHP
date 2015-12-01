<?php 
include('include/sessionStart.php'); 
include('include/validateSession.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Bookings Page</title>
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
    	<div class="pagetitle"><h1>Bookings Page</h1></div>
  </div>			
				<?php include('include/menu.php'); ?>
              	<p>Please check that the event shown below is the one you wish to book if it is not please return to the events page using the menu.</p>
              	</div>
                      
				<div>			
				<?php
					$con=mysql_connect("localhost","root","")
					or die (mysql_error());
					mysql_select_db("flexiflash", $con);
					
					$sql = "SELECT event_id, event_name, event_date, start_time, cost, location FROM events";
					$result= mysql_query($sql, $con);
					echo "<table border=1>	
	 				<tr>
	 				<th>Event Id</th>
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
					echo "<td>".$event_id."</td>";
					echo "<td>".$event_name."</td>";
					echo "<td>".$event_date."</td>";
					echo "<td>".$start_time."</td>";
					echo "<td>".$cost."</td>";
					echo "<td>".$location."</td>";
					}
					echo "</table>";
					mysql_query($sql, $con);		
					?>
				</div>
               
              <div>
              		<p>You have selected <?php echo ($row['event_name']); ?> on the <?php echo (date("d/m/Y", strtotime($row['event_date']))); ?> at <?php echo ($row['start_time']); ?> in the <?php echo ($row['location']); ?> at the SECC Glasgow at a cost of <?php echo ($row['cost']); ?>.  Do you wish to proceed with this booking.</p>
				</div>
              <div id="registration"> 	
  					<form name="registration" method="get" action="functions/booked.php">
                    	<input type="hidden" value="<?php echo ($row['event_id']); ?>" name="event_id" /> 					
  						<fieldset> 						
  							<p>Book Event</p>							
							<p>Event:</p><input id="event_name" type="text" value="<?php echo ($row['event_name']); ?>" name="event_name" />							
							<br/>							
							<br/>							
							<p></p>							
							<p>Date:</p><input id="event_date" type="text" value="<?php echo (date("d/m/Y", strtotime($row['event_date']))); ?>" name="event_date" />							
							<br/>							
							<br/>							
							<p></p>							
							<p>Time:</p><input id="start_time" type="text" value="<?php echo ($row['start_time']); ?>" name="start_time" />							
							<br/>							
							<br/>							
							<p></p>							
							<p>Cost:</p><input id="cost" type="text" value="&pound;<?php echo ($row['cost']); ?>" name="cost" />							
							<br/>							
							<br/>							
							<p></p>							
							<p>Location:</p>
								<div>
                        <select name="location">
  				<option value=></option>
  				<option value="Hall 1"<?php if($row['location'] == "Hall 1"){echo "Selected";} ?>>Hall 1</option>
  				<option value="Hall 2"<?php if($row['location'] == "Hall 2"){echo "Selected";} ?>>Hall 2</option>
  				<option value="Hall 3"<?php if($row['location'] == "Hall 3"){echo "Selected";} ?>>Hall 3</option>
  				<option value="Hall 4"<?php if($row['location'] == "Hall 4"){echo "Selected";} ?>>Hall 4</option>
				<option value="Hall 5"<?php if($row['location'] == "Hall 5"){echo "Selected";} ?>>Hall 5</option>
			</select>									
								</div>
                                          <p>Payment Method:</p>							
								<div>									
			<select name="paymentType"> 					
  				<option value="">Select Payment Option</option>
                                <option value="Credit Card">Credit Card</option> 
  				<option value="Debit Card">Debit Card</option>  
  				<option value="Hospitality Voucher">Hospitality Voucher</option>								
			</select>									
							</div>							
							<br/>							
                            <input type="submit" name="submit" value="BOOK" id="submit" />
					</form> 				
  				</div>
		</body>	
</html>