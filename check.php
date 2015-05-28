<html>
<meta http-equiv="content-type" content="text/html"; charset=utf-8>
</html>
<?php
	session_start();
    include("connection.php");
	$login =  $_POST['login'];
	$password = $_POST['password'];

	$login = stripslashes($login);
	$password = stripslashes($password);
	$login = mysql_real_escape_string($login);
	$password = mysql_real_escape_string($password);
	$sql="SELECT * FROM registration WHERE Email='$login' and Password='$password'";
	$result=mysql_query($sql);

	$count=mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	if($row['Email']=="admin" && $row['Password']=="admin"){
		$_SESSION['password']=$row['Password'];
		header('location:admin.php');
	}
	else if($count==1){
		$_SESSION['email']=$row['Email'];
		$_SESSION['ownerId']=$row['Id'];
		header("location:main.php?login=true");
	}
	else header("Location:mainC.php?login=false");
?>