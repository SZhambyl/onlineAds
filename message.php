<html>
	<head>
		<meta http-equiv="content-type" content="text/html"; charset=utf-8>
	</head>
	<style type="text/css">
		#table1{
			margin-left: 0px;
			margin-top: 80px;
			border:1px solid black;
		}
		#table2{
			margin-left: 0px;
			margin-top: 80px;
			border:1px solid black;
		}
		.td{
			width:300px;
			border-right:1px solid black;
		}
		.td2{
			width:60px;
			border-right:1px solid #F0F0F0;
		}
		.td3{
			width:300px;
			border-right:1px solid black;
		}
		.td5{
			border-right:1px solid #F0F0F0;
		}
		.td4{
			width:250px;
		}
		.td1{
			width:250px;
		}
		.abc{
			width:1300px;
		}

	</style>
	<body style="background-color:#F0F0F0">
<?php
	include('connection.php');
	session_start();
	include('header1.php');
	$id=$_SESSION['ownerId'];
	$sql="SELECT * FROM message WHERE Friendid='".$id."'";
	$result=mysql_query($sql);
	echo "<table class='abc'><tr><td>";
	echo "<table id='table1'>";
	echo "<th>Date</th><th>Message</th><th>From</th>";
	while($row=mysql_fetch_array($result)){
		$query="SELECT * FROM registration WHERE Id='".$row['Userid']."'";
		$row3=mysql_fetch_array(mysql_query($query));
		echo "<tr class='tr'>
			<td class='td td1'>".$row['Date']."</td>
			<td class='td'>".$row['Message']."</td>
			<td class='td'>From: ".$row3['Email']."</td>
			<td class='td td2'><a href='sendMessage2.php?abc=".$id."&abcd=".$row['Userid']."'>Ответить</a></td>
		</tr>";
	}
	echo "</table></td>";

	$sql2="SELECT * FROM message WHERE Userid='".$id."'";
	$result2=mysql_query($sql2);
	echo "<td><table id='table2'>";
	echo "<th>Date</th><th>Message</th><th>To</th>";
	while($row2=mysql_fetch_array($result2)){
		$query2="SELECT * FROM registration WHERE Id='".$row2['Friendid']."'";
		$row4=mysql_fetch_array(mysql_query($query2));
		echo "<tr class='tr'>
			<td class='td3 td4'>".$row2['Date']."</td>
			<td class='td3'>".$row2['Message']."</td>
			<td class='td3 td5'>To: ".$row4['Email']."</td>
		</tr>";
	}
	echo "</table></td></tr></table>";
	include('footer.php');
?>
	</body>
</html>