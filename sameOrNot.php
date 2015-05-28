<?php
$q=$_GET["q"];

include('connection.php');
$sql="SELECT * FROM registration WHERE Email ='$q'";
$result = mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
echo "The box with the same name already exists...";
} 
?>
