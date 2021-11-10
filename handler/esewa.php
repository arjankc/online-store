
<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include ("../files/head.php");
?>

<body>
    <?php
    echo 'your total bill amount is Rs.';
    echo $_SESSION['total'];
    echo '<br>';
    ?>
    <form action="https://uat.esewa.com.np/epay/main" method="POST">
    <input value="<?php echo $_SESSION['total']?>" name="tAmt" type="hidden"> <!-- total amount -->
    <input value="<?php echo $_SESSION['total']?>" name="amt" type="hidden"> <!-- actual amount -->
    <input value="0" name="txAmt" type="hidden"> <!-- tax amount -->
    <input value="0" name="psc" type="hidden"> <!-- service charge -->
    <input value="0" name="pdc" type="hidden"> <!-- delivery charge -->
    <input value="epay_payment" name="scd" type="hidden"> <!-- merchant code using test code right now -->
    <input value="<?php echo $_SESSION['orderid']?>" name="pid" type="hidden"> <!-- unique id for the product/order -->
    <input value="http://localhost/mystore/online-store/handler/sucess.php" type="hidden" name="su"> <!-- sucess redirect -->
    <input value="http://localhost/mystore/online-store/handler/fail.php" type="hidden" name="fu"> <!-- faliure redirect -->
    <input class="btn btn-primary" type="submit" value="Pay using eSewa">
    </form>
</body>

</html>