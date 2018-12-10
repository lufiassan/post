<html>
<head>

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

		<div class="icon">
			 <a href="https://www.facebook.com/saiful.muhammad.90" ><i class="fa fa-home"></i></a>
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
				<a href="neworder.php">Create New</a>
			</div></div>

			<!-- tabel -->
			<div class="tabel">
				<div class="box2">
			<table >
				<h1>Order</h1><br>
			<tr>
				<td>No</td>
				<td>Table Number</td>
				<td>Item</td>
				<td>Qty</td>
				<td>Total</td>
				<td>Discount</td>
				<td>After Discount</td>
				<td>Action</td>
			</tr>
			
			<?php
function nomin($rp){
		$duit = "Rp. ". number_format($rp,0,',','.');
		return $duit;
	}

	include 'connect.php';
      $no = 1;
      $sqlo= "SELECT orderr.id as id_orderr, table_number, item.name as name_item, qty, total, discount, after
      		FROM orderr 
      		JOIN item ON item.id = orderr.item_id";
      $res = mysqli_query($connect, $sqlo);

      if(mysqli_num_rows($res)>0);
        while ($row = mysqli_fetch_assoc($res)){
          echo "
            <tr>
              <td>".$no++."</td>
              <td>".$row['table_number']."</td>
              <td>".$row['name_item']."</td>
              <td>".$row['qty']."</td>	
              <td>".nomin($row['total'])."</td>
              <td>".($row['discount'])."</td>
               <td>".nomin($row['after'])."</td>
              <td>
              <a href='editorder.php?id=".$row['id_orderr']."'>Edit</a>
              <a href='deleteorder.php?id=".$row['id_orderr']."' onclick='javascript:return confirm(\"yakin mau di hapus?\")'> Hapus</a>
              </td>
             </tr>
             ";
             }
?>
	
	            
	            </table>
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

	
var txt="Selamat Datang Di APlikasi Saya :D...|  |";
var speed=900;
var refresh=null;
function action() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
refresh=setTimeout("action()",speed);}action();

</script>
</body>
</html>