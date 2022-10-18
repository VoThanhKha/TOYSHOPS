<?php
include_once("header.php");
?>
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<section class="h-100 h-custom" style="background-color: #d2c9ff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              
            <div class="col-lg-5 p-5">
                    <div class="image_selected ms-3"><img src="img/product-1.jpg" alt=""></div>
                </div>
                <div class="col-lg-7 p-5">
                    <div class="product_description">
                        <div class="product_name">Product 1</div>
                        
                        <div> <span class="product_price"><span>&#8363;</span> 100</div>
                        
                        <div>  
                            <span class="product_info">ABC<span><br> 
                            <span class="product_info">In Stock: 10<span> </div>
                        
                        <hr class="singleline">
                        <div class="order_info d-flex flex-row">
                            <form action="#">
                        </div>
                        <div class="row">
                            <form action="#" method="get">
                            <div class="col-lg-3 mb-4" style="margin-left: 13px;">
                                <div class="form-group">
                                    <label for="qty_label">Quantity:</label>
                                    <input type="number" id="quantity_input" class="form-control" name="quantity_input" value="1" >     
                                </div>
                            </div>
                            <div class="col-lg-9"> <button type="submit" class="btn btn-primary shop-button">Add to Cart</button> 
                            <!-- <button type="button" class="btn btn-success shop-button">Buy Now</button> -->
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>