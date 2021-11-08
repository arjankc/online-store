<!DOCTYPE html>
<html>
<?php
include('adminfiles/session.php');
include('adminfiles/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include('adminfiles/header.php');
  include('adminfiles/aside.php');
  

  ?>
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-3">
        </div>

        <div class="col-sm-6">
        <form role="form" action="producthandler.php" method="post" enctype="multipart/form-data">
          <h1>Products</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Price" name="price">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" name="file">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" class="form-control" rows="10" placeholder="Enter Description" name="description"></textarea>
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" name="category">
                    <?php
                    include('../files/connect.php');
                    $cat="SELECT * from categories";
                    $results=mysqli_query($connect,$cat);
                    while($row=mysqli_fetch_assoc($results)){
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                  }
                    ?>
                  </select>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
</div>
<div class="col-sm-3">
  </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include('adminfiles/footer.php');
 ?>
</body>
</html>
