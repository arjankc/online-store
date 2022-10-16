<?php
include('../files/connect.php');
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];

//checking if email exists
$sql = "SELECT username FROM customers WHERE username = '$email'";
$result = $connect->query($sql);

if($result->num_rows > 0) {
	echo "<script> alert('email has already been taken');
	window.location.href='../customerforms.php';
	</script>";
       } else {

//encrypting the passwords
$password_hash=password_hash($password, PASSWORD_BCRYPT);
$password2_hash=password_hash($password2, PASSWORD_BCRYPT);

if ((password_verify($password, $password2_hash)) && (password_verify($password2, $password_hash))) 
{
	$sql="INSERT INTO customers(username, password) VALUES('$email','$password_hash')";
	$connect->query($sql);
	echo "<script> alert('Registration successful');
	window.location.href='../customerforms.php';
	</script>";
} else {
	echo "<script> alert('Password did not match');
	window.location.href='../customerforms.php';
	</script>";
} }

?>