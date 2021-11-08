<!DOCTYPE html>
<html>
  <?php
    include('adminfiles/session.php');
    include('adminfiles/head.php');
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
                <button style="color: green;">Add products</button>
                </a>
                <hr>
              </div>
            <div class="col-sm-9">
            <a href="categories.php">
                <button style="color: green;">Add categories</button>
                </a>
                <hr>
            </div>
            <div class="col-sm-9">
            <a href="orders.php">
                <button style="color: green;">View Orders</button>
                </a>
                <hr>
              </div>
          </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    </div>
    <?php
      include('adminfiles/footer.php');
      ?>
  </body>
</html>