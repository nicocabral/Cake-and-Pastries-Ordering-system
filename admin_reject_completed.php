<?php
    include('includes/dbconn.php');
   $id = $_GET['id'];
   $sql = mysql_query("DELETE FROM tblorders where id = '$id'") or die (mysql_error());
   header("location:index.php");
?>