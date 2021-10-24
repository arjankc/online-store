<?php
$host="localhost";
$user="root";
$password="";
$dbname="mystore";

$connect=mysqli_connect($host,$user,$password,$dbname);

if($connect->mysqli_error){
	echo "no connection";
}else{
	echo "good to go";
}
?>