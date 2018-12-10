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
				<a href="item.php"> Ini Kembali</a>
			</div></div>

			<!-- tabel -->
			<div class="tabel">
				<div class="box2">
			<table >
			<?php
		include 'connect.php';
		$ID     = $_GET['id'];
		$sql    = "select * from item where id=$ID";
		$result = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>
		<!--  -->
		<div class="box2">
		<form action="proedititem.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			Category : <br>
			<select name="ctg_name" id="ctg_name" value="<?php echo $row['ctg_name']; ?>">
				<?php
				include 'connect.php';
      $sql = "SELECT * from category";
      $res = mysqli_query($connect, $sql);
      if(mysqli_num_rows($res)>0){
        while ($row = mysqli_fetch_assoc($res)){
				echo "<option value=".$row['id'].">".$row['name']."</option>";}
				}
				?>
			</select><br>
			Name : <br>
			<input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"><br>
			Price : <br>
			<input type="text" name="price" id="price" value="<?php echo $row['price']; ?>"><br>
			Status : <br>
			<input type="radio" name="status" id="status" value="1" > Aktif<br>
			<input type="radio" name="status" id="status" value="0" > Tidak Aktiv<br>
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