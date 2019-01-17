<?php
	include ("connectt.php");
	$id = $_GET['id'];
	mysql_query("delete from barang where id='$id'")or die(mysql_error());
	
	header("location:homee.php?pesan=hapus");
?>