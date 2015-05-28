<html>
<?php session_start();
include('header1.php');
$a='';
if (isset($_REQUEST['login']) && $_REQUEST['login']=='true'){
	$a='true';
	$email = $_SESSION['email'];
	$ownerid = $_SESSION['ownerId'];
}
else $email="";
if(isset($_REQUEST['add']) && $_REQUEST['add']=='true'){
 ?>
 <div id='table'>
 	Успешно завершен
</div>
<?php }?>
<meta http-equiv="content-type" content="text/html"; charset=utf-8>
	<body onload="myFunction" style="background-color:#B8B8B8">
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script src="jquery.js"></script>
		<script type="text/javascript">
				function info1(){
					document.getElementById('information').innerHTML="Введите <strong>наименование</strong>  товара, объекта или услуги. Чем точнее тематические слова, тем корректнее автоматическая система выбора рубрики укажет вам подходящую рубрику.";
					document.getElementById('information').style.borderColor='green';
				}
				function info2(){
					document.getElementById('information').innerHTML="<strong>Как к вам обращаться?</strong>";
					document.getElementById('information').style.borderColor='green';
				}
				function info3(){
					document.getElementById('information').innerHTML="Введите ваш email-адрес. Этот e-mail не будет показан в объявлении. Вы будете использовать этот email-адрес для входа на сайт.";
					document.getElementById('information').style.borderColor='green';
				}
				function info4(){
					document.getElementById('information').innerHTML="Добавьте описание вашего товара/услуги, укажите преимущества и важные детали.";
					document.getElementById('information').style.borderColor='green';
				}
				function info5(){
					document.getElementById('information').innerHTML="Добавьте номер своего <strong>телефона</strong>.";
					document.getElementById('information').style.borderColor='green';
				}
				function info6(){
					document.getElementById('information').innerHTML="<strong>Цена товара.</strong>";
					document.getElementById('information').style.borderColor='green';
				}
				function check(){
						var sel = document.getElementById('empty');
						var emptyOrNot = document.getElementById('emptyOrNot');
						var name = document.getElementById('nameCheck');
						var price = document.getElementById('priceCheck');
						var phone = document.getElementById('numberCheck');
						var checkk = document.getElementById("area");
						var user = document.getElementById("userCheck");
						var email = document.getElementById("loginCheck");
						var check = document.getElementById("checkBox").checked;
						if(name.value==""){
							document.getElementById("alert1").innerHTML="Write name of your product...";
							document.getElementById("ngood").style.backgroundColor="#FFBBBB";
							return false;
						}
						else{
							document.getElementById("alert1").innerHTML="";
							document.getElementById("ngood").style.backgroundColor="";
						}
						if (sel.options[sel.selectedIndex].value == ''){
							document.getElementById("alert2").innerHTML="Select your category...";
							document.getElementById("selected").style.backgroundColor="#FFBBBB";
							return false;
						}
						else{
							document.getElementById("alert2").innerHTML="";
							document.getElementById("selected").style.backgroundColor="";
						}
						if (emptyOrNot.options[emptyOrNot.selectedIndex].value == ''){
							document.getElementById("alert6").innerHTML="Select city...";
							document.getElementById("city").style.backgroundColor="#FFBBBB";
							return false;
						}
						else{
							document.getElementById("alert6").innerHTML="";
							document.getElementById("city").style.backgroundColor="";
						}
						if(price.value==""){
							document.getElementById("alert3").innerHTML="Price of your product...";
							document.getElementById("price").style.backgroundColor="#FFBBBB";
							return false;
						}
						else{
							document.getElementById("alert3").innerHTML="";
							document.getElementById("price").style.backgroundColor="";
						}
						if(user.value==""){
							document.getElementById("alert7").innerHTML="Name please";
							document.getElementById("userName").style.backgroundColor="#FFBBBB";
							return false;
						}
						else{
							document.getElementById("alert7").innerHTML="";
							document.getElementById("userName").style.backgroundColor="";
						}
						if (email.value == ""){
			        	document.getElementById("alert8").innerHTML="Enter your 'Email'";
			        	document.getElementById("login").style.backgroundColor="#FFBBBB"; 
			        	return false;
				        }

						var b = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
						var truemail=b.test(email.value);
						if (!truemail){
							document.getElementById("alert8").innerHTML="Email is not true";
				        	document.getElementById("login").style.backgroundColor="#FFBBBB";
					        return false;
						}
						else{document.getElementById("login").style.backgroundColor=""; 
				        	document.getElementById("alert8").innerHTML="";
				    		}
						if(phone.value==""){
							document.getElementById("alert4").innerHTML="Number of your phone...";
							document.getElementById("phone").style.backgroundColor="#FFBBBB";
							return false;
						}
						else{
							document.getElementById("alert4").innerHTML="";
							document.getElementById("phone").style.backgroundColor="";
						}
						if(checkk.value==""){
							document.getElementById("alert5").innerHTML="Write something about your good...";
							document.getElementById("textA").style.backgroundColor="#FFBBBB";
							return false;
						}
						else{
							document.getElementById("alert5").innerHTML="";
							document.getElementById("textA").style.backgroundColor="";
						}

						if (!check){
							document.getElementById("alert9").innerHTML="You forget to check";
						   	document.getElementById("isChecked").style.backgroundColor="#FFBBBB";
				          	return false;
						}
						else {
							document.getElementById('isChecked').style.backgroundColor="";
				        	document.getElementById("alert9").innerHTML="";
				        }
							return true;					
						}
						function check1(){
						var sel = document.getElementById('empty');
						var emptyOrNot = document.getElementById('emptyOrNot');
						var name = document.getElementById('nameCheck');
						var price = document.getElementById('priceCheck');
						var phone = document.getElementById('numberCheck');
						var checkk = document.getElementById("area");
						var user = document.getElementById("userCheck");
						var email = document.getElementById("loginCheck");
						var check = document.getElementById("checkBox").checked;
						if(name.value==""){
							document.getElementById("alert1").innerHTML="Write name of your product...";
							document.getElementById("ngood").style.backgroundColor="#FFBBBB";
						}
						else{
							document.getElementById("alert1").innerHTML="";
							document.getElementById("ngood").style.backgroundColor="";
						}
						if (sel.options[sel.selectedIndex].value == ''){
							document.getElementById("alert2").innerHTML="Select your category...";
							document.getElementById("selected").style.backgroundColor="#FFBBBB";
						}
						else{
							document.getElementById("alert2").innerHTML="";
							document.getElementById("selected").style.backgroundColor="";
						}
						if (emptyOrNot.options[emptyOrNot.selectedIndex].value == ''){
							document.getElementById("alert6").innerHTML="Select city...";
							document.getElementById("city").style.backgroundColor="#FFBBBB";
						}
						else{
							document.getElementById("alert6").innerHTML="";
							document.getElementById("city").style.backgroundColor="";
						}
						if(price.value==""){
							document.getElementById("alert3").innerHTML="Price of your product...";
							document.getElementById("price").style.backgroundColor="#FFBBBB";
						}
						else{
							document.getElementById("alert3").innerHTML="";
							document.getElementById("price").style.backgroundColor="";
						}
						if(user.value==""){
							document.getElementById("alert7").innerHTML="Name please";
							document.getElementById("userName").style.backgroundColor="#FFBBBB";
						}
						else{
							document.getElementById("alert7").innerHTML="";
							document.getElementById("userName").style.backgroundColor="";
						}
						if (email.value == ""){
			        	document.getElementById("alert8").innerHTML="Enter your 'Email'";
			        	document.getElementById("login").style.backgroundColor="#FFBBBB"; 
				        }

						var b = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
						var truemail=b.test(email.value);
						if (!truemail){
							document.getElementById("alert8").innerHTML="Email is not true";
				        	document.getElementById("login").style.backgroundColor="#FFBBBB";
						}
						else{document.getElementById("login").style.backgroundColor=""; 
				        	document.getElementById("alert8").innerHTML="";
				    		}
						if(phone.value==""){
							document.getElementById("alert4").innerHTML="Number of your phone...";
							document.getElementById("phone").style.backgroundColor="#FFBBBB";
						}
						else{
							document.getElementById("alert4").innerHTML="";
							document.getElementById("phone").style.backgroundColor="";
						}
						if(checkk.value==""){
							document.getElementById("alert5").innerHTML="Write something about your good...";
							document.getElementById("textA").style.backgroundColor="#FFBBBB";
						}
						else{
							document.getElementById("alert5").innerHTML="";
							document.getElementById("textA").style.backgroundColor="";
						}

						if (!check){
							document.getElementById("alert9").innerHTML="You forget to check";
						   	document.getElementById("isChecked").style.backgroundColor="#FFBBBB";
						}
						else {
							document.getElementById('isChecked').style.backgroundColor="";
				        	document.getElementById("alert9").innerHTML="";
				        }
							return true;									
						}										
                function myFunction(a) {
                    if (a.keyCode == 8) return true;
                    if (a.keyCode == 9) return true;
                    if (a.keyCode >= 48 && a.keyCode <=57 | a.keyCode >= 96 && a.keyCode<=105) return true;
                    return false;
                }					
   	 	</script>
   	 	<style type="text/css">
   	 		#category{
   	 			display: none;
   	 		}
   	 		#add{
   	 			float:left;
   	 		}
   	 	</style>
		<form onsubmit="return check()" method="POST" action="add.php" enctype="multipart/form-data">
			<?php echo "<input type='hidden' name='hidden' value='".$a."'/>"; ?>
			
	<div id='mainDiv'>
		<div id='information'></div>
		<div id='nameBox'>
			<div id='ngood'><input type='text' name='ngood' id='nameCheck' onfocus='info1()'/><div id='alert1'></div></div>
			<div id='nameLabel'>Заголовок</div>
		</div>
		<div id='selectBox'>
			<div id='selected'>
				<select name='selected' id="empty">
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
				<div id='alert2'></div>
			</div>
			<div id='selectLabel'>Рубрика</div>
		</div>
		<div id='photo1Box'>
			<div id='photo1'><input type='file' name='photo1'/></div>
			<div id='photo1Label'>Главная фотография</div>
		</div>
		<div id='photo2Box'>
			<div id='photo2'><input type='file' name='photo2'/></div>
			<div id='photo2Label'>Фотография2</div>
		</div>
		<div id='photo3Box'>
			<div id='photo3'><input type='file' name='photo3'/></div>
			<div id='photo3Label'>Фотография3</div>
		</div>
		<div id='photo4Box'>
			<div id='photo4'><input type='file' name='photo4'/></div>
			<div id='photo4Label'>Фотография4</div>
		</div>
		<div id='cityBox'>
			<div id='city'>
				<select name='city' id="emptyOrNot">
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
				<div id='alert6'></div>
			</div>
			<div id='cityLabel'>Населенный пункт</div>
		</div>
		<div id='priceBox'>
			<div id='price'><input type='text' name='price'  onkeydown='return myFunction(event)' id='priceCheck' onfocus='info6()'/><div id='alert3'></div></div>
			<div id='priceLabel'>Цена (тенге)</div>
		</div>
		<div id='userBox'>
			<div id='userName'><input type='text' name='userName' id='userCheck' onfocus='info2()'/><div id='alert7'></div></div>
			<div id='userLabel'>Контактное лицо</div>
		</div>
		<div id='loginBox'>
			<?php
				if($email=="")echo "<div id='login'><input type='text' name='login' id='loginCheck' onfocus='info3()'/><div id='alert8'></div></div>";
				else echo "<div id='login'><input type='text' name='login' id='loginCheck' value='".$email."'/><div id='alert8'></div></div>";
			?>
			<div id='loginLabel'>Email-адрес</div>
		</div>
		<div id='phoneBox'>
			<div id='phone'><input type='text' name='phone'  onkeydown='return myFunction(event)' id='numberCheck' onfocus='info5()'/><div id='alert4'></div></div>
			<div id='phoneLabel'>Номер телефона</div>
		</div>
		<div id='areaBox'>
			<div id='textA'><textarea name='textA' id='area' cols='35' rows='5' onfocus='info4()'></textarea><div id='alert5'></div></div>
			<div id='areaLabel'>Описание</div>
		</div>
		<div id='checkBoxx'>
			<div id='isChecked'><input type="checkbox" id="checkBox" /><div id='alert9'></div></div>
			<div id='checkLabel'>Согласие на обработку данных</div>
		</div>
		<div id='buttonBox'>
			<input type='submit' name='submit' onclick='check1()'>
			<?php if($email==""){ ?>
			<button onclick="window.location.href='main.php'">back</button>
			<?php } else{?>
				<button onclick="window.location.href='main.php?login=true'">back</button>
			<?php }?>
		</div>
	</div>
</form>
	</body>
	<?php include("footer.php"); ?>
</html>