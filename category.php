<html>
<head>
	<meta http-equiv="content-type" content="text/html"; charset=utf-8>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
	<body>
<div id="list">
<?php
	$result = mysql_query($query);
	$city = '';
	$cityArray = array('Алматы','Актау','Актобе','Астана','Атырау','Шымкент','Оскемен','Кокшетау','Орал','Караганды','Кызылорда','Жезказган','Кокшетау','Павлодар','Петропавл','Семей','Тараз','Талдыкорган');
	$a = '';
	if(isset($_REQUEST['login']) && $_REQUEST['login']=='true') $a='true';
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
?>
</div>
</body>
</html>
