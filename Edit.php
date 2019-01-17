<html>
	<head>
	<title>Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="homee.css"/>
	</head>
	<body>
		<h2>KELOLA DATA BARANG</h2>
		<br>
<?php
	include("connectt.php");
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM barang where id='$id'") or die(mysql_error());
	while($data = mysql_fetch_array($query_mysql)){
?>
		<form action = "update.php" method = "post" p align ="center">
		<table width= 50% height=5% align="center">
	<tr>
		<td><b>Input Data Barang</b></td>
	</tr>
	</table>
	<br>
		<table width= 50% height=5% align="center">
	<tr>
		<td>Kode :</td>
		<td><input type="text" name="kode" readonly value="<?php echo$data['kode']?>" class="hd"></td>
	</tr>
	<tr>
		<td>Nama :</td>
		<td><input type="text" name="nama" value="<?php echo$data['nama']?>" class="hd"></td>
	</tr>
	<tr>
		<td>Deskripsi :</td>
		<td><textarea name="deskripsi" class="hd"><?php echo$data['deskripsi']?></textarea></td>
	</tr>
	<tr>
		<td>Stok :</td>
		<td><input type="text" name="stok" value="<?php echo$data['stok']?>" class="hd"></td>
	</tr>
	<tr>
		<td>Harga :</td>
		<td><input type="text" name="harga" value="<?php echo$data['harga']?>"class="hd"></td>
	</tr>
	<tr>
		<td>Berat :</td>
		<td><input type="text" name="berat" value="<?php echo$data['berat']?>" class="hd"> gram</td>
	</tr>
	</table>
	<table>
		<p align="center"><input class="button" type=submit value="update"></input></a></p>
	</table>
	</form>
	</body>
<?php
	}
?>
</html>