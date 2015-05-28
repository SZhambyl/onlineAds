<?php
include("connection.php");
$name = $_POST['ngood'];
$price = $_POST['price'];
$phone = $_POST['phone'];
$comment = $_POST['textA'];
$userName = $_POST['userName'];
$email = $_POST['login'];
$a = $_POST['hidden'];
$ownerid = '';
$torf = '';

if(mysql_num_rows(mysql_query("SELECT * FROM registration WHERE Email='".$email."'"))==1){$row = mysql_fetch_array(mysql_query("SELECT * FROM registration WHERE Email='".$email."'")); $ownerid = $row['Id']; $torf = 'true';}
else $ownerid = '0';
$path1 = "";
$path2 = "";
$path3 = "";
$path4 = "";
$torf = true;

if(isset($_POST['submit'])){
$selected_val = $_POST['selected'];
}

if(isset($_POST['submit'])){
$selected_city = $_POST['city'];
}

if (($_FILES["photo1"]["type"] == "image/gif") || ($_FILES["photo1"]["type"] == "image/jpeg") || ($_FILES["photo1"]["type"] == "image/jpg")) {
	if ($_FILES["photo1"]["error"] > 0) {
		echo "Return Code: " . $_FILES["photo1"]["error"] . "<br />";
	}
	else {
		if (file_exists("img/" . $_FILES["photo1"]["name"])) {
			echo $_FILES["photo1"]["name"] . " already exists. ";
		}
		else {
			move_uploaded_file($_FILES["photo1"]["tmp_name"],"img/" . $_FILES["photo1"]["name"]);
			echo "Stored in: " . "img/" . $_FILES["photo1"]["name"];
		}
	}
	$torf = true;
	$path1 = "img/" . $_FILES["photo1"]["name"]; 
}
else if($_FILES["photo1"]["name"]==""){}
else {
	$torf = false;
	echo "Invalid file";
}

echo "</br>"."</br>";


if ((($_FILES["photo2"]["type"] == "image/gif") || ($_FILES["photo2"]["type"] == "image/jpeg") || ($_FILES["photo2"]["type"] == "image/jpg"))) {
	if ($_FILES["photo2"]["error"] > 0) {
		echo "Return Code: " . $_FILES["photo2"]["error"] . "<br />";
	}
	else {
		if (file_exists("img/" . $_FILES["photo2"]["name"])) {
		}
		else {
			move_uploaded_file($_FILES["photo2"]["tmp_name"],"img/" . $_FILES["photo2"]["name"]);
		} 
	}
	$torf = true;
	$path2 = "img/" . $_FILES["photo2"]["name"];
}
else if($_FILES["photo2"]["name"]==""){}
else {
	$torf = false;
	echo "Invalid file";
}

echo "</br>"."</br>";


if ((($_FILES["photo3"]["type"] == "image/gif") || ($_FILES["photo3"]["type"] == "image/jpeg") || ($_FILES["photo3"]["type"] == "image/jpg"))) {
	if ($_FILES["photo3"]["error"] > 0) {
		echo "Return Code: " . $_FILES["photo3"]["error"] . "<br />";
	}
	else {
		if (file_exists("img/" . $_FILES["photo3"]["name"])) {
			echo $_FILES["photo3"]["name"] . " already exists. ";
		}
		else {
			move_uploaded_file($_FILES["photo3"]["tmp_name"],"img/" . $_FILES["photo3"]["name"]);
			echo "Stored in: " . "img/" . $_FILES["photo3"]["name"];
		} 
	}
	$torf = true;
	$path3 = "img/" . $_FILES["photo3"]["name"];
}
else if($_FILES["photo3"]["name"]==""){} 
else {
	$torf = false;
	echo "Invalid file";
}


echo "</br>"."</br>";

if ((($_FILES["photo4"]["type"] == "image/gif") || ($_FILES["photo4"]["type"] == "image/jpeg") || ($_FILES["photo4"]["type"] == "image/jpg"))) {
	if ($_FILES["photo4"]["error"] > 0) {
		echo "Return Code: " . $_FILES["photo4"]["error"] . "<br />";
	}
	else {
		if (file_exists("img/" . $_FILES["photo4"]["name"])) {
			echo $_FILES["photo4"]["name"] . " already exists. ";
		}
		else {
			move_uploaded_file($_FILES["photo4"]["tmp_name"],"img/" . $_FILES["photo4"]["name"]);
			echo "Stored in: " . "img/" . $_FILES["photo4"]["name"];
		} 
	}
	$torf = true;
$path4 = "img/" . $_FILES["photo4"]["name"];
}
else if($_FILES["photo4"]["name"]==""){}
else {
	$torf = false;
	echo "Invalid file";
}

if($torf){
if (mysql_query("INSERT INTO good VALUES (null,'$name','$userName','$email','$path1','$path2','$path3','$path4','$selected_city','$price','$phone','$comment','$ownerid','false','$selected_val',null)")){
	header("Location:addGood.php?login=$a&add=true");
}
}
?>