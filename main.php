<html>
<link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta http-equiv="content-type" content="text/html"; charset=utf-8>
<title>Mix.kz</title>
<body>
	<?php 
	$a='';
	if(isset($_REQUEST['login']) && $_REQUEST['login']=='true') $a='true';
	session_start();
	include("header1.php"); ?>
	<script type="text/javascript">
			function showUser()
			{
			var str = document.getElementById("search").value;

			if (str=="")
			  {
			  document.getElementById("result").innerHTML="";
			  return;
			  } 

			  xmlhttp=new XMLHttpRequest();

			  xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			    {
			    document.getElementById("result").innerHTML=xmlhttp.responseText;
			    }
			  }
			  <?php if($a=='true') {?>
			xmlhttp.open("GET","getuser.php?q="+str+"&login=true",true);
			<?php }else {?>
				xmlhttp.open("GET","getuser.php?q="+str+"&login=",true); <?php }?>
			xmlhttp.send();
			}
	</script>
	<div class='mainPage'>
	<?php $torf='';
		include("header.php");
	$a = '';
	echo "<form action='search.php?login=".$a."' method='POST'>";
	?>
			<fieldset>
			<div id='searchBox'>
				<div>
					<div id='searchButton'><input type='submit' value="Search"></div>
					<div id='input'><input type='text' name='search' placeholder="Search"  onkeyup="showUser()" autocomplete="off" id='search'/></div>
				</div>
				<div id='result'></div>
			</div>
			</fieldset>
		</form>
		<?php
				echo "<div id='box'>
						<table>
							<tr>
								<td><div class='photo'><a href='1forChild.php?login=".$torf."'><img src='image/1.jpg' class='realPhoto'></a></div></td>
								<td><div class='photo'><a href='2realEstate.php?login=".$torf."'><img src='image/2.jpg' class='realPhoto'></a></div></td>
								<td><div class='photo'><a href='3transport.php?login=".$torf."'><img src='image/3.jpg' class='realPhoto'></a></div></td>
								<td><div class='photo'><a href='4job.php?login=".$torf."'><img src='image/4.jpg' class='realPhoto'></a></div></td>
							</tr>
							<tr>
								<td><div class='category'><a href='1forChild.php?login=".$torf."'>
Детский мир</a></div></td>
								<td><div class='category'><a href='2realEstate.php?login=".$torf."'>Недвижимость</a></div></td>
								<td><div class='category'><a href='3transport.php?login=".$torf."'>Транспорт</a></div></td>
								<td><div class='category'><a href='4job.php?login=".$torf."'>Работа</a></div></td>
							</tr>
							<tr>
								<td><div class='photo'><a href='5animals.php?login=".$torf."'><img src='image/5.jpg' class='realPhoto'></a></div></td>
								<td><div class='photo'><a href='6homeGarden.php?login=".$torf."'><img src='image/6.jpg' class='realPhoto'></a></div></td>
								<td><div class='photo'><a href='7electronics.php?login=".$torf."'><img src='image/7.jpg' class='realPhoto'></a></div></td>
								<td><div class='photo'><a href='8businessServices.php?login=".$torf."'><img src='image/8.jpg' class='realPhoto'></a></div></td>
							</tr>
							<tr>
								<td><div class='category'><a href='5animals.php?login=".$torf."'>Животные</a></div></td>
								<td><div class='category'><a href='6homeGarden.php?login=".$torf."'>Дом и сад</a></div></td>
								<td><div class='category'><a href='7electronics.php?login=".$torf."'>Электроника</a></div></td>
								<td><div class='category'><a href='8businessServices.php?login=".$torf."'>Бизнес и услуги</a></div></td>
							</tr>
							<tr>
								<td><div class='photo'><a href='9fashionStyle.php?login=".$torf."'><img src='image/9.jpg' class='realPhoto'></a></div></td>
								<td><div class='photo'><a href='10hobbiesSport.php?login=".$torf."'><img src='image/10.jpg' class='realPhoto'></a></div></td>
								<td><div class='photo'><a href='11giveGift.php?login=".$torf."'><img src='image/11.jpg' class='realPhoto'></a></div></td>
								<td><div class='photo'><a href='12exchange.php?login=".$torf."'><img src='image/12.jpg' class='realPhoto'></a></div></td>
							</tr>
							<tr>
								<td><div class='category'><a href='9fashionStyle.php?login=".$torf."'>Мода и стиль</a></div></td>
								<td><div class='category'><a href='10hobbiesSport.php?login=".$torf."'>Хобби, отдых и спорт</a></div></td>
								<td><div class='category'><a href='11giveGift.php?login=".$torf."'>Отдам даром</a></div></td>
								<td><div class='category'><a href='12exchange.php?login=".$torf."'>Обмен</a></div></td>
							</tr>
						</table>
					</div>";
	?>
	<div id='someText'>
		У нас можно купить и продать все!
Наша доска бесплатных объявлений создана для того, чтобы объединить продавцов и покупателей Казахстана. Люди ежедневно что-нибудь продают и покупают, ищут работу, предлагают услуги. Еще совсем недавно вам бы пришлось искать потенциальных клиентов через знакомых и родственников или размещать объявления в газетах. А это не только долго, но и затратно. Мы поможем решить проблему. Не выходя из дома можно найти необходимый товар или услугу. Потратьте несколько минут на размещение объявления и о вашем товаре или услуге узнают тысячи покупателей.
Для удобства пользователей сайт разделен на тематические категории. На портале можно купить и продать практически все. Электронную технику, товары для детей, личные вещи, домашних животных, предметы домашнего пользования – все, что необходимо для отдыха и интересного времяпровождения. Также здесь можно разместить информацию об оказываемых услугах и поиске работы или персонала.
Мы поможем вам реализовать товары и услуги быстро и бесплатно. Размещайте ваше объявление или воспользуйтесь поиском прямо сейчас!
Желаем выгодных продаж и успешных покупок!
	</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>