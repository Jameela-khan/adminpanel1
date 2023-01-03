<?php
include "config.php";
include "header.php";
include "sidebar.php";
?>
     
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="addproduct.php"> Add product</a></li>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Products</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>quantity</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Access</th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
include "config.php";
$sql = "SELECT * FROM `products`";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($query))

{

?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['p_name']; ?></td>
                      <td><?php echo $row['p_price']; ?></td>
                      <td><?php echo $row['p_quantity']; ?></td>
                      <td><?php echo $row['p_description']; ?></td>
                      <td>  <img src="<?php echo $row['p_image']; ?>" height="100px" width="100px" alt=""></td>
                      <td><?php echo $row['p_status']; ?></td>
                      <td>
                        <a href="editproduct.php?id=<?php echo $row['id'];?>">Edit</a>
                        <a href="deleteproduct.php?id=<?php echo $row['id'];?>">Delete</a>
                      </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

  </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

     

          <?php 
include "footer.php";

?>