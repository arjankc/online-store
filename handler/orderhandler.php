<?php
include('../files/connect.php');
session_start();

$total=$_POST['total'];

$phone=$_POST['phone'];

$address=$_POST['address'];

$customerid=$_SESSION['customerid'];

?>