<!doctype html>
<html lang="en">
<head>
<div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="../index.php"><h4>BACK TO HOME PAGE</h4></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>

            
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Product</title>
</head>
<body>
<style>

    h4{
        color:darkblue;
            
    }
        body {
            color:black;
            text-align:center;
}
        h3 {
            color:darkblue;
            
        }
        p {
            color: rgb(0,0,255)
        }
</style>
<h3>Please Enter Product's Name !</h3>
<form action="" method="post">
    <div>
     <input name="Product_Name"/>
        <input type="submit" value="Search"/>

    </div>
</form>
<h2>Result:</h2>
<table>
    <thead>
    <tr>
    <th>&emsp;	&emsp;	&emsp;Shop_Name &emsp;	&emsp;	&emsp;</th>
        <th>ProDuct Name &emsp;	&emsp;	&emsp;</th>
        <th>Price &emsp;	&emsp;	&emsp;</th>
        <th>Descript &emsp;	&emsp;	&emsp;</th>
        <th>Quantity &emsp;	&emsp;	&emsp;</th>
        <th>Image &emsp;	&emsp;	&emsp;</th>
        </tr>
    </thead>
    <tbody>
    <?php
    /*Kết nối máy chủ MySQL. Máy chủ có cài đặt mặc định (user là 'root' và không có mật khẩu)*/
    $link = mysqli_connect("localhost", "root", "", "shop_200092");
 
    // Kểm tra kết nối
    if ($link === false) {
        die("ERROR: Không thể kết nối. " . mysqli_connect_error());
    }
 
    $proname = '%';
    if (isset($_POST['Product_Name'])) {
        $proname = '%' . $_POST['Product_Name'] . '%';
    }
    // Thực hiện câu lệnh SELECT
    $sql = "SELECT * FROM product WHERE Product_Name LIKE '$proname'";
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
            
                <tr>
                <td><?php echo $row['Shop_name'];?></td>
                    <td><?php echo $row['Product_Name'];?></td>
                    <td><?php echo $row['Price'];?></td>
                    <td><?php echo $row['DetailDesc'];?></td>
                    <td><?php echo $row['Pro_qty'];?></td>
                    <td><img src="../img/<?php echo $row['Pro_image'];?>"> </td>
                
                </tr>
                <?php
            }
            // Giải phóng bộ nhớ của biến
            mysqli_free_result($result);
        } else {
            ?>
            <tr>
                <td colspan="4">No Records.</td>
            </tr>
            <?php
        }
    } else {
        echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
    }
    // Đóng kết nối
    mysqli_close($link);
    ?>
    </tbody>
</table>
</body>
<script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</html>