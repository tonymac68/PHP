<?php
session_start();
$con=mysql_connect("localhost","root","")
or die (mysql_error());
mysql_select_db("flexiflash", $con);

if (isset($_SESSION['user_id']))

{
	$sql = "SELECT * FROM users WHERE user_id ='" . $_SESSION['user_id'] . "'";
	$result=mysql_query($sql);
	
	if(!($row=mysql_fetch_array($result)))
	{	
		header('Location: user.php?mustlogin=1');	
	}
}
else
	{
		header('Location: index.php?mustlogin=1');
	}	
?>