<?php 
include('include/sessionStart.php'); 
include('include/validateSession.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Manage Events</title>
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
    	<div class="pagetitle"><h1>Administrator Manage Events</h1></div>
  </div>
  			<?php include('include/menu.php'); ?>
<div id="p-left">
				<?php
					$con=mysql_connect("localhost","root","")
					or die (mysql_error());
					mysql_select_db("flexiflash", $con);
					
					$sql = "SELECT event_id, event_name, event_date, start_time, cost, location FROM events";
					$result= mysql_query($sql, $con);	
					echo "<table width=100% border=0 cellpadding=7>	
	 				<tr>
	 				<th>Event Id</th>
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
					echo "<td><a href='admin_events.php?eventid=" . $event_id . "'><img src='images/edit.png' border='0' /></a></td>";
					echo "<td><a href='functions/admin_delete_event.php?eventid=" . $event_id . "'><img src='images/delete.png' border='0' /></a></td>";
					}
					echo "</table>";	
					?>
			
				</div>
				<div id="p-right">
				<?php 
                if(isset($_REQUEST['eventid'])) {
					
					$sql = "SELECT * FROM events where event_id = " . $_REQUEST['eventid'];
					$result= mysql_query($sql, $con);	
					$row=mysql_fetch_array($result)
			?>
  				<div id="registration"> 	
  					<form name="registration" method="get" action="functions/admin_edit_event.php">
                    	<input type="hidden" value="<?php echo ($row['event_id']); ?>" name="event_id" /> 					
  				<fieldset> 						
  					<p>Edit Event</p>							
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
					<p>Cost:</p><input id="cost" type="text" value="<?php echo ($row['cost']); ?>" name="cost" />		
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
				<br/>						
				<input type="submit" name="submit" value="SUBMIT" id="submit" />					
			</fieldset>	
		</form> 				
</div>	
<?php 
					}
                ?>
</div>
</div>		
</body>
</html>