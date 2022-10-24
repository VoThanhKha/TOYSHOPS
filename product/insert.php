<?php  
	$conn = pg_pconnect("postgres://evjwdctyczrqow:65c77aa39bff6486959ad4e9532e62b27234a6693e6611c442a980e99d133448@ec2-34-235-198-25.compute-1.amazonaws.com:5432/dfcio4ifhhi5ik");
 
?>  

<?php  
$con = pg_pconnect("postgres://evjwdctyczrqow:65c77aa39bff6486959ad4e9532e62b27234a6693e6611c442a980e99d133448@ec2-34-235-198-25.compute-1.amazonaws.com:5432/dfcio4ifhhi5ik");


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

if(@$_POST['submit'])  
{  
echo $sql="insert into product values('$proid','$shop','$proname','$price','$description','$quantity','$proimage','$procate')";  
echo "Your Data Inserted";  
pg_query($sql);  
}  
?>   
<html>  
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

</body>  
</html> 