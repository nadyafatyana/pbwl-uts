<?php
error_reporting(0);
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "nadya" && $password == "manis"){
	$_SESSION['username'] = $username;
    header("Location:index.php");
}
else{
	header("Location:login.php");
	("Username atau Password anda Salah !");
}

?>