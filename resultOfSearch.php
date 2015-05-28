<html>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta http-equiv="content-type" content="text/html"; charset=utf-8>
<?php
include('connection.php');
$search = $_POST['search'];




$sql="SELECT * FROM good WHERE NameG LIKE '%$search%'";


$result = mysql_query($sql);
$category = '';
$city = '';
$categoryArray = array('For child','Real estate','Transport','Job','Animals','Home and Garden','Electronics','Business and Services','Fashion and Style','Hobies and Sport','Give a Gift','Exchange');
$cityArray = array('Алматы','Актау','Актобе','Астана','Атырау','Шымкент','Оскемен','Кокшетау','Орал','Караганды','Кызылорда','Жезказган','Кокшетау','Павлодар','Петропавл','Семей','Тараз','Талдыкорган');
while($row=mysql_fetch_array($result)){
	$result2 = mysql_query("SELECT * FROM registration WHERE Id='".$row['OwnerId']."'");
	$row2 = mysql_fetch_array($result2);
	for ($i=0; $i<sizeof($categoryArray); $i++){
		if($row['Category']==$i+1) $category=$categoryArray[$i];
	}
	for ($i=0; $i<sizeof($cityArray); $i++){
		if($row['City']==$i) $city=$cityArray[$i];
	}
	echo "<div class='things'>";
	echo "<table>";
	echo "<tr>";
	echo "<td colspan='2' class='nameG'>".$row['NameG']."</td><td>".$row['UserName']."</td><td class='price'>".$row['Price']." KZT</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td colspan='3'><img src='".$row['Photo1']."'  class='bigPhoto'/></td>
			<td class='comment'>About things: </br></br>".$row['Comment']."</td>
			<td>City: </br>".$city."</td>";
	echo "</tr>";
	echo "<tr>";
	if($row['Photo2']!=""){echo "<td><img src='".$row['Photo2']."'  class='smallPhoto'/></td>";}else{echo "<td></td>";}
	if($row['Photo3']!=""){echo "<td><img src='".$row['Photo3']."'  class='smallPhoto'/></td>";}else{echo "<td></td>";}
	if($row['Photo4']!=""){echo "<td><img src='".$row['Photo4']."'  class='smallPhoto'/></td>";}else{echo "<td></td>";}
	echo "<td>Phone number: ".$row['Phone']."</br>".$row['Login']."</td>";
	echo "<td>Category: ".$category."</td></tr>";
	echo "</tr>"; 
	echo "</table>";
	echo "</div>";
	}
?>
</html>