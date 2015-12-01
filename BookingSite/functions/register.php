<?php

	$con=mysql_connect("localhost","root","")
	or die (mysql_error());		
	mysql_select_db("flexiflash", $con);

if (isset($_GET['submit'])){
	$first_name=$_GET['first_name'];
	$last_name=$_GET['last_name'];
	$email=$_GET['email'];
	$password=$_GET['password'];
	$interest=$_GET['interest'];

	$first_name = ($_GET['first_name']);
	$last_name = ($_GET['last_name']);
	$email = ($_GET['email']);
	$password = ($_GET['password']);
	$interest = ($_GET['interest']);

	$password = md5 ($password);

	$sql = mysql_query ("SELECT * FROM users WHERE email = '$email'");
	if (mysql_num_rows($sql) > 0) {
	//echo "Sorry that user already exists. ";
	exit(); 
}
	$sql = "INSERT INTO users (userType, first_name, last_name, email, password, interest) VALUES('" . 'user' . "','" . $first_name . "', '" . $last_name . "', '" . $email . "', '" . $password . "', '" . $interest . "')";
	
	
	header('Location: ../users.php');
	
}else{
header('Location: ../registration.php');
}
	
	
	mysql_query($sql, $con);
			
?>