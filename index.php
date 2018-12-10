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
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">
			<div class="icon">
			 <a href="#"><i class="fa fa-reorder"></i></a> 
		</div></span>
		</div>

		<div class="icon">
			 <a href="https://www.facebook.com/saiful.muhammad.90"><i class="fa fa-home"></i></a> 
		</div>
		<div class="icon">
			 <a href="index.php"><i class="fa fa-sitemap"></i></a> 
		</div>
		<div class="icon">
			 <a href="item.php"><i class="fa fa-list"></i></a> 
		</div>
		<div class="icon">
			 <a href="order.php"><i class="fa fa-file-o"></i></a> 
		</div>
	</div>

	<!-- Body -->
	<div id="body">
	<div class="ganjel"></div>
		<div class="kiri"></div>

		<div id="isi">
			<div class="w">
			<div class="create">
				<a href="create.php">Create New</a>
			</div></div>

			<!-- tabel -->
			<div class="tabel">
				<div class="box2">
			<table>
				<h1>Category</h1><br>
				<tr>
					<td>No</td>
					<td>Name</td>
					<td>Action</td>
				</tr>
			
			
	<?php
		include 'connect.php';
	      $no = 1;
	      $sqln = "select * from category";
	      $res = mysqli_query($connect, $sqln);
	      if(mysqli_num_rows($res)>0);
	        while ($row = mysqli_fetch_assoc($res)){
	          echo "
	            <tr>
	              <td>".$no++."</td>
	              <td>".$row['name']."</td>
	              <td>
	              <a href='edit.php?id=".$row['id']."'>Edit</a>
	              <a href='delete.php?id=".$row['id']."' onclick='javascript:return confirm(\"yakin mau di hapus?\")'> Hapus</a>
	              </td>
	             </tr>
	             ";
	             }
	            	
	            ?>
	            
	            </table>
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