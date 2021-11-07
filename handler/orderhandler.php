<?php
session_start();
include('../files/connect.php');

$total=$_POST['total'];

$phone=$_POST['phone'];

$address=$_POST['address'];
$customerid=$_SESSION['customerid'];

$sql="INSERT INTO orders(customer_id, address, phone, total) VALUES('$customerid','$address', '$phone', '$total')";
$connect->query($sql);

$sql2="SELECT id from orders orderby DESC limit 1";
$result=$connect->query($sql2);
$final=$result->fetch_assoc();
$orderid=$final['id'];

?>