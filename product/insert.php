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
    if (isset($_POST['Insert'])) {

        include_once('../connect.php');

        $proid   = $_POST['product_id'];
        $shop = $_POST['shop_name'];
        $proname = $_POST['proname'];
        $price      = $_POST['price'];
        $description      = $_POST['descript'];
        $quantity      = $_POST['quantity'];
        $proimage      = $_FILES['image'];
        $procate      = $_POST['cat_id'];

        copy($proimage['tmp_name'], "../img/" . $proimage['name']);
        $filePic = $proimage['name'];
        
        // $result = pg_query($conn, "INSERT INTO `public.product` (`product_id`, `proname`, `price`, `quantity` ,`image`,`shop_name`, `descript`, `cat_id`) 
        // VALUES ('{$proid}','{$proname}', '{$price}', '{$quantity}', '{$filePic}', '{$shop}','{$description}', '{$procate}')");
        $sql = "INSERT INTO public.product(
            product_id, proname, price, quantity, image, shop_name, descript, cat_id)
            VALUES ('$proid','$proname','$price','$quantity','$proimage', '$shop','$description','$procate')";

        if (pg_query($conn, $sql)) {
            // echo "Product insert Succfully";
            echo "<script>
                       window.location = 'product/index.php?status=insert';
            </script>";
            
        } else
            echo "Errol! Let's try. <a href='?page=add_product'>Again</a>";
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
                        <form class="form form-vertical" method="POST" action="#" enctype="multipart/form-data" role="form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Product ID</label>
                                            <input type="text" id="product_id" class="form-control"
                                                name="product_id" placeholder="Product ID"
                                                value ="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Store name</label>
                                            <input type="text" id="shop_name" class="form-control"
                                                name="shop_name" placeholder="Shop Name"
                                                value ="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Product Name</label>
                                            <input type="text" id="proname" class="form-control"
                                                name="proname" placeholder="Product Name"
                                                value ="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-info-vertical">Price</label>
                                            <input type="number" id="price" class="form-control"
                                                name="price" placeholder="Price" value ="">
                                        </div>
                                    </div>
                                   
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Product Description</label>
                                            <input type="text" id="descript" class="form-control"
                                                name="descript" placeholder="Product Description"
                                                value ="">
                                        </div>
                                    </div> 
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-info-vertical">Quantity</label>
                                            <input type="number" id="quantity" class="form-control"
                                                name="quantity" placeholder="Quantity" value ="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="image-vertical">Image</label>
                                            <input type="file" name="image" id="image" class="form-control" value="" >
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-vertical">Cat id</label>
                                            <input type="text" id="cat_id" class="form-control"
                                                name="cat_id" placeholder="Cat id" value ="">
                                        </div>
                                    </div>
                                  
                                    <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-warning me-1 mb-1 rounded-pill" name="Insert">Submit</button>
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