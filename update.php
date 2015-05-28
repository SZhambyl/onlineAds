<html>
<meta http-equiv="content-type" content="text/html"; charset=utf-8>
<body onload="myFunction">
	<script type="text/javascript">
                function myFunction(a) {
                    if (a.keyCode == 8) return true;
                    if (a.keyCode == 9) return true;
                    if (a.keyCode >= 48 && a.keyCode <=57 | a.keyCode >= 96 && a.keyCode<=105) return true;
                    return false;
                }
    </script>
    <?php
    	$id = $_REQUEST['id'];
    	session_start();
    	include('header1.php');
    	if($_SESSION['email'] && $id!=""){
    ?>
	<a href="userPage.php?login=true">Back</a>
<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
include("connection.php");
$query = "SELECT * FROM good WHERE Id=".$id."";
$result = mysql_query($query);
$row = mysql_fetch_array($result);

$category = '';
$city = '';
$categoryArray = array('Детский мир','Недвижимость','Транспорт','Работа','Животные','Дом и сад','Электроника','Бизнес и услуги','Мода и стиль','Хобби, отдых и спорт','Отдам даром','Обмен');
$cityArray = array('Алматы','Актау','Актобе','Астана','Атырау','Шымкент','Оскемен','Кокшетау','Орал','Караганды','Кызылорда','Жезказган','Кокшетау','Павлодар','Петропавл','Семей','Тараз','Талдыкорган');
for ($i=0; $i<sizeof($categoryArray); $i++){
	if($row['Category']==$i+1) $category=$categoryArray[$i];
}
for ($i=0; $i<sizeof($cityArray); $i++){
	if($row['City']==$i) $city=$cityArray[$i];
}

echo "<form method='post' action='edit.php' enctype='multipart/form-data'>
<div class='thingsAdmin'>
<table>";

	echo "<tr><td><input type='hidden' value='".$row['Id']."' name='id'/></td></tr>";

	echo "<tr><td><input type='text' name='name'/></td><td class='nameG'>".$row['NameG']."</td></tr>";

	echo "<tr><td><input type='text' name='price'/ onkeydown='return myFunction(event)'></td><td class='price'>".$row['Price']." Тг</td></tr>";

	echo "<tr><td><select name='selected' id='empty'>
					<option value=''>Выбери категорию</option>
					<option value='1'>Детский мир</option>
					<option value='2'>Недвижимость</option>
					<option value='3'>Транспорт</option>
					<option value='4'>Работа</option>
					<option value='5'>Животные</option>
					<option value='6'>Дом и сад</option>
					<option value='7'>Электроника</option>
					<option value='8'>Бизнес и услуги</option>
					<option value='9'>Мода и стиль</option>
					<option value='10'>Хобби, отдых и спорт</option>
					<option value='11'>Отдам даром</option>
					<option value='12'>Талдыкорган</option>
				</select></td>
			<td>Категория: ".$category."</td></tr>";

	echo "<tr><td><input type='file' name='photo1'/></td><td>";
	if($row['Photo1']!=""){echo "<img src='".$row['Photo1']."'  class='smallPhotoAdmin'/><a href='deletePhoto1.php?id=".$row['Id']."'>Удалить</a>";}else{echo "<h3>empty main photo</h3>";}
	echo "</td></tr>";

	echo "<tr><td><textarea name='textA' cols='35' rows='12'></textarea></td><td class='comment'>Описание товара: </br></br>".$row['Comment']."</td></tr>";

	echo "<tr><td><input type='file' name='photo2'/></td><td>";
	if($row['Photo2']!=""){echo "<img src='".$row['Photo2']."'  class='smallPhotoAdmin'/><a href='deletePhoto2.php?id=".$row['Id']."'>Удалить</a>";}else{echo "<h3>photo2 is empty</h3>";}
	echo "</td></tr>";

	echo "<tr><td><input type='file' name='photo3'/></td><td>";
	if($row['Photo3']!=""){echo "<img src='".$row['Photo3']."'  class='smallPhotoAdmin'/><a href='deletePhoto3.php?id=".$row['Id']."'>Удалить</a>";}else{echo "<h3>photo3 is empty</h3>";}
	echo "</td></tr>";

	echo "<tr><td><input type='file' name='photo4'/></td><td>";
	if($row['Photo4']!=""){echo "<img src='".$row['Photo4']."'  class='smallPhotoAdmin'/><a href='deletePhoto4.php?id=".$row['Id']."'>Удалить</a>";}else{echo "<h3>photo4 is empty</h3>";}
	echo "</td></tr>";

	echo "<tr><td><select name='city' id='emptyOrNot'>
					<option value=''>Выбери город</option>
                    <option value='1'>Алматы</option>
                    <option value='2'>Актау</option>
                    <option value='3'>Актобе</option>
                    <option value='4'>Астана</option>
                    <option value='5'>Атырау</option>
                    <option value='6'>Шымкент</option>
                    <option value='7'>Оскемен</option>
                    <option value='8'>Кокшетау</option>
                    <option value='9'>Орал</option>
                    <option value='10'>Караганды</option>
                    <option value='11'>Кызылорда</option>
                    <option value='12'>Жезказган</option>
                    <option value='13'>Кокшетау</option>
                    <option value='14'>Павлодар</option>
                    <option value='15'>Петропавл</option>
                    <option value='16'>Семей</option>
                    <option value='17'>Тараз</option>
                    <option value='18'>Талдыкорган</option>
				</select></td>
			<td>Город: ".$city."</td></tr>";


	echo "<tr><td><input type='text' name='phoneNumber' onkeydown='return myFunction(event)'/></td><td>Тел: ".$row['Phone']."</td></tr>";

echo "</table>
<input type='submit' value='edit' name='submit'/>
</div>
</form>";
}
else if($_SESSION['email']) header('Location:main.php?login=true');
else header('Location:main.php');
include('footer.php');
?>
</body>
</html>