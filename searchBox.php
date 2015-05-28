<html>
	<meta http-equiv="content-type" content="text/html"; charset=utf-8>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<body>
		<?php 
		if (isset($_REQUEST['name']) && $_REQUEST['name']=='true'){session_start(); include('header1.php');}
		if (isset($_REQUEST['login']) && $_REQUEST['login']=='true'){
		echo "<form method='post' action='searchBox.php?name=true&login=true'>";
		} else { echo "<form method='post' action='searchBox.php?name=true'>";} ?>
		<div id="boxSearch">
			<div id='inputName'><input type="text" name="search" placeholder="Искать в заголовке"/></div>
			<div id='option'>
				<select name='select'>
                    <option value="1">Алматы</option>
                    <option value="2">Актау</option>
                    <option value="3">Актобе</option>
                    <option value="4">Астана</option>
                    <option value="5">Атырау</option>
                    <option value="6">Шымкент</option>
                    <option value="7">Оскемен</option>
                    <option value="8">Кокшетау</option>
                    <option value="9">Орал</option>
                    <option value="10">Караганды</option>
                    <option value="11">Кызылорда</option>
                    <option value="12">Жезказган</option>
                    <option value="13">Кокшетау</option>
                    <option value="14">Павлодар</option>
                    <option value="15">Петропавл</option>
                    <option value="16">Семей</option>
                    <option value="17">Тараз</option>
                    <option value="18">Талдыкорган</option>
				</select>
			</div>
			<div id='selectedBox'>
				<select name='selected'>
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
					<option value='12'>Обмен</option>
				</select>
			</div>
			<div id='together'>
			<div id='first'><input type='text' name='first' placeholder="Цена от"/></div>
			<div id='second'><input type='text' name='second' placeholder="Цена до"/></div>
			</div>
			<div id='searchButton1'><input type='submit' name='submit' value='Search'/></div>
		</div>
	</form>
	<?php 
		if (isset($_REQUEST['name']) && $_REQUEST['name']=='true'){
			include('connection.php');
			$search = $_POST['search'];
			$first = $_POST['first'];
			$second = $_POST['second'];
			$selected_val='';
			$selected_city='';

			if(isset($_POST['submit'])){
			$selected_val = $_POST['selected'];
			}

			if(isset($_POST['submit'])){
			$selected_city = $_POST['select'];
			}
			$a = '';
			if(isset($_REQUEST['login']) && $_REQUEST['login']=='true') $a='true';
			if($second=="") $second='99999999999';
			$sql="SELECT * FROM good WHERE NameG LIKE '%$search%' AND City='$selected_city' AND Category='$selected_val' AND Price>='$first' AND Price<='$second'";
			$result = mysql_query($sql);
			while($row=mysql_fetch_array($result)){
				echo "<a href='result.php?id=".$row['Id']."&login=".$a."'><div class='things'>";
				echo "<div id='date'>".$row['DateOfAdd']."</div>";
				echo "<div id='photoP'><img src='".$row['Photo1']."'  class='smallPhoto'/></div>";
				echo "<div id='nameP'><div class='tovar'>Название товара: ".$row['NameG']."</div><div class='gorod'>Город: ".$row['City']."</div></div>";
				echo "<div id='priceP'>".$row['Price']." тг.</div>";
				echo "</div></a>";
				}
		}
		else include("category.php"); 
		if (isset($_REQUEST['name']) && $_REQUEST['name']=='true') include('footer.php');
		?>
	</body>
</html>