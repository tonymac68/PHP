<?php 
include('include/sessionStart.php'); 
include('include/validateSession.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Administrators Page</title>
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
    	<div class="pagetitle"><h1>Administrator Add an Event</h1></div>
  </div>
  		<?php include('include/menu.php'); ?>
 <div id="p-left">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget quam eget ante pulvinar ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse non metus vel mauris convallis eleifend ut quis urna. In condimentum interdum purus eu auctor. Suspendisse potenti. Pellentesque id euismod ligula. Nullam arcu elit, mollis vitae malesuada vitae, cursus at ipsum.</p>

<p>Vivamus facilisis tortor quis est mattis ultrices. Ut quis libero vitae dolor tincidunt vulputate. Suspendisse sodales sem ante, ut bibendum sem egestas eget. Etiam pretium orci at purus laoreet, sed consectetur ante semper. Aliquam luctus augue sem, ac tincidunt ligula auctor non. Aenean vitae molestie arcu, a rutrum dolor. Mauris velit nisi, mollis non nisi sed, ullamcorper aliquet lacus. In at diam purus. Vestibulum facilisis semper lorem fermentum lacinia. Maecenas consectetur accumsan orci.</p>

<p>Ut luctus arcu libero, eget tincidunt neque suscipit ultricies. Nullam lacinia nisl orci, vitae euismod nisl vehicula eget. Vestibulum ultrices in leo in hendrerit. Mauris aliquet dolor ut diam viverra, ac tincidunt odio pulvinar. Nunc rutrum, eros eget dapibus adipiscing, purus lacus fringilla diam, nec egestas dui augue ut neque. Maecenas accumsan a tortor ac sodales. Phasellus nec ipsum augue. Integer eleifend pellentesque dui eget vulputate. Suspendisse quis eros sem. Proin dui mi, ultrices id blandit sed, condimentum et nisl. Sed felis enim, commodo a pretium eu, pulvinar non ante. Fusce et nisi blandit, consequat neque in, viverra enim. Mauris ullamcorper sodales pharetra. Sed blandit sapien sapien, ultrices lobortis mauris bibendum a. Morbi at ullamcorper dolor. Ut dapibus in augue vel malesuada.</p> 
 

</div>
<div id="p-right">
  		<div id="registration"> 				
  			<form name="registration" method="get" action="functions/admin_add_event.php"> 					
  				<fieldset> 						
  					<p>Add an Event</p>							
					<p>Event:</p><input id="event_name" type="text" value="" name="event_name"/>				
					<br/>							
					<br/>							
					<p></p>							
					<p>Date:</p><input id="event_date" type="text" value="" name="event_date" />						
					<br/>							
					<br/>							
					<p></p>							
					<p>Time:</p><input id="start_time" type="text" value="" name="start_time" />						
					<br/>							
					<br/>							
					<p></p>							
					<p>Cost:</p><input id="cost" type="text" value="" name="cost" />							
					<br/>							
					<br/>							
					<p></p>							
					<p>Location:</p>
					<div>
                                    		<select name="location">
  							<option selected value=>Choose</option>
 	 						<option value="Hall 1">Hall 1</option>
 	 						<option value="Hall 2">Hall 2</option>
  							<option value="Hall 3">Hall 3</option>
  							<option value="Hall 4">Hall 4</option>
							<option value="Hall 5">Hall 5</option>
						</select>									
						</div>						
							<br/>						
							<input type="submit" name="submit" value="SUBMIT" id="submit" />												
						</fieldset>	
					</form> 				
  				</div> 			
  			</div>
  		</div>	
	</body>
</html>