<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta http-equiv="content-type" content="text/html"; charset=utf-8>
</head>
<body>
<?php
$a = '';
if(isset($_REQUEST['login']) && $_REQUEST['login']=='true') $a='true';
session_start();
include('header1.php');
include('connection.php');
$search = $_POST['search'];


$sql="SELECT * FROM good WHERE NameG LIKE '%$search%'";

	$result = mysql_query($sql);
	$city = '';
	$cityArray = array('Алматы','Актау','Актобе','Астана','Атырау','Шымкент','Оскемен','Кокшетау','Орал','Караганды','Кызылорда','Жезказган','Кокшетау','Павлодар','Петропавл','Семей','Тараз','Талдыкорган');
	
	while($row=mysql_fetch_array($result)){
		$name = $row['NameG'];
		for ($i=0; $i<sizeof($cityArray); $i++){
					if($row['City']==$i) $city=$cityArray[$i];
				}
		echo "<a href='result.php?id=".$row['Id']."&login=".$a."'><div class='things'>";
		echo "<div id='date'>".$row['DateOfAdd']."</div>";
		echo "<div id='photoP'><img src='".$row['Photo1']."'  class='smallPhoto'/></div>";
		echo "<div id='nameP'><div class='tovar'>Название товара: ".$row['NameG']."</div><div class='gorod'>Город: ".$city."</div></div>";
		echo "<div id='priceP'>".$row['Price']." тг.</div>";
		echo "</div></a>";
		}
		include('footer.php');
?>
</body>
</html>