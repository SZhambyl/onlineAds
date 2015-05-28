<?php
$id = $_REQUEST['id'];
include("connection.php");
$query = "UPDATE good SET Torf = 'false' WHERE Id = '".$id."'";
$result = mysql_query($query);
$num = mysql_num_rows($result);

header("Location:admin.php");
?>