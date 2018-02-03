<?php
session_start();

include('includes/dbconn.php');

	$myuser = mysql_real_escape_string($_POST['username']);
	$mypass = mysql_real_escape_string($_POST['password']);
		
		$result = mysql_query("SELECT * FROM admininfo where username = '$myuser' AND password='$mypass'");
			if (mysql_num_rows($result)>0){
				 while ($row = mysql_fetch_assoc($result))
					 {
						$_SESSION['proprietor_id'] = $row['id'];
						$_SESSION['proprietor_name'] = $row['name'];
						$_SESSION['address'] = $row['address'];
						$_SESSION['phone'] = $row['contact'];
						$_SESSION['username'] = $row['username']; //get username
						$_SESSION['password'] = $row['password']; //get password
					 }
					 header("location:index.php");
			}else{
				
			echo '<script>
					window.alert("Your not registered user!")
					window.location.href="index.php";
				</script>';
			}
		mysql_close($con);
?>