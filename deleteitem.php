<?php
include 'connect.php';
$ID    = $_GET['id'];

$sqli = "DELETE FROM item WHERE id = '$ID'";
mysqli_query($connect,$sqli);
header('location:item.php');
?>
