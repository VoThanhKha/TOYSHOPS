<?php
include_once("header.php");
include_once("connect.php");

if(isset($_POST['Search'])){
  $keyword =$_POST['Search'];
  $sql ="SELECT Product_ID, Shop_name, Product_Name, Price, DetailDesc, ProDate, Pro_qty, Pro_image, Cat_ID FROM product WHERE 1";
  $re =mysqli_query($conn,$sql);
}
?>
<div class="container mt-3">
  <h2>SEARCH: <?=$keyword?></h2>
  <div class="row">
    <?php
    while( $row = mysqli_fetch_array($re)){
    ?>
      <div class="col-md-4">
            <div class="card">
                <img
                src="img/<?=$row['Pro_image']?>"
                class="card-img-top"
                alt="<?=$row['Product_Name']?>" style="margin: auto; width: 300px;"
                />
                <div class="card-body">
                <a href="detail.php?id=<?=$row['Product_Name']?>" class="text-decoration-none"><h5 class="card-title"><?=$row['Product_Name']?></h5></a>
                <h6 class="card-subtitle mb-2 text-muted"><?=$row['Price']?>   </h6>
                <a href="cart.php?id=<?=$row['Product_ID']?>" class="btn btn-primary">    </a>
                </div>
            </div>
      </div>
      <?php
    }
      ?>
  </div>
</div>

</body>
<script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

</html>