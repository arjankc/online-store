<?php
if (isset($_SESSION['cart'])) {
	$count=count($_SESSION['cart']); //counting number of items in the cart
	$_SESSION['cart'][$count]=$array('item_id'=>$_GET['cart_id']); //
} else {
	$_SESSION['cart'][0]=array('item_id'=>$_GET['cart_id']);
}


?>