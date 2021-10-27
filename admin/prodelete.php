<?php
	include("../files/connect.php");

	$newid=$_GET['del_id'];

	$sql="DELETE from products WHERE id = '$newid'";

	if(mysqli_query($connect,$sql)) {
		header('location: productsshow.php');
	} else {
		echo "Not deleted";
	}

?>
