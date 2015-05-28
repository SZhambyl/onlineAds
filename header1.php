<html>
<meta http-equiv="content-type" content="text/html"; charset=utf-8>
<link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
<div id='header'>
	<span class='header1'>
		<?php if (isset($_REQUEST['login']) && $_REQUEST['login']=='true'){ ?>
			<a href='http://localhost/xampp/onlineShop/main.php?login=true' class='header1'>Mix.kz</a>
		<?php }else{ ?><a href='http://localhost/xampp/onlineShop/main.php' class='header1'>Mix.kz</a>
		<?php }?>
	</span>
	<span class='header1'>|</span>
	<span class='header1'><a href='http://krisha.kz/' class='header1'>Крыша</a></span>
	<span class='header1'>|</span>
	<span class='header1'><a href='http://kolesa.kz/' class='header1'>Колеса</a></span>
	<span class='header1' id='right'>
			<?php 
			if (isset($_REQUEST['login']) && $_REQUEST['login']=='true'){
				?>
			<a href='addGood.php?login=true' class='forHeader'>+ Подать объявление</a>
			<?php }else{ ?><a href='addGood.php' class='forHeader'>+ Подать объявление</a> <?php }?>
	</span>
	
		<?php if (isset($_REQUEST['login']) && $_REQUEST['login']=='true'){ ?> 
		<span class='header1'>
				<ul class='navigation'>
					<li><?php echo $_SESSION['email'];?>
						<ul>
							<li><a href='userPage.php?login=true'>Объявления</a></li>
							<li><a href='message.php?login=true'>Сообщение</a></li>
							<li><a href='logout.php'>Выйти</a></li>
						</ul>
					</li>
				</ul>
				</span>
			<?php } else{ ?>
			<span class='header1' id='right2'>
				<a href='mainC.php' class='forHeader'>My profile</a>
			</span>
			<?php }?>
	
</div>
</html>