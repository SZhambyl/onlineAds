<?php
include('connection.php');
$id=$_REQUEST['id'];
mysql_query("UPDATE good SET Photo2='' WHERE Id='$id'");
header("Location:update.php?id=$id");
?>