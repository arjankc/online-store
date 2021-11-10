<?php
session_start();
session_destroy();
echo"<script> alert('Payment sucessful');
    window.location.href='../index.php';
    </script>";
?>
