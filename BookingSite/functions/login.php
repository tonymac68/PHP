<?php

$con=mysql_connect("localhost","root","")
or die (mysql_error());
					
mysql_select_db("flexiflash", $con);

if (isset($_GET['submit'])){

	$email = ( $_GET['email']);
	$password = md5($_GET['password']);

	$sql = "SELECT * FROM users WHERE email ='". $email ."'";
	
	$result = mysql_query($sql);
	if(($row = mysql_fetch_array($result)))
	{
		session_start();

		$user_id = $row['user_id'];
		$userType = $row['userType'];
		$first_name = $row['first_name'];
		
		$_SESSION['user_id'] = $user_id;
		$_SESSION['userType'] = $userType;
		$_SESSION['first_name'] = $first_name;

		if($userType == "user")
		{
				header('Location: ../users.php');
		}
		elseif($userType == "admin")
		{
			header('Location: ../admin.php');
		}
		else
		{
			header('Location: ../index.php');
		}
	}
	else
	{
	header('Location: ../index.php?invalidlogin=1');
	}

}

mysql_select_db("flexiflash", $con);
		
?>