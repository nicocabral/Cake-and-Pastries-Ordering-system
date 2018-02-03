<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'dbcnp'; 
/* End config */

$con = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

@mysql_select_db($db_database,$con);
//mysql_query("SET names UTF8");//
?>


