<?php 
session_start();
include 'koneksi.php';
$username = $_SESSION['username'];
$totalharga = $_SESSION['hargatotal'];
if(isset($_POST['proses'])){
	$check = $koneksi->query("select * from cart where username = '$username'");
	$user = $koneksi->query("select * from signup where username = '$username' ");
	// $idbarang = $cart['idBarang'];
	
	// $barang = $check2->fetch_assoc();
	while ($cart = $check->fetch_assoc()) {
			 $idBarang = $cart['idBarang'];
			 $idCart = $cart['idCart'];
			 $qty = $cart['qty'];
			 $total = $cart['total'];
			 echo $idBarang;
			 echo "<br>";
			 echo $idCart;
			 echo "<br>";
			 echo $qty;
			 echo "<br>";
			 echo $total;
			 echo "<br>";
			echo $totalharga;	
			 $check2 = $koneksi->query("select * from cart where idBarang = '$idBarang'");
			 $cart2 = $check2->fetch_assoc();
			$jumlah = $cart2['qty'];
			 $update = $koneksi->query("update barang set stok = stok - '$jumlah' where idBarang='$idBarang' ");
			 $check3 = $koneksi->query("select * from barang where idBarang = '$idBarang'");

			 $stok = $check3->fetch_assoc();
			 if($stok['stok']<0){
			 	 $update = $koneksi->query("update barang set stok = stok + '$jumlah' where idBarang='$idBarang' ");
			 		echo "		
			<script>
				alert('Maaf stok tidak mencukupi');
				document.location = 'cart.php';
			</script>";
			 }
			 $penjualan = $koneksi->query("insert into daftarpenjualan(idBarang,username,qty,total) values ('$idBarang','$username','$qty','$total')");	
			 $delete = $koneksi->query("delete from cart where idCart = '$idCart'");
			}
$updateuang = $koneksi->query("update signup set uang = uang - '$totalharga' where username = '$username'");	

}		
header ('location:index.php');
?>