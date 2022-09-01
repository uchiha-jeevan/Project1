<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
</head>
<body>
	<h2 id="pop"> Welcome to signup page</h2>
	<style type="text/css">
	body{
		background-color:wheat;
	}

	#pop{
		text-align: center;
	}
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color:white;
		background-color:chocolate;
		border: none;
	}

	#box{

		background-color:antiquewhite;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
	#con{
		top: 98%;
		text-align: right;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color:black;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="create user name"><br><br>
			<input id="text" type="password" name="password" placeholder="entre password"><br><br>
			<input type="checkbox" name="" id="">i agree to the terms and conditions<br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div><br><br><br><br><br><br><br><br><br><br>
	<a href="www.youtube.com"><h6 id="con">Contact developer</h6></a>
</body>
</html>