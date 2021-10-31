<?php
session_start();
if (isset($_POST['remove'])) {
	foreach($_SESSION['cart'] as $key => $value) {
		print_r($key);

	}
}






?>