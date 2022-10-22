<?php

// $server = "localhost";
// $username ="root";
// $password = "";
// $db = "shop_200092";

// $conn = mysqli_connect($server,$username,$password,$db);
// if($conn->connect_error){
//     die("Failed ".$conn->connect_error);
// }


	$conn = pg_connect("localhost","root","","shop_200092") or die("Lỗi".pg_connect($conn));
	
	pg_connect($conn,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$conn = pg_pconnect("postgres://evjwdctyczrqow:65c77aa39bff6486959ad4e9532e62b27234a6693e6611c442a980e99d133448@ec2-34-235-198-25.compute-1.amazonaws.com:5432/dfcio4ifhhi5ik");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	
    if (!$conn) {
        die("Connection failed");
    }
?>