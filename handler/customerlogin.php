<?php
session_start();

if(isset($_POST['login'])){

  include('../files/connect.php');

  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="SELECT * from customers Where username='$email' AND password='$password'";
  $results=$connect->query($sql);
  $final=$results->fetch_assoc();

  $_SESSION['email']=$final['username'];
  $_SESSION['password']=$final['password'];

  if($email=$final['username'] AND $password=$final['password']){
    header('location: ../cart.php');
  } else {
    
  }
  
}

?>