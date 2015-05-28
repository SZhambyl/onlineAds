<?php
$q=$_GET["q"];

include("connection.php");

$sql="SELECT * FROM good WHERE NameG LIKE '%".$q."%'";

$result = mysql_query($sql);
echo "<ul class='result'>";
while($row = mysql_fetch_array($result)) {
	$name = $row['NameG'];
echo "<li class='leaf'><a href='result.php?name=".$name."'>".$name."</a></li>";
}
echo "</ul>";
?>
