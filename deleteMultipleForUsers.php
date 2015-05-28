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
	header("Location:userPage.php?login=true");
?>