
<?php
include 'connect.php';
$ID    = $_GET['id'];

$sqlo = "DELETE FROM orderr WHERE id = '$ID'";
mysqli_query($connect,$sqlo);
header('location:order.php');
?>