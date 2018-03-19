<?php 
require 'dbconnection.php';
session_start();
if(!isset($_SESSION['username']))
{
    header("Location:signup.php");
}
$username = $_GET['username']; 
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
 	<title>Upload</title>
 </head>
 <body id="heading">
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">DocumentSearchEngine</a>
    </div>
    <ul class="nav navbar-nav">
      <li><?php echo "<a href=\"myinfo.php?username=$username\" style=\"font-family: 'IBM Plex Serif', serif;\" class=\"glyphicon glyphicon-user\" class=\"active\">Home($username)</a>";?></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><?php echo "<a href=\"initial.php?username=$username\" style=\"font-family: 'IBM Plex Serif', serif;\" class=\"glyphicon glyphicon-user\">Search</a>";?></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>
 	<h1 id="heading" style="padding-top: 50px">Upload</h1>
  <form method="post" action=<?php echo "upload.php?username=$username";?> enctype="multipart/form-data" id="form">
  <div><p id="p1">Filename: <input type="text" name="username" required="" id="username"><br><br><br></p>
<p id= "p2"> FileType:
  <select  id ="p1" name="type">
  <option value="pdf">Pdf</option>
  <option value="text">Text</option>
  <option value="ppt">Ppt</option>
  <option value="image">Image</option>
</select></p><br><br>
  <p id="p1"><input type="file" name="fileToUpload" required="" id="file"><br><br><br></p><br>
  <button type="submit" class="btn btn-primary btn-md" name="submit">Upload</button></div>
 </form>
 </body>
 </html>
