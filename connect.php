<?php
$server = "localhost";
$user   = "root";
$pass   = "0112";
$namedb = "point_of_sale";

$connect = mysqli_connect($server, $user, $pass, $namedb);

if (!$connect){
  die("gagal koneksi: " .mysqli_connect_error());
}

?>
