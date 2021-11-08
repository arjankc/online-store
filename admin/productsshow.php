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
              <a href="products.php">
              <button style="color:green;">Add new</button>
            </a>
              <?php

              include ('../files/connect.php');

              $sql="SELECT * from products";
              $results=$connect->query($sql);
              while($final=$results->fetch_assoc()){ ?>
                <a href="proshow.php?pro_id=<?php echo $final['id']?>">
                <h3> <?php echo $final['id'] ?> : <?php echo $final['name'] ?> </h3><br>
                </a>

                <a href="proupdate.php?up_id=<?php echo $final['id'] ?>">
                  <button>Update</button>
                </a>    

                <a href="prodelete.php?del_id=<?php echo $final['id'] ?>">
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