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
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-3">
        </div>

        <div class="col-sm-6">
        <form role="form" action="proupdatehandler.php" method="post" enctype="multipart/form-data">
          <?php
          $newid=$_GET['up_id'];

          include('../files/connect.php');

          $sql="Select * from products WHERE id='$newid'";

          $results=$connect->query($sql);

          $final=$results->fetch_assoc();


          ?>
          <h1>Products</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Product Name" value="<?php echo $final['name'] ?>" name="name">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Price" value="<?php echo $final['price'] ?>" name="price">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" name="file" value="<?php echo $final['picture'] ?>">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" class="form-control" rows="10" placeholder="Enter Description" name="description"><?php echo $final['description'] ?></textarea>
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" name="category">
                    <?php
                    $cat="SELECT * from categories";
                    $results=mysqli_query($connect,$cat);
                    while($row=mysqli_fetch_assoc($results)){
                    $selected = ($row['id'] == $final['category_id']) ? ' selected' : '';
                    echo "<option value=\"".$row['id']."\"".$selected.">".$row['name']."</option>";
                  }
                    ?>
                  </select>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" value="<?php echo $final['id'] ?>" name="form_id">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
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
