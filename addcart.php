<?php
session_start();
include 'koneksi.php';	
$a=0;

$username = $_SESSION['username'];
$idbarang = $_GET['idbarang'];
$cek1= $koneksi->query("select * from barang where idBarang = '$idbarang'");
$check2 = $cek1->fetch_assoc();
$harga = $check2['harga'];
$cek = $koneksi->query ("select * from cart where username = '$username' ");

while($check = $cek->fetch_assoc()) {
	if($check['idBarang']== $idbarang) {
		$input = $koneksi->query("update cart set qty = qty+1 ,total=total+'$harga' where idBarang='$idbarang'");	
		$a=1;	
	}
}
if($a!=1){
$input = $koneksi->query("INSERT INTO cart (username,idbarang,qty,total) values ('$username','$idbarang',qty+1,'$harga')");
}
header('location:shop.php');
	
		
	
?>