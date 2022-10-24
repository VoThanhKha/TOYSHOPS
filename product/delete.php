<?php
include_once("../connect.php");

if(isset($_GET['product_id'])){
    $delQuery = "Delete from product where product_id='".$_GET['product_id']."'";

if(pg_connect($conn, $delQuery)){
    echo " <script>
    window.location = 'index.php?status=delete'; </script>";
}else{
    echo "Error: " .$sql."<br>".pg_connect($conn);
}
}

?>