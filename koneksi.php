<!-- <?php 
// $koneksi = mysqli_connect("localhost","id15700685_root","k4V@I!~OZqj~9|05","id15700685_localhost");
$koneksi = mysqli_connect("localhost","si","nq7NqisGaJ9cA1hP","dbperizinan");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
// ?>  -->

 <?php

error_reporting(0);
 
//MySQLi Object-Oriented
define('HOST','localhost');
define('USER','si');
define('PASS','nq7NqisGaJ9cA1hP');
define('DB1', 'dbperizinan');
 
// Buat Koneksinya
$db1 = new mysqli(HOST, USER, PASS, DB1);
 
?>