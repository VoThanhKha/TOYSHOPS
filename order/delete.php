<?php
include_once("../connect.php");

if(isset($_GET['oid']) && isset($_GET['odid'])){
    $delQuery = "Delete from orders_detail where OrderDetail_ID='".$_GET['odid']."'";

if(pg_connect($conn, $delQuery)){
    echo " <script>
    window.location = 'insertDetail.php?id=".$_GET['oid']."'
    </script>";
}else{
    echo "Error: " . $sql . "<br>" . pg_connect($conn);
}
}
if(isset($_GET['id'])){
    $delQuery = "Delete from orders where OrderID='".$_GET['id']."'";

if(pg_connect($conn, $delQuery)){
    echo " <script>
    window.location = 'index.php?status=delete'; </script>";
}else{
    echo "Error: " .$sql."<br>".pg_connect($conn);
}
}

?>