<html>
<meta http-equiv="content-type" content="text/html"; charset=utf-8>
<link rel="stylesheet" type="text/css" href="main.css"/>
			<?php	
			session_start();
			include('header1.php');
			?>
	<div class='logIn'>
		<?php if (isset($_REQUEST['login']) && $_REQUEST['login']=='false'){?>
				<div id='incorrect'>Your login or password are inncorrect</div>
		<?php }?>
	 	<form onsubmit="return check2()" method='post' action='check.php' enctype='application/x-www-form-urlencoded'>
				<table>
					<tr>
						<td>Логин</td>
						<td><input type='text' name='login' id='email'/></td>
					</tr>
					<tr>
						<td>Пароль</td>
						<td><input type='password' name='password' id='password'/></td>
					</tr>
					<tr>
						<td><input type='submit' value='Войти' /></td>
					</tr>
					<tr>
						<td><a href='registrationForm.php'>Регистрация</a>&nbsp</td><td>&nbsp&nbsp<a href='changePasswordPage.php'>Забыли пароль?</a></td>
					</tr>
				</table>
		</form>
			
		</div>
			<?php
	include('footer.php');
?>
</html>