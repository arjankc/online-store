<!DOCTYPE html>
<html>
  <?php
  include('adminfiles/session.php');
    include('adminfiles/head.php')
    ?>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include('adminfiles/header.php')
        ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php
        include('adminfiles/aside.php');
        ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-9">

              <?php

              include ('../files/connect.php');

              $id=$_GET['pro_id'];
              $sql="SELECT * from products WHERE id='$id'";
              $results=$connect->query($sql);

              $final=$results->fetch_assoc();
              ?>

              <h3> Name: <?php echo $final ['name']?></h3><hr><br>
              
              <h3> Price: <?php echo $final ['price']?></h3><hr><br>

              <h3> Description: <?php echo $final ['description']?></h3><hr><br>

              <img src="../<?php echo $final['picture']?>" alt="No file" style="height:300px; width:300px">


              
            </div>
            
        <div class="col-sm-3">
        </div>
      </div>
      <!-- /.content-wrapper -->
    </div>
    <?php
      include('adminfiles/footer.php');
      ?>
  </body>
</html>