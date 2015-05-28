<html>
<meta http-equiv="content-type" content="text/html"; charset=utf-8>
<link rel="stylesheet" type="text/css" href="style.css"/>
<body style="background-color:#B8B8B8">
<?php
	session_start();
	include('header1.php');
?>
<div id='table'>
	<div>Успешно завершен</div>
	<table>
			<tr>
				<?php if (isset($_REQUEST['login']) && $_REQUEST['login']=='true'){ ?>
					<td><button onclick="window.location.href='addGood.php?login=true'">Add more</button></td>
					<td><button onclick="window.location.href='main.php?login=true'">Main page</button></td>
				<?php }else{ ?>
					<td><button onclick="window.location.href='addGood.php'">Add more</button></td>
					<td><button onclick="window.location.href='main.php'">Main page</button></td>
				<?php } ?>
			</tr>
	</table>
</div>
</body>
</html>