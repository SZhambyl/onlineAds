<html>
	<head>
		<meta http-equiv="content-type" content="text/html"; charset=utf-8>
	</head>
	<?php
		session_start();
		include('header1.php');
		$myId=$_SESSION['ownerId'];
		$id = $_REQUEST['userId'];
	?>
	<style type="text/css">
		#textArea{
			width: 400px;
			height: 100px;
			border-color: black;
		}
		#send{
			margin-left: 390px;
			margin-top: 200px
		}
		#button{
			margin-left: 320px;
		}
	</style>
	<body style="background-color:#B8B8B8">
		<?php echo "<form method='post' action='send.php?abc=".$myId."&abcd=".$id."'>"; ?>
			<div id='send'>
				<div><textarea name='textArea' id='textArea'></textarea></div>
				<div id='button'><input type='submit'/></div>
			</div>
		</form>
	</body>
	<?php include('footer.php');?>
</html>