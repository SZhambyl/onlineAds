<?php
	include('connection.php');
	$myId1 = $_REQUEST['abc'];
	$id1 = $_REQUEST['abcd'];
	$message = $_POST['textArea'];
	if (mysql_query("INSERT INTO message VALUES (null,null,'$myId1','$message','$id1')")){
	header("Location:main.php?login=true");
}
?>