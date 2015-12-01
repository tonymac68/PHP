<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Registration</title>
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
    <div class="pagetitle"><h1>Site Registration</h1></div>
    </div>
    <div id="p-left">
     <h1>Site Registration</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque, lacus quis scelerisque facilisis, dui sem placerat magna, quis aliquet dolor velit nec mauris. Etiam justo libero, ornare quis mi quis, pellentesque sodales enim. Praesent libero lacus, iaculis ac posuere ac, aliquam tincidunt diam. Nulla sem risus, mattis vel eleifend non, semper eget arcu. In justo ligula, pulvinar eget cursus vitae, venenatis et urna. Nulla facilisi. Morbi volutpat consequat malesuada.</p>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque, lacus quis scelerisque facilisis, dui sem placerat magna, quis aliquet dolor velit nec mauris. Etiam justo libero, ornare quis mi quis, pellentesque sodales enim. Praesent libero lacus, iaculis ac posuere ac, aliquam tincidunt diam. Nulla sem risus, mattis vel eleifend non, semper eget arcu. In justo ligula, pulvinar eget cursus vitae, venenatis et urna. Nulla facilisi. Morbi volutpat consequat malesuada.</p>
  </div>
  <div id="p-right">  				
<form name="register" method="get" onsubmit="return registerForm() " action="functions/register.php">  					
	<fieldset>
  	<p>First Name: *</p><input id="first_name" type="text" value="" name="first_name" />
  	<p>Surname: *</p><input id="last_name" type="text" value="" name="last_name" />
  	<p>EMail: *</p><input id="email" type="text" value="" name="email" />
  	<p>Password: *</p><input id="password" type="password" value="" name="password" />
  	<br/>														
	<p>Interest Area: *</p>							
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
	<input type="submit" name="submit" value="SUBMIT" id="submit" />												
</fieldset>	
</form>
</div>
</body>			
</html>