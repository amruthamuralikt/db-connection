<?php

//header('locattion:login.php');
$sname="localhost";
$uname="root";
$password="";
$db="newdb";

$conn=mysqli_connect($sname,$uname,$password,$db);
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
?>
