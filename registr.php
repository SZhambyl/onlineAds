<?php
	include("connection.php");
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];

	
	if (mysql_query("INSERT INTO registration VALUES(null,'$email', '$password',null)")){
		$result2 = mysql_query("SELECT * FROM registration WHERE Email='$email' AND Password='$password'");
		$row2 = mysql_fetch_array($result2);
		$_SESSION['ownerId']=$row2['Id'];
		$_SESSION['email']=$row2['Email'];
		header("location:main.php?login=true");
	}
	mysql_close($con);
?>