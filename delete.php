<?php
include 'connect.php';
$ID    = $_GET['id'];

$sqlc = "DELETE FROM category WHERE id = '$ID'";
mysqli_query($connect,$sqlc);
header('location:index.php');
?>

