<?php
session_start();

if(isset($_POST['login'])){

  include('../files/connect.php');

  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="SELECT * from customers Where username='$email'";
  $results=$connect->query($sql);
  $final=$results->fetch_assoc();

  $_SESSION['email']=$final['username'];
  $_SESSION['password']=$final['password'];
  $password_hash=$final['password'];

  $test=(password_verify($password, $password_hash));

  $_SESSION['customerid']=$final['id'];

  if($email==$final['username'] AND $test)
  {
    header('location: ../cart.php');
  } else {
    echo"<script> alert('wrong credentials!');
    window.location.href='../customerforms.php';
    </script>";
  }
  
}

?>