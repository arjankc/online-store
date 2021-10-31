<?php
session_start();
if (empty($_SESSION['cart'])) {
	$_SESSION['cart']=array();
}
array_push($_SESSION['cart'], $_GET['cart_id']);



?>

<p>Sucessfully added to cart <a href="cartview.php"> click to view </a></p>