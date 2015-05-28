<?php
$id = $_REQUEST['id'];

include("connection.php");

$query = "DELETE FROM good WHERE Id = '".$id."'";
$result = mysql_query($query);
header("Location:admin.php");
?>