<?php 
require 'dbconnection.php';
session_start();
if(!isset($_SESSION['username']))
{
    header("Location:signup.php");
}
$username = $_GET['username'];
$originalfilename = $_FILES['fileToUpload']['name']; 
$target_path = "uploads/";  
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
$filetype = $_POST['type'];
$f = 0;
if($filetype == "pdf" && preg_match("/.pdf/", $target_path))
{
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
        $f = 1; 
}
}

else if($filetype == "text" && preg_match("/.txt/", $target_path))
{
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
   $f=1;
}
}
else if($filetype == "ppt" && preg_match("/.ppt/", $target_path))
{
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    $f=1;
}
}
else if($filetype == "image" && preg_match("/.jpg|.jpeg|.png/", $target_path))
{
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    $f=1;  
}
}

if ($f==1) {
    mysqli_select_db($connect,$db_name);
    $filename = md5(mt_rand(1,100000));
   $sql = "INSERT INTO fileinfo (user,filename,originalfilename,type) VALUES ('$username','$filename','$originalfilename','$filetype')";
   $res = mysqli_query($connect,$sql);
   if(!$res)
   {
        echo "string";
   }
  header('Location:uploadhtml.php?username='.$username);
    /* echo "<!DOCTYPE html>
    <html>
    <head>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
            <link href=\"https://fonts.googleapis.com/css?family=IBM+Plex+Serif\" rel=\"stylesheet\">

        <title></title>
    </head>
    <body id = \"heading\" >
    <p>File uploaded successfully!!!</p>
    <p>Click <a href=\"uploadhtml.php?username=$username\">here </a>to Other Upload again...</p>
    </body>
    </html>";*/
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
    <p>The File Type is Not $filetype</p>
    <p>Click <a href=\"uploadhtml.php?username=$username\">here </a>to try again...</p>
    </body>
    </html>";
}
?>  