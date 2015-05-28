<?php
$id = $_REQUEST['id'];

include("connection.php");

$query = "DELETE FROM goods WHERE Id = '".$id."'";
$result = mysql_query($query);
header("Location:userPage.php");
?>