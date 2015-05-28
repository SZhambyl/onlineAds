<html>
<meta http-equiv="content-type" content="text/html"; charset=utf-8>
<?php
$q=$_GET["q"];
$a=$_GET['login'];

include("connection.php");

$sql="SELECT * FROM good WHERE NameG LIKE '%".$q."%'";

$result = mysql_query($sql);
echo "<ul class='result'>";
while($row = mysql_fetch_array($result)) {
	$id = $row['Id'];
	$name = $row['NameG'];

echo "<li class='leaf'><a href='result.php?id=".$id."&login=".$a."'>".$name."</a></li>";
}
echo "</ul>";
?>
</html>