<?php
include 'connect.php';
$name           = $_POST['name'];

$sqln = "INSERT INTO category (name) VALUES ('$name')";
mysqli_query($connect,$sqln);

header('location: index.php');
?>