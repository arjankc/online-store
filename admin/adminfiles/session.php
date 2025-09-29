<?php
session_start();

if(empty($_SESSION['email']) OR empty($_SESSION['password']) OR empty($_SESSION['admin_authenticated'])){
	header('location: adminlogin.php');
}
?>