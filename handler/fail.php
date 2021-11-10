<?php
session_start();
session_destroy();
echo"<script> alert('Payment failed, cash on delivery selected');
    window.location.href='../index.php';
    </script>";
?>
