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
        img{
          text-align: center;
        }
</style>
  <h2>OUR PRODUCTS</h2>
  <a href="https://bit.ly/3pyAWmg">
   <img src="images/toanha.jpg" alt="">
</a>
  </head>
<body>
<table>
    <thead>
    <tr>
    <!-- <th>&emsp;	&emsp;	&emsp;Shop_Name &emsp;	&emsp;	&emsp;</th>
        <th>ProDuct Name &emsp;	&emsp;	&emsp;</th>
        <th>Price &emsp;	&emsp;	&emsp;</th>
        <th>Descript &emsp;	&emsp;	&emsp;</th>
        <th>Quantity &emsp;	&emsp;	&emsp;</th> -->
        <!-- <th>&emsp;	&emsp;	&emsp;Image &emsp;	&emsp;	&emsp;</th> -->
        </tr>
    </thead>
    <tbody>
    <?php
    /*Kết nối máy chủ MySQL. Máy chủ có cài đặt mặc định (user là 'root' và không có mật khẩu)*/
    $conn = pg_pconnect("postgres://evjwdctyczrqow:65c77aa39bff6486959ad4e9532e62b27234a6693e6611c442a980e99d133448@ec2-34-235-198-25.compute-1.amazonaws.com:5432/dfcio4ifhhi5ik");
 
    // Kểm tra kết nối
    // if ($$conn === false) {
    //     die("ERROR: Không thể kết nối. " . pg_errormessage());
    // }
 
    $proname = '%';
    if (isset($_POST['proname'])) {
        $proname = '%' . $_POST['proname'] . '%';
    }
    // Thực hiện câu lệnh SELECT
    $sql = "SELECT * FROM product WHERE proname LIKE '$proname'";
    if ($result = pg_query($conn, $sql)) {
        if (pg_num_rows($result) > 0) {
            while ($row = pg_fetch_array($result)) {
                ?>
                <tr>

                 <h3><img src="../img/<?php echo $row['image'];?>"> </h3>
                </tr>
                <?php
            }
            // Giải phóng bộ nhớ của biến
            pg_free_result($result);
        } else {
            ?>
            <tr>
                <td colspan="4">No Records.</td>
            </tr>
            <?php
        }
    } else {
        echo "ERROR: Không thể thực thi câu lệnh $sql. " . pg_errormessage($conn);
    }
    // Đóng kết nối
    pg_close($$conn);
    ?>
    </tbody>
</table>
</body>
<script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

    