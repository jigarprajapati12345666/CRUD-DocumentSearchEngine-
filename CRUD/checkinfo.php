<?php 
require 'dbconnection.php';
session_start();
if(isset($_POST["submit"]))
{
	$username = mysqli_escape_string($connect,$_POST["username"]);
	$password = mysqli_escape_string($connect,$_POST["password"]);

//echo "$username $password";
	mysqli_select_db($connect,$db_name);
	$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$res =mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
    $count = mysqli_num_rows($res);
if ($count == 1)
{
$_SESSION['username'] = $username;
echo "<!DOCTYPE html>
	<html>
	<head>
		<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
		 	<link href=\"https://fonts.googleapis.com/css?family=IBM+Plex+Serif\" rel=\"stylesheet\">

		<title></title>
	</head>
	<body id = \"heading\" >
		<h1> Welcome...</h1>
	</body>
	</html>";
	echo "<h3>$username</h3>";
	header('Location:myinfo.php?username='.$username);
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
	<p>User not exist!!!</p>
	<p>Click <a href=\"signin.php\">here </a>to try again... OR <a href=\"signup.php\">SignUp</a></p>
	</body>
	</html>";
}
}
?>