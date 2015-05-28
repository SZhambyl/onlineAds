<?php
	
	if (isset($_REQUEST['login']) && $_REQUEST['login']=='true'){
		$ownerid = $_SESSION['ownerId'];
		$email = $_SESSION['email'];
		$torf = 'true';
	}	
?>