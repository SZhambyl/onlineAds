<html>
	<head>
		<meta http-equiv="content-type" content="text/html"; charset=utf-8>
	</head>
<body>
	<?php 
		session_start();
		include('header1.php');
	?>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<body><h1 class='categoryName'>Admin page</h1></body>
	<form method='post' action='deleteMultiple.php'>
	<?php
	if ($_SESSION['password']=='admin'){
	echo "<div id='forAdmin'>";
	echo "<input type='submit' name='delete' value='удалить'/></br></br>";
	echo "<input type='submit' name='agree' value='agree'/></br></br>";
	echo "<input type='submit' name='disagree' value='disagree'/></br>";
	echo "</div>";
	include("connection.php");
	$query = "SELECT * FROM good ORDER BY DateOfAdd DESC";
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
		echo "<td><input type='checkbox' name='checkbox[]' value='".$row['Id']."'/></td><td class='nameG'>".$row['NameG']."</td><td>".$row['UserName']."</td><td class='price'>".$row['Price']." тг</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td colspan='3'><img src='".$row['Photo1']."'  class='bigPhotoAdmin'/></td>
				<td>About things: </br></br>".$row['Comment']."</td>
				<td>City: ".$city."</td>";
		echo "</tr>";
		echo "<tr>";
		if($row['Photo2']!=""){echo "<td><img src='".$row['Photo2']."'  class='smallPhotoAdmin'/></td>";}else{echo "<td></td>";}
		if($row['Photo3']!=""){echo "<td><img src='".$row['Photo3']."'  class='smallPhotoAdmin'/></td>";}else{echo "<td></td>";}
		if($row['Photo4']!=""){echo "<td><img src='".$row['Photo4']."'  class='smallPhotoAdmin'/></td>";}else{echo "<td></td>";}
		echo "<td>Phone number: ".$row['Phone']."</td>";
		echo "</tr>";
		echo "<tr>";
		if($row['Torf']=='false'){echo "<td><a href='agree.php?id=".$row['Id']."'>Agree</a></td>";}
		else{echo "<td><a href='disagree.php?id=".$row['Id']."'>Disagree</a></td>";}
		echo "<td><a href='delete.php?id=".$row['Id']."'>Удалить</a></td>";
		echo "<td>ID: ".$row['OwnerId']."</br>".$row['Login']."</td>";
		echo "<td>Category: ".$category."</td></tr>";
		echo "</table>";
		echo "</div>";
		$category = '';
		}
	}
	else{header("Location:main.php");}
	include('footer.php');
	?>
</form>
</body>
</html>