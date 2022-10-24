<?php
include_once("header.php");
?>
<div class="container mt-3">
<style>
        body {
            color:orangered;
        }
        h2 {
            color:deeppink;
        }
        p {
            color: rgb(0,0,255)
        }
</style>
  <h2>OUR PRODUCTS</h2>
  <html>
   <head>
      <title>Thẻ IMG</title>
   </head>
   <body> 
      <img src="flower.jpg" height="150px" width="150px" alt="" />
      <!-- hoặc -->
      <img src="flower.jpg" height="50%" width="50%" alt="" />
   </body>
</html>
  <div class="row">
    <?php
    include_once("connect.php");
    $sql = "select * from product";
    $re = pg_connect($conn, $sql);
    while($row = pg_fetch_row($re)) {
    ?>
      <div class="col-md-4">
            <div class="card">
                <img
                src="../img/<?php echo $row['image'];?>"
                class="card-img-top"
                alt="Product1>" style="margin: auto;
    width: max-content;"
                />
                <div class="card-body">
                <a href="#" class="text-decoration-none"><h5 class="card-title"><?php echo $row['proname'];?></h5></a>
                <h6 class="card-subtitle mb-2 text-muted"><span>&#8363;</span><?php echo $row['price'];?></h6>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
      </div>
      <?php
    }
      ?>

</body>
<script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
    