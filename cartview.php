<?php
session_start();
foreach ($_SESSION['cart'] as $value) {
	echo '<pre>';
	echo $value;
	echo '<pre>';
}

// if you want to clear the cart then you will need to destroy the session using session_destroy();

?>