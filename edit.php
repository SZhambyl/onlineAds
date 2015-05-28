<?php
include('connection.php');
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$price=$_REQUEST['price'];
$textA=$_REQUEST['textA'];
$phoneNumber=$_POST['phoneNumber'];
$category = $_POST['selected'];
$city = $_POST['city'];

if(isset($_POST['submit']) && $category!=''){
mysql_query("UPDATE good SET Category='".$category."' WHERE Id='$id'");
}

if(isset($_POST['submit']) && $city!=''){
mysql_query("UPDATE good SET City='".$city."' WHERE Id='$id'");
}

if($name!=""){mysql_query("UPDATE good SET NameG='".$name."' WHERE Id='$id'");}
if($price!=""){mysql_query("UPDATE good SET Price='".$price."' WHERE Id='$id'");}
if($textA!=""){mysql_query("UPDATE good SET Comment='".$textA."' WHERE Id='$id'");}
if($phoneNumber!=""){mysql_query("UPDATE good SET Phone='".$phoneNumber."' WHERE Id='$id'");}

if($_FILES["photo1"]["name"]!=""){
	$path1="";
	$torf = false;
	if (($_FILES["photo1"]["type"] == "image/gif") || ($_FILES["photo1"]["type"] == "image/jpeg") || ($_FILES["photo1"]["type"] == "image/jpg")) {
		move_uploaded_file($_FILES["photo1"]["tmp_name"],"img/".$_FILES["photo1"]["name"]);
		$path1 = "img/" . $_FILES["photo1"]["name"]; 
		$torf = true;
	}
	else {
		$torf = false;
		echo "Invalid file";
	}
	if($torf=true){mysql_query("UPDATE good SET Photo1='".$path1."' WHERE Id='$id'");}
}

if($_FILES["photo2"]["name"]!=""){
	$path2="";
	$torf = false;
	if (($_FILES["photo2"]["type"] == "image/gif") || ($_FILES["photo2"]["type"] == "image/jpeg") || ($_FILES["photo2"]["type"] == "image/jpg")) {
		move_uploaded_file($_FILES["photo2"]["tmp_name"],"img/" . $_FILES["photo2"]["name"]);
		$path2 = "img/" . $_FILES["photo2"]["name"];
		$torf = true; 
	}
	else {
		$torf = false;
		echo "Invalid file";
	}
	if($torf=true){mysql_query("UPDATE good SET Photo2='".$path2."' WHERE Id='$id'");}
}

if($_FILES["photo3"]["name"]!=""){
	$path3="";
	$torf = false;
	if (($_FILES["photo3"]["type"] == "image/gif") || ($_FILES["photo3"]["type"] == "image/jpeg") || ($_FILES["photo3"]["type"] == "image/jpg")) {
		move_uploaded_file($_FILES["photo3"]["tmp_name"],"img/" . $_FILES["photo3"]["name"]);
		$path3 = "img/" . $_FILES["photo3"]["name"]; 
		$torf = true;
	}
	else {
		$torf = false;
		echo "Invalid file";
	}
	if($torf=true){mysql_query("UPDATE good SET Photo3='".$path3."' WHERE Id='$id'");}
}

if($_FILES["photo4"]["name"]!=""){
	$path4="";
	$torf = false;
	if (($_FILES["photo4"]["type"] == "image/gif") || ($_FILES["photo4"]["type"] == "image/jpeg") || ($_FILES["photo4"]["type"] == "image/jpg")) {
		move_uploaded_file($_FILES["photo4"]["tmp_name"],"img/" . $_FILES["photo4"]["name"]);
		$path4 = "img/" . $_FILES["photo4"]["name"]; 
		$torf = true;
	}
	else {
		$torf = false;
		echo "Invalid file";
	}
	if($torf=true){mysql_query("UPDATE good SET Photo4='".$path4."' WHERE Id='$id'");}
}
header("Location:userPage.php");
?>