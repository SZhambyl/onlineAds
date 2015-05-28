<html>
<meta http-equiv="content-type" content="text/html"; charset=utf-8>
<?php
$q=$_GET["q"];

include("connection.php");

$list = array();
$sql="SELECT * FROM good WHERE NameG LIKE '%".$q."%'";

$result = mysql_query($sql);

while ($row=mysql_fetch_array($result)){
	$list[$i]=$row['Category'];
	$i++;
}
echo "<table border='1'>";
for ($a='0'; $a<sizeof($list); $a++){
	echo "<tr>".$list[$a]."</tr>";
}
echo "</table>";

?>
</html>