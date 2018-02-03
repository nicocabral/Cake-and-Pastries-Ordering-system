<?php session_start();
include('includes/dbconn.php');
if(isset($_POST['delete'])){
	$id = $_POST['id'];
	$query = mysql_query("DELETE from tblcnp WHERE id = '$id'") or die (mysql_error());
	header("location:update_cnp.php");
	
	}?>