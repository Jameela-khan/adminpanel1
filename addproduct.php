<?php
include "config.php";
include "header.php";
include "sidebar.php";


if(isset($_POST['submit'])){
  $p_name = $_POST['p_name'];
  $p_price = $_POST['p_price'];
  $p_quantity = $_POST['p_quantity'];
  $p_description = $_POST['p_description'];
  $p_image=$_FILES['p_image']['name'];
	$img_fld="uploads/".$p_image;
	$img_fld2="uploads/".$p_image;
	move_uploaded_file($_FILES['p_image']['tmp_name'],$img_fld2);
  $p_status = $_POST['p_status'];

  $sql = "INSERT INTO `products`(`p_name`, `p_price`, `p_quantity`, `p_description`, `p_image`, `p_status`) VALUES ('$p_name','$p_price','$p_quantity','$p_description','$img_fld','$p_status')";
  $query = mysqli_query($con, $sql);
}
?>


     
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="product.php">View Products</a> </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="p_name" class="form-control" id="exampleInputEmail1" placeholder="Product name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" name="p_price" class="form-control" id="exampleInputPassword1" placeholder="Price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quantity</label>
                    <input type="text" name="p_quantity" class="form-control" id="exampleInputPassword1" placeholder="Quantity">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="p_description" class="form-control" id="exampleInputPassword1" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Product Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="p_image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <input type="text" name="p_status" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
         
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

     

          <?php 
include "footer.php";

?>