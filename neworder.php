<html>
<head>
	<title>Selamat Datang Di APlikasi Saya</title>
	<link rel="stylesheet" type="text/css" href="createnew.css">
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
			<form action="prorder.php" method="POST">
			Tabel_Number : <br>
			<input type="text" name="table_number" id="table_number"><br>
			Item : <br>
				<select name="item_id" id="item_id">
				<option>pilih </option>
				<?php 
				include 'connect.php';
      $sqlo= "SELECT * FROM item where status = 1";
      $res = mysqli_query($connect, $sqlo);
      if(mysqli_num_rows($res)>0){
        while ($row = mysqli_fetch_assoc($res)){
        	echo "<option value=".$row['id'].">".$row['name']."</option>";}
        	}
        	?>
			</select><br>
			Qty : <br>
			<input type="text" name="qty" id="qty" ><br>
			<input type="submit" value="Submit">

		</form>
	            </div>
				
			</diva>
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