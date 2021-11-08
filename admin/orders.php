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
             
        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-sm-9">
              <?php

              include ('../files/connect.php');

              $sql="SELECT * from orders";
              $results=$connect->query($sql);
              while($final=$results->fetch_assoc()){ ?>
                <a href="ordershow.php?pro_id=<?php echo $final['id']?>">
                <h3> <?php echo $final['id'] ?> : <?php echo $final['phone'] ?> <br> Total: <?php echo $final['total'] ?></h3><br>
                </a>

                <a href="orderdelete.php?del_id=<?php echo $final['id'] ?>">
                  <button style="color:red">Delete</button>
                </a> <hr>

              <?php }

              ?>


              
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