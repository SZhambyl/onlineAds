<html>
<meta http-equiv="content-type" content="text/html"; charset=utf-8>
<link rel="stylesheet" type="text/css" href="style.css"/>
<body>
<?php
session_start();
include('header1.php');
$id='';
if (isset($_REQUEST['id']) && $_REQUEST['id']!='') {$id = $_REQUEST['id'];}
include("connection.php");
$sql="SELECT * FROM good WHERE Id='".$id."'";
$result = mysql_query($sql);
// $row2 = mysql_fetch_array($result);
// if($row2['OwnerId']!='0'){
// $query = "SELECT * FROM registration WHERE Id='".$id."'";
// $row3 = mysql_fetch_array(mysql_query($query));
// }
$category = '';
$city = '';
$categoryArray = array('Детский мир','Недвижимость','Транспорт','Работа','Животные','Дом и сад','Электроника','Бизнес и услуги','Мода и стиль','Хобби, отдых и спорт','Отдам даром','Обмен');
$cityArray = array('Алматы','Актау','Актобе','Астана','Атырау','Шымкент','Оскемен','Кокшетау','Орал','Караганды','Кызылорда','Жезказган','Кокшетау','Павлодар','Петропавл','Семей','Тараз','Талдыкорган');
while($row=mysql_fetch_array($result)){
	for ($i=0; $i<sizeof($categoryArray); $i++){
		if($row['Category']==$i+1) $category=$categoryArray[$i];
	}
	for ($i=0; $i<sizeof($cityArray); $i++){
		if($row['City']==$i) $city=$cityArray[$i];
	}
	echo "<div class='blocks'>";
		echo "<div id='firstBlock'>";
			echo "<div id='nameBlock'>".$row['NameG']."</div>";
			echo "<div id='photoBlock'><img src='".$row['Photo1']."'  class='bigPhoto'/></div>";
			echo "<div id='commentBlock'>".$row['Comment']."</div>";
			if($row['Photo2']!=""){echo "<div id='photo2Block'><img src='".$row['Photo2']."'  class='bigPhoto'/></div>";}else{echo "<div id='photo2Block'></div>";}
			if($row['Photo3']!=""){echo "<div id='photo3Block'><img src='".$row['Photo3']."'  class='bigPhoto'/></div>";}else{echo "<div id='photo2Block'></div>";}
			if($row['Photo4']!=""){echo "<div id='photo4block'><img src='".$row['Photo4']."'  class='bigPhoto'/></div>";}else{echo "<div id='photo2Block'></div>";}
		echo "</div>";
		echo "<div id='secondBlock'>";
			echo "<div id='priceBlock'>".$row['Price']."<span id='kzt'>kzt<span></div>";
			echo "<div id='phoneBlock'>".$row['Phone']."</div>";
			echo "<div id='userNameBlock'>".$row['UserName']."</div>";
			if($row['OwnerId']!='0' && isset($_REQUEST['login']) && $_REQUEST['login']=='true' && $_SESSION['ownerId']!=$row['OwnerId']){ echo "<div><a href='sendMessage.php?userId=".$row['OwnerId']."'>Send message</a></div>";}
			echo "<div id='loginBlock'>".$row['Login']."</div>";
			echo "<div id='cityBlock'>".$city."</div>";
		echo "</div>";
	echo "</div>";
	}
?>
</body>
</html>