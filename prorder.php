	<?php
include 'connect.php';
$table_number	= $_POST['table_number'];	
$item_id        = $_POST['item_id'];
$qty			= $_POST['qty'];

$total			= "SELECT * FROM item WHERE id=$item_id";
$res			= mysqli_query($connect, $total);
$row 			= mysqli_fetch_assoc($res);

// $pang			= $row['price'];
$kali 			= $qty * $row['price'];

// $discount 		= $kali - ($kali * 0.2);
// $nilai 			= 20;

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

// $sqlo = "INSERT INTO orderr (table_number, item_id, qty, total) VALUES ('$table_number', '$item_id', '$qty', '$kali')";
$sqla = "INSERT INTO orderr (table_number, item_id, qty, total, discount, after)
		 VALUES ('$table_number', '$item_id', '$qty', '$kali', '$disc', '$after')";

// if ($kali < 100000) {
//  	mysqli_query($connect,$sqlo);
//  } else {
//  	mysqli_query($connect,$sqla);
//  }

// echo $kali.$disc.$after;
mysqli_query($connect, $sqla);
header('location: order.php');
?>