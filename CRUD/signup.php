<?php 

require 'dbconnection.php';

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif" rel="stylesheet">
 	<script type="text/javascript" src="passvalidate.js"></script>
 	<title>SignUp</title>
 </head>
 <body id="heading">
 	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">DocumentSearchEngine</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
 	<h1 id="heading" style="padding-top: 50px">Sign Up</h1>
 <form action="userInfo.php" method="post" id="form" onsubmit="return check()">
 	<div><p id="p1">Username: <input type="text" name="username" required="" id="username"><br><br><br></p>
 	<p id="p1">Password: <input type="password" name="password" required="" id="password"><br><br><br></p>
 	<p id="p1">Retype-Password:<input type="password" name="cpassword" id="cpassword" required=""></p><br><br>
 	<p style="color: red" id="p11"></p>
 	<button type="submit" class="btn btn-primary btn-md">SignUp</button></div>
 </form>
 </body>
 </html>
