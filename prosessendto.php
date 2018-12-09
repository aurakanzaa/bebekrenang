<?php
session_start();
	// if(!isset($_POST['save']))
	// {
		include'koneksi.php';
		$username = $_SESSION['username'];

		if($koneksi->connect_error)
		{
			die('Coba periksa koneksi anda');
		}
		//$username=$_POST['username'];
		$alamat = $_POST['alamat'];
		$kodepos= $_POST['kodepos'];
		$kota = $_POST['kota'];
		$phone = $_POST['phone'];

      	$input=$koneksi->query ("INSERT INTO sendto (username,alamat,kodepos,kota,phone)values('$username','$alamat','$kodepos','$kota','$phone')  ");

	// echo $koneksi->query($input);
		if($input == TRUE){
			echo "<script>
				alert('Data Berhasil Ditambahkan ');
				document.location = 'detailsendto2.php';
			</script>";
		}else{
		echo "		
			<script>
				alert('Maaf Data Gagal Dimasukkan');
				document.location = 'sendto.php';
			</script>";
		}	
		
	//}
?>
