<?php

require 'dbconnection.php';
session_start();
$username = $_SESSION['username'];
$file = $_GET['file'];
$id = $_GET['id'];
mysqli_select_db($connect,$db_name);
if (!unlink("uploads/".$file))
{
	echo ("Error deleting $file");
}
else
{
	$sql = "DELETE FROM fileinfo WHERE originalfilename = '$file'";
	$res = mysqli_query($connect,$sql);
	header("Location:myinfo.php?username=$username");
}
?>