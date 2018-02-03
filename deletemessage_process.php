<?php
	include('includes/dbconn.php');
	$customer_id = $_POST['customer_id'];
	mysql_query("DELETE FROM tbl_customer WHERE customer_id ='$customer_id'") or die(mysql_error());
?>