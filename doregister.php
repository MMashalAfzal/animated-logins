<?php
Session_start();
 
$email=$_POST["email"];
$userpassword=$_POST["userpassword"];

$_SESSION["email"]=$email;
$_SESSION["userpassword"]=$userpassword;



header("location:login.php")

?>