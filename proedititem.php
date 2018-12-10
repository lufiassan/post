<?php
include 'connect.php';
$ID 			= $_POST['id'];
$category		= $_POST['ctg_name'];	
$name           = $_POST['name'];
$price			= $_POST['price'];
$status			= $_POST['status'];

$sql = "UPDATE item SET category_id = '$category', name = '$name', price = '$price', status = '$status' WHERE id = '$ID' ";
mysqli_query($connect,$sql);
header('location:item.php');
?>
