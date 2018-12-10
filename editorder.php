<html>
<head>
	<title>Selamat Datang Di APlikasi Saya</title>
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
<div id="container">
	<!-- head -->
	<div id="head">
		<div class="pos">
			<h2>POINT OF SALE</h2>
		</div>

		<!-- javscript -->
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="https://www.facebook.com/saiful.muhammad.90">Home</a>
		  <a href="index.php">Category</a>
		  <a href="item.php">Item</a>
		  <a href="order.php">Order</a>
		</div>

		<div class="menu">
			<span style="font-size:30px;cursor:pointer" onclick="openNav()"><div class="icon">
				<a href="#"><i class="fa fa-reorder"></i></a> 
		</div></span>
		</div>
	</div>

	<!-- Body -->
	<div id="body">
	<div class="ganjel"></div>
		<div class="kiri"></div>

		<div id="isi">
			<div class="w">
			<div class="create">
				<a href="order.php"> Ini Kembali</a>
			</div></div>

			<!-- tabel -->
			<div class="tabel">
				<div class="box2">
			<table >
			<?php
		include 'connect.php';
		$ID     	= $_GET['id'];
		$sql1   	= "select * from orderr where id=$ID";
		$result1 	= mysqli_query($connect,$sql1);
		$row1    	= mysqli_fetch_assoc($result1);
		$cek		= $row1['item_id'];

		$sql2		= "SELECT * FROM item WHERE id=$cek";
		$result2	= mysqli_query($connect, $sql2);
		$row2		= mysqli_fetch_assoc($result2);

		?>
		<div class="box2">
		<form action="proeditorder.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $row1['id']; ?>">

			Tabel_Number : <br>
			<input type="text" name="table_number" id="table_number" value="<?php echo $row1['table_number']; ?>"><br>
			
			Item : <br>
			<select type="text" name="item_id" id="item_id"  ><br>
				<option value="<?php echo $row1['item_id']; ?>"><?php echo $row2['name']; ?></option>
				<?php 
				include 'connect.php';
				
				$sql3 	= "SELECT * FROM item";
				$result3	= mysqli_query($connect, $sql3);
				
				if(mysqli_num_rows($result3)>0){ 
					while ($row3 = mysqli_fetch_assoc($result3)) {
						echo "<option value=".$row3['id'].">".$row3['name']."</option>";
					}
				}
	        	?>
	        </select><br>

			Qty : <br>
			<input type="text" name="qty" id="qty" value="<?php echo $row1['qty']; ?>"><br>
			
			<button type="Submit">Submit</button>
		</form>

	            </div>
				
			</div>
		</div>
		
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "260px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>