<?php
include_once("../connect.php");

if(isset($_GET['product_id'])){
    $sql = "DELETE FROM public.product
	WHERE product_id='$proid'";

if(pg_connect($conn, $sql)){
    echo " <script>
    window.location = 'index.php?status=delete'; </script>";
}else{
    echo "Error: " .$sql."<br>".pg_connect($conn);
}
}

?>


