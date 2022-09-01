<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<style>
		#sal{
			text-align: center;
		}
	</style>

	<h2 id="sal">Welcome <?php echo $user_data['user_name']; ?> </h2>
	<br><br><br>

	
	<h1 id="sal">You Successfully Logid IN</h1>
	<br><br><br>
	<a id="sal" href="logout.php">Logout</a> 

	<br>
	<!-- Hello, <?php echo $user_data['user_name']; ?> -->
</body>
</html>