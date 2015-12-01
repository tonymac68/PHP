<?php 
include('include/sessionStart.php'); 
include('include/validateSession.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Events Page</title>
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
    	<div class="pagetitle"><h1>Events Page</h1></div>
  </div>				
				<?php 
                include('include/menu.php'); 
                ?>		
             	<div class="info">
              		<p>All events are listed below please feel free to sign up for the events places are limited.</p>
              	</div>
                <div id="p-left">
				<?php
					$con=mysql_connect("localhost","root","")
					or die (mysql_error());
					mysql_select_db("flexiflash", $con);
					
					$sql = "SELECT event_id, event_name, event_date, start_time, cost, location FROM events";
					$result= mysql_query($sql, $con);
						
					echo "<table border=0 cellspacing=5>	
	 				<tr>
	 				<th>Event ID</th>
	 				<th>Event Name</th>
	 				<th>Event Date</th>
	 				<th>Start Time</th>
	 				<th>Cost</th>
	 				<th>Location</th>
					<th></th>
					<th></th>
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
					echo "<td>&pound;".$cost."</td>";
					echo "<td>".$location."</td>";
					echo "<td><a href='users_events.php?eventid=" . $event_id . "'><p>Book</p></a></td>";
					}
					echo "</table>";	
					?>
					
				</div>
               <div id="p-right">
				<?php 
                if(isset($_REQUEST['eventid'])) {
					
					$sql = "SELECT * FROM events where event_id = " . $_REQUEST['eventid'];
					$result= mysql_query($sql, $con);	
					$row=mysql_fetch_array($result);
					
                ?>
				<div class="confirmation">
					<p>You have selected <?php echo ($row['event_name']); ?> on the <?php echo (date("d/m/Y", strtotime($row['event_date']))); ?> at <?php echo ($row['start_time']); ?> in the <?php echo ($row['location']); ?> at the SECC Glasgow at a cost of <?php echo ("&pound;" . $row['cost']); ?> Book This event below</p>
				</div>

  					 	
  					<form name="registration" method="get" action="functions/user_book_event.php">
                    	<input type="hidden" value="<?php echo ($row['event_id']); ?>" name="event_id" /> 					
  			<fieldset>
                       	
                        <table style="width:100%">
                            <tr>
                                <td><p>Event Name</p></td>
                                <td><p><?php echo ($row['event_name']); ?></p></td>
                            </tr>
                            <tr>
                                <td><p>Event Date</p></td>
                                <td><p><?php echo (date("d/m/Y", strtotime($row['event_date']))); ?></p></td>
                            </tr>
                            <tr>
                                <td><p>Event Time</p></td>
                                <td><p><?php echo ($row['start_time']); ?></p></td>
                            </tr>
                            <tr>
                                <td><p>Event Cost</p></td>
                                <td><p><?php echo ($row['cost']); ?></p></td>
                            </tr>
                            <tr>
                                <td><p>Event Location</p></td>
                                <td><p><?php echo ("&pound;" . $row['location']); ?></p></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                	<div>		
                                           <select name="paymentType"> 					
                                            <option value="Select Payment Option">Select Payment Option</option>
                                            <option value="Credit Card">Credit Card</option> 
                                            <option value="Debit Card">Debit Card</option>  
                                            <option value="Hospitality Voucher">Hospitality Voucher</option>						
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </table>
					<input class="submitlarge" type="submit" name="submit" value="BOOK" id="submit" />
</form> 	

</div>
<?php 
					}
                ?>
</div>		
</body>
</html>