<?php
	include("connection.php");
	if(isset($_POST['delete']))
	{
	 $cnt=array();
	 $cnt=count($_POST['checkbox']);
	 for($i=0;$i<$cnt;$i++)
	  {
	    $del_id=$_POST['checkbox'][$i];
	    mysql_query("DELETE FROM good WHERE Id = '".$del_id."'");
	  }
	}

	if(isset($_POST['agree'])){
		$checked = array();
		$checked = count($_POST['checkbox']);
		for ($i = 0; $i<$checked; $i++){
			$agree_id = $_POST['checkbox'][$i];
			mysql_query("UPDATE good SET Torf = 'true' WHERE Id = '".$agree_id."'");
		}
	}

	if(isset($_POST['disagree'])){
		$checked = array();
		$checked = count($_POST['checkbox']);
		for ($i = 0; $i<$checked; $i++){
			$agree_id = $_POST['checkbox'][$i];
			mysql_query("UPDATE good SET Torf = 'false' WHERE Id = '".$agree_id."'");
		}
	}
	header("Location:admin.php");
?>