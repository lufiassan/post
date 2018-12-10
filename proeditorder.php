<?php
include 'connect.php';
$ID 			= $_POST['id'];
$table_number	= $_POST['table_number'];	
$item_id        = $_POST['item_id'];
$qty			= $_POST['qty'];

$total			= "SELECT * FROM item WHERE id=$item_id";
$res			= mysqli_query($connect, $total);
$row 			= mysqli_fetch_assoc($res);

$kali 			= $qty * $row['price'];


function discount($percent) {
	if ($percent > 100000) {
		return "20%";
	} else {
		return "-";
	}
}

$disc = discount($kali);

function after_disc($at) {
	if ($at > 100000) {
		return $at - ($at * 0.2);
	} else {
		return $at;
	}
}

$after = after_disc($kali);

$sqla = "UPDATE orderr SET table_number = '$table_number', item_id = '$item_id', qty = '$qty', total = '$kali', discount = '$disc', after = '$after' WHERE id = '$ID'";

mysqli_query($connect, $sqla);
// $discount 	= $kali - ($kali * 0.2) ;
// $nilai 		= 20;

// $sqlo = "UPDATE orderr SET table_number = '$table_number', item_id = '$item_id', qty = '$qty', total = '$kali' WHERE id = '$ID' ";
// $sqla = "UPDATE orderr SET table_number = '$table_number', item_id = '$item_id', qty = '$qty', total = '$kali', discount = '$nilai', after = '$discount' ;


// if ($kali > 100000) {
//  	mysqli_query($connect,$sqla);
//  } else {
//  	mysqli_query($connect,$sqlo);
//  }

header('location:order.php');
?>
