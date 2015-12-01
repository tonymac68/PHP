<?php 
include('inc/sessionStart.php'); 
include('inc/validateSession.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

		<head>
				<title>users</title>
				<?php include('inc/headers.php'); ?>
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
    	<div class="pagetitle"><h1>Login Page</h1></div>
  </div>
  				
				<?php 
                include('inc/menu.php'); 
                ?>
  	 			
              	<div id ="text">
               	<p>Welcome back <?php echo ($row['firstName']); ?></p> 
              	</div>	
                
               <div id="table">			
				<?php
					$con=mysql_connect("localhost", "root", "root")
					or die (mysql_error());
					mysql_select_db("bksys", $con);
					$sql = "select e.id, e.eventName, e.eventDate, e.startTime,e.Cost,e.location from events e inner join bookings b on e.id = b.eventsid where b.registrantsID = " . $_SESSION['id'];
					//echo ($sql);
					$result= mysql_query($sql, $con);	
					echo "<table border=1>	
	 				<tr>
	 				<th>ID</th>
	 				<th>Event Name</th>
	 				<th>Event Date</th>
	 				<th>Start Time</th>
	 				<th>Cost</th>
	 				<th>Location</th>
	 				<tr>";	 
					while($row=mysql_fetch_array($result))
					{
					$id = $row['id'];
					$eventName = $row['eventName'];
					$eventDate = $row['eventDate'];
					$startTime = $row['startTime'];
					$Cost = $row['Cost'];
					$location = $row['location'];					
					echo "<tr>";
					echo "<td>".$id."</td>";
					echo "<td>".$eventName."</td>";
					echo "<td>".$eventDate."</td>";
					echo "<td>".$startTime."</td>";
					echo "<td>&pound;".$Cost."</td>";
					echo "<td>".$location."</td>";
					}
					echo "</table>";	
					?>
				</div> 
               
				<?php
               	mysql_select_db("bksys", $con);
					$sql = "select *from registrants where id = " . $_SESSION['id'];
					echo ($sql);
					$result= mysql_query($sql, $con);	 
               ?> 
                
  				<div id="contentregister"> 				
  				<form name="registration" method="get" onsubmit="return registrationvalidation();" action="functions/users_update_details.php">
  					<fieldset class="register"> 						
  						<p class="txt">Please ensure your first name is at least 3 characters long</p>				
						<p class="romeo">First Name:</p><input class="romeo" id="firstName" type="text" value="<?php echo ($row['firstName']); ?>" name="firstName" />				
						<br/>							
						<br/>							
						<br/>							
						<p class="txt">Please ensure your second name name is at least 3 characters long</p>				
						<p class="romeo">Second Name:</p><input class="romeo" id="secondName" type="text" value="<?php echo ($row['secondName']); ?>" name="secondName" />					
						<br/>							
						<br/>							
						<br/>							
						<p class="txt">Please ensure you use a valid email address</p>							
						<p class="romeo">e-mail:</p><input class="romeo" id="emailAddress" type="text" value="<?php echo ($row['emailAddress']); ?>" name="emailAddress" />							
						<br/>							
						<br/>							
						<br/>							
						<p class="txt">Your password should be at least 8 characters long</p>						
						<p class="romeo">Password:</p><input class="romeo" id="password" type="text" value="<?php echo ($row['password']); ?>" name="password" />							
						<br/>							
						<br/>							
						<br/>							
						<p class="txt">You can only choose one area of interest</p>							
						<p class="romeo">Intrest Area:</p>							
						<div class="romeo">									
<select name="interestArea">		
  		<option value="Panda's in Heat"<?php if($row['interestArea'] == "Panda's in Heat"){echo "Selected";} ?>"">Panda in Heat</option>
  		<option value="The Ant Population"<?php if($row['interestArea'] == "The Ant Population"){echo "Selected";} ?>"">The Ant Population</option>
  		<option value="Angry Lions" <?php if($row['interestArea'] == "Angry Lions"){echo "Selected";} ?>"">Angry Lions</option>
  		<option value="Drunk Monkeys" <?php if($row['interestArea'] == "Drunk Monkeys"){echo "Selected";} ?>"">Drunk Monkeys</option>			
									</select>									
								</div>							
							<br/>							
							<br/>						
							<br/>						
							<br/>	
						</fieldset>	
					</form>  				
  				</div> 				
              <div id="register"> 
              <input class="submitright" type="submit" name="submit" value="submit" id="submit" />   
              </div>            
  			</div>
	</body>	
</html>