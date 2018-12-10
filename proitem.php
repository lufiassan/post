<?php
include 'connect.php';
$category		= $_POST['ctg_name'];	
$name           = $_POST['names'];
$price			= $_POST['price'];
$status			= $_POST['status'];


$sql = "INSERT INTO item (category_id, name, price, status) VALUES ('$category', '$name', '$price', '$status')";
mysqli_query($connect,$sql);
header('location: item.php');
?>