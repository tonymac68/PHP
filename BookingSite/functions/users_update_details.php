<?php
session_start();
if(isset($_SESSION['user_id']))
{

$con=mysql_connect("localhost","root","")
or die (mysql_error());
					
mysql_select_db("flexiflash", $con);

	$user_id=$_SESSION['user_id'];
	$first_name=$_GET['first_name'];
	$last_name=$_GET['last_name'];
	$email=$_GET['email'];
	$password=$_GET['password'];
	$interest=$_GET['interest'];
	
	$newpassword = md5($_REQUEST['newpassword']);
	
	$sql = "UPDATE users SET `userType`= '" . 'user' . "',`first_name`= '" . $first_name . "',`last_name`= '" . $last_name . "',`email`= '" . $email . "',`interest`= '" . $interest . "',`password`= '" . $newpassword . "' WHERE user_id ='". $user_id . "'";
	
	mysql_query($sql, $con);
	
	header('Location: ../users.php');

}

?>

