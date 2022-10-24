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
  <div class="row">
    <?php
       /*Kết nối máy chủ MySQL. Máy chủ có cài đặt mặc định (user là 'root' và không có mật khẩu)*/
       $conn = pg_pconnect("postgres://evjwdctyczrqow:65c77aa39bff6486959ad4e9532e62b27234a6693e6611c442a980e99d133448@ec2-34-235-198-25.compute-1.amazonaws.com:5432/dfcio4ifhhi5ik");
    
       // Kểm tra kết nối
       // if ($$conn === false) {
       //     die("ERROR: Không thể kết nối. " . pg_errormessage());
       // }
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
    