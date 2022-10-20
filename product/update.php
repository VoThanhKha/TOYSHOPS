<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <!-- <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<!-- Sidebar -->
    <div id="sidebar" class="active">
    <?php
 include_once("../connect.php");
 $id = $_GET['id'];
 $sqlstring = "SELECT * FROM product WHERE Product_ID = '$id' ";
 
 $result = pg_connect($conn, $sqlstring);
 $row = pg_connect($result, MYSQLI_ASSOC);
 $procate = $row['Cat_ID'];

 $sql_store = "SELECT * FROM product";
 $query_store = pg_connect($conn, $sql_store);
 
 $result = pg_connect($conn, "SELECT* FROM product WHERE Product_ID='{$id}'");
 $row = pg_connect($result);
 
 $oldpic = $row['Pro_image'];
 
 
 if (isset($_POST['Update'])) {
 
 
 
    $proid   = $_POST['product_id'];
    $shop = $_POST['Shop_name'];
    $proname = $_POST['Product_Name'];
    $price      = $_POST['Price'];
    $description      = $_POST['DetailDesc'];
    $quantity      = $_POST['Pro_qty'];
    $proimage      = $_FILES['Image'];
    $procate      = $_POST['Cat_ID'];
 
     if ($proimage['name'] == '') {
         $result = pg_connect($conn, "UPDATE product
         SET Shop_name='{$shop}',Product_Name='{$proname}',Price={$price},Pro_qty ={$quantity},Cat_ID='{$procate}',
         DetailDesc='{$description}'
         WHERE Product_ID='$id'");
         if ($result) {
             echo "Quá trình cập nhật thành công.";
             echo '<meta http-equiv="refresh" content="0;URL=?page=product_management"/>';
         } else
             echo "Có lỗi xảy ra trong quá trình cập nhật. <a href='?page=product'>Again</a>";
     } else {
         copy($proimage['tmp_name'], "./images/" . $proimage['name']);
         unlink("images/$oldpic");
         $filePic = $proimage['name'];
         $result = pg_connect($conn, "UPDATE Product 
         SET  Shop_name='{$shop}',Product_Name='{$proname}',Price={$price},Pro_qty={$quantity},Cat_ID='{$procate}',Pro_image='{$filePic}',DetailDesc='{$description}'
         WHERE Product_ID='$id'");
         if ($result) {
             echo "Quá trình cập nhật thành công.";
             echo '<meta http-equiv="refresh" content="0;URL=?page=product_management"/>';
         } else
             echo "Có lỗi xảy ra trong quá trình cập nhật. <a href='?page=product'>Again</a>";
     }
 }
 ?>

        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                    <a href="../index.php">Logo Here</a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="../product/" class='sidebar-link'>
                            
                            <span>Product</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="../order/" class='sidebar-link'>
                            
                            <span>Order</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="../account/" class='sidebar-link'>
                            
                            <span>Account</span>
                        </a>
                    </li>

                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
   
<!-- div content -->
    <div id="main">     
        <div className="page-heading pb-2 mt-4 mb-2 ">
            <h3>Manager</h3> <a href="index.php"><button type="button" class="btn btn-outline-primary">Back to index</button></a>
        </div>
        <div class="page-content mt-4">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" method="POST" action=""  enctype="multipart/form-data" role="form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Product ID</label>
                                            <input type="text" id="pid" class="form-control"
                                                name="product_id" placeholder="Product ID"
                                                value ="<?php echo $row['Product_ID'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Shop Name</label>
                                            <input type="text" id="shopnameid" class="form-control"
                                                name="Shop_name" placeholder="Shop Name"
                                                value ="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Product Name</label>
                                            <input type="text" id="pname" class="form-control"
                                                name="Product_Name" placeholder="Product Name"
                                                value ="<?php echo $row['Product_Name'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-info-vertical">Price</label>
                                            <input type="number" id="Price" class="form-control"
                                                name="Price" placeholder="Price" value ="<?php echo $row['Price'] ?>">
                                        </div>
                                    </div>
                
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Product Description</label>
                                            <input type="text" id="DetailDesc" class="form-control"
                                                name="DetailDesc" placeholder="Product Description"
                                                value ="<?php echo $row['DetailDesc'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-info-vertical">Quantity</label>
                                            <input type="number" id="Pro_qty" class="form-control"
                                                name="Pro_qty" placeholder="Quantity" value ="<?php echo $row['Pro_qty'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="image-vertical">Image</label>
                                                <input type="file" name="Image" id="imgUp" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-vertical">Cat id</label>
                                            <input type="text" id="cat_id" class="form-control"
                                                name="Cat_ID" placeholder="Cat id" value ="<?php echo $row['Cat_ID'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-warning me-1 mb-1 rounded-pill" name="Update">Submit</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1 rounded-pill">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> <!--card body-->
                
                </div> <!--card content-->
            </div> <!--card-->
        </div><!--page content-->
    </div> <!--main-->
</body>
<script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/app.js"></script>

</html>