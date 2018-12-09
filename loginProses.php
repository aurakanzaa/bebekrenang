<?php
session_start();

include 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$login = $koneksi->query("SELECT * FROM signup where username='$user' and password='$pass' ");

if(mysqli_num_rows($login)==1){
	$row = $login->fetch_assoc();

	$_SESSION['rolee'] = $row['rolee'];
	if ($row['rolee']=='admin'){
		$_SESSION['username']=$user;
		header('location:admin/index.php');
	}else{
		$_SESSION['username']=$user;
		header('location:index.php');
		
	}
}else{
	header('location:login.php?pesan=gagal');
}
?>