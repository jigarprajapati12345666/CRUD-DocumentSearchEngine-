<?php 
require 'dbconnection.php';

$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
//echo "$username $password";
mysqli_select_db($connect,$db_name);

if(isset($username))
{
		$sql = "INSERT INTO user (username, password)
		VALUES ('$username','$password')";

		$res = mysqli_query($connect,$sql);

		if ($res) 
		{
			session_start();
			 $_SESSION['username'] = $username;
			echo "string";
			echo "<!DOCTYPE html>
				<html>
				<head>
					<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
					 	<link href=\"https://fonts.googleapis.com/css?family=IBM+Plex+Serif\" rel=\"stylesheet\">

					<title></title>
				</head>
				<body id = \"heading\" >
					<h1> Congrates... </h1>
					<p>You have successfully registed...click <a href=\"signin.php\">here</a> to login</p>
				</body>
				</html>";
			header('Location:initial.php?username='.$username);
		}
		else
		{
				echo "<!DOCTYPE html>
			<html>
			<head>
				<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
				 	<link href=\"https://fonts.googleapis.com/css?family=IBM+Plex+Serif\" rel=\"stylesheet\">

				<title></title>
			</head>
			<body id = \"heading\" >
			<p>User Already Exist!!!</p>
			<p>Click <a href=\"signup.php\">here </a>to try again with another username...</p>
			</body>
			</html>";
		}
}

?>