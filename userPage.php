<html>
<head><link rel="stylesheet" type="text/css" href="style.css"/>
	<meta http-equiv="content-type" content="text/html"; charset=utf-8>
</head>
<body>
<form method='post' action='deleteMultipleForUsers.php'>
<?php
	session_start();
	include('header1.php');
	if($_SESSION['email']){
	include('connection.php');
	$email = $_SESSION['email'];
	echo "</br><input type='submit' name='delete' value='удалить'/></br></br>";
	$userId = $_SESSION['ownerId'];
	$query = "SELECT * FROM goods WHERE OwnerId='".$userId."'";
	$result = mysql_query($query);
	$category = '';
	$city = '';
	$categoryArray = array('Детский мир','Недвижимость','Транспорт','Работа','Животные','Дом и сад','Электроника','Бизнес и услуги','Мода и стиль','Хобби, отдых и спорт','Отдам даром','Обмен');
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
		echo "<div class='thingsAdmin'>";
		echo "<table>";
		echo "<tr>";
		echo "<td><input type='checkbox' name='checkbox[]' value='".$row['Id']."'/></td><td colspan='2' class='nameG'>".$row['NameG']."</td><td class='price'>".$row['Price']." KZT</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td colspan='3'><img src='".$row['Photo1']."'  class='bigPhotoAdmin'/></td>
				<td>Описание товара: </br></br>".$row['Comment']."</td>
				<td>Город: ".$city."</td>";
		echo "</tr>";
		echo "<tr>";
		if($row['Photo2']!=""){echo "<td><img src='".$row['Photo2']."'  class='smallPhotoAdmin'/></td>";}else{echo "<td></td>";}
		if($row['Photo3']!=""){echo "<td><img src='".$row['Photo3']."'  class='smallPhotoAdmin'/></td>";}else{echo "<td></td>";}
		if($row['Photo4']!=""){echo "<td><img src='".$row['Photo4']."'  class='smallPhotoAdmin'/></td>";}else{echo "<td></td>";}
		echo "<td>Номер телефона: ".$row['Phone']."</td>
			<td>Категория: ".$category."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><a href='update.php?id=".$row['Id']."&login=true'>Изменить</a></td>";
		echo "<td><a href='userDelete.php?id=".$row['Id']."'>удалить</a></td>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";
		}
	}
	else header('Location:main.php');
	include('footer.php');
?>
</form>
</body>
</html>