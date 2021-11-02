<?php
include('../files/connect.php');
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];
if ($password==$password2) {
	echo "correct";
}







?>