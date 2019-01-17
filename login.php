<?php 
include 'config.php';
 
$username = $_POST['username'];
$password = ($_POST['password']);
 
$query = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($query);
 echo $cek;
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin.php");
}else{
	header("location:index.php");	
}
 
?>