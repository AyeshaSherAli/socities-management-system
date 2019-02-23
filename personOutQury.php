<?php
	include('includes/db.php');
		$id=$_GET['id'];//catching the premary key

	mysql_query("UPDATE c_in_reg SET stat='out' WHERE id='$id'");
	header("location: C_Out_NotReg.php");
	
?>