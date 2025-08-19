<?php
session_start();

include('adminfiles/head.php');

if (isset($_POST['login'])) {
    include('../files/connect.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Run query to check login
    $stmt = $connect->prepare("SELECT * FROM admin WHERE email=? AND password=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $final = $result->fetch_assoc();

        $_SESSION['email'] = $final['email'];
        $_SESSION['password'] = $final['password'];

        header('Location: index.php');
        exit;
    } else {
        echo "<p style='color:red; text-align:center;'>❌ Wrong Email or Password</p>";
    }
}
?>

<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" style="padding-top: 150px;">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Admin Login</h3>
            </div>
            <form class="form-horizontal" action="adminlogin.php" method="POST">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" name="login">Log in</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>
