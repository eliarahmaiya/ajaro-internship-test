<html>
	<head>
		<title>Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="stylee.css"/>
	</head>
		<body>
		<h3><div class= "jdl">KELOLA DATA BARANG</div></h3>
		<br>
		<br>
		<table width= 80% height= 5% align="center">
			<tr>
			<td><b> Data Barang</b></td>
			<td><p align="right"><a href =inputt.php><Button class ="btn">Tambah</Button></a></p></td>
			</tr>
		</table>
		<br>
		
		<table width=80% height= 40% align= "center" border = 1 cellpadding= 0 cellspacing= 0>
			<tr align= "center">
				<td>Kode</td>
				<td>Nama</td>
				<td>Harga</td>
				<td>Aksi</td>
			</tr>
		
		<?php 
				//koneksi ke database 
				include ("connectt.php");
				//mengambil data dari tabel barang 
				$tampil= mysql_query("select * from barang");
				while ($data= mysql_fetch_array ($tampil)){
			?>
			
			<tr align = "center">
				<td><?php echo $data['kode']; ?> </td>
				<td><?php echo $data['nama']; ?> </td>
				<td><?php echo $data['harga']; ?> </td>
				<td class = "text"><a href = "Edit.php?id=<?php echo $data['id'];?>">Edit |</a>  
				<a href = "hapus.php?id=<?php echo $data ['id'];?>">Hapus</a></td>
			</tr>
			
			<?php
				}
			?>
			<?php session_start();
if(!isset($_SESSION['username'])) {
header('location:login.php'); }
else { $username = $_SESSION['username']; }
require_once("config.php");
$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
			
			<table align="center">
			<br>
			<br>
			<td>
				<tr>
				<td><p align="right"><a href = "logout.php"><button class="btn">LogOut</button></a>
			</br>
			</br>
			</tr>
			</td>
			
	</table>
</body>
</html>			