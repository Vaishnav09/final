<?php

$submit=$_POST['submit'];
$fullname=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$date=date("Y-m-d");

// include('encrypt.php');

session_start();


$connect=mysqli_connect("localhost", "root", "","phplogin")or die("couldn't find server");

$write=mysqli_query($connect,"INSERT INTO login1 (username,password)VALUES('$username','$password')")or die("sql error");	
header("location:index2.php");

?>