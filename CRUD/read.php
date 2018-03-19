<?php 
session_start();
$file = $_GET['file'];
$type = $_GET['type'];
if($type == "pdf" || $type == "ppt")
{
	echo "<embed src=\"uploads/$file\" width=\"100%\" height=\"100%\"/>";
}
else if($type == "text")
{
	echo readfile("uploads/".$file);
}
else if ($type == "image") 
{
	echo "<img src=\"uploads/$file\">";
}
$username = $_SESSION['username'];
echo "<a href=\"myinfo.php?username=$username\"><span style=\"text-align:center\">BACK</span></a>";
?>

