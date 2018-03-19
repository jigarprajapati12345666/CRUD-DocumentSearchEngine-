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
  <title>info</title>
</head>
<body id="heading">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DocumentSearchEngine</a>
    </div>
    <ul class="nav navbar-nav">
<li><?php echo "<a href=\"myinfo.php?username=$username\" style=\"font-family: 'IBM Plex Serif', serif;\" class=\"glyphicon glyphicon-user\" class=\"active\">Home($username)</a>";?></li>      <li class="active"><a href="others.php">More Docs</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <li><?php echo "<a href=\"uploadhtml.php?username=$username\" style=\"font-family: 'IBM Plex Serif', serif;\" class=\"glyphicon glyphicon-user\">Upload</a>";?></li>
      <li><?php echo "<a href=\"initial.php?username=$username\" style=\"font-family: 'IBM Plex Serif', serif;\" class=\"glyphicon glyphicon-user\">Search</a>";?></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
    </ul>
  </div>
</nav>
<br>
<h3>Uploaded Documents</h3>
<br>
      <table class="table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>Sr.No</th>
        <th id="t">File</th>
        <th>Type</th>
        <th>Download</th>
        <th>Delete</th>
        <th>Read</th>
      </tr>
    </thead>
  </table>
</div>

</body>
</html>

<?php 
mysqli_select_db($connect,$db_name);
$sql = "SELECT * FROM fileinfo WHERE user = '$username'";
$res = mysqli_query($connect,$sql);
$i=0;
while($count = mysqli_fetch_array($res))
{
  $id = $count['id'];
  $file = $count['originalfilename'];
  $type = $count['type'];
  //echo "$file";
  $i++;
  echo "<!DOCTYPE html>
  <html>
  <head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
  <link href=\"https://fonts.googleapis.com/css?family=IBM+Plex+Serif\" rel=\"stylesheet\">
    <title></title>
  </head>
  <body>
  <table class=\"table-bordered\">
  <tbody>
      <tr>
        <td>$i</td>
        <td id = \"t\">$file</td>
        <td>$type</td>
        <td><a href=\"download.php?file=$file\">download</a></td>
        <td><a href=\"delete.php?file=$file&id=$id\">delete</a></td>
        <td><a href=\"read.php?file=$file&type=$type\">read</a></td>
      </tr>
    </tbody>
    </table>
  </body>
  </html>";
}
?>
