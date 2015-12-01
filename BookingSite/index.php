<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
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
    	<div class="pagetitle"><h1>Login Page</h1></div>
  </div>
  <div id="p-left">
  <h1>Welcome to FlaxiFelsh</h1>
  <p><strong>Administrator login details:<br />
  email admin@me.com<br />
  password: liverpool</strong></p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque, lacus quis scelerisque facilisis, dui sem placerat magna, quis aliquet dolor velit nec mauris. Etiam justo libero, ornare quis mi quis, pellentesque sodales enim. Praesent libero lacus, iaculis ac posuere ac, aliquam tincidunt diam. Nulla sem risus, mattis vel eleifend non, semper eget arcu. In justo ligula, pulvinar eget cursus vitae, venenatis et urna. Nulla facilisi. Morbi volutpat consequat malesuada.</p>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque, lacus quis scelerisque facilisis, dui sem placerat magna, quis aliquet dolor velit nec mauris. Etiam justo libero, ornare quis mi quis, pellentesque sodales enim. Praesent libero lacus, iaculis ac posuere ac, aliquam tincidunt diam. Nulla sem risus, mattis vel eleifend non, semper eget arcu. In justo ligula, pulvinar eget cursus vitae, venenatis et urna. Nulla facilisi. Morbi volutpat consequat malesuada.</p>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque, lacus quis scelerisque facilisis, dui sem placerat magna, quis aliquet dolor velit nec mauris. Etiam justo libero, ornare quis mi quis, pellentesque sodales enim. Praesent libero lacus, iaculis ac posuere ac, aliquam tincidunt diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque, lacus quis scelerisque facilisis,</p>
  
  </div>

  <div id="p-right">
    <?php
	if ( isset($_GET['invalidlogin'])) {
	echo("<div id=\"userfeedback\"><h3>Invalid login, please try again.</h3></div>");
	}	
      ?>
  	<div id="login"> 				
  			<form name="login" method="get" onsubmit="return validateForm()" action="functions/login.php"> 					
  					<fieldset> 						
  				<legend>Sign In</legend> 													
					<p>E-mail:</p><input id="email" type="text" value="" name="email"/>							 
					<p>Password:</p><input id="password" type="password" value="" name="password" />
					<input type="submit" name="submit" value="SIGN IN" id="submit" />							
					</fieldset>							
					<br/>							
					<br/>					
					</form>							
					<form name="register" method="get" action="registration.php">					
						<fieldset>						
						<legend>New User</legend>  							
						<input type="submit" name="submit" value="SIGN UP" id="submit" />						
						</fieldset>	
					</form>  				
  		</div> 							
 	</div>
 </div>
			
</body>	
</html>