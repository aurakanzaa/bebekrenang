<?php

	include'koneksi.php';
	$id = $_GET['idCart'];

	if($koneksi->connect_error)
	{
		die('Coba periksa koneksi anda');
	}
		
		$querydelete = $koneksi->query("DELETE  FROM cart WHERE idCart= '$id' ");
		echo $koneksi->query($querydelete);
		if($querydelete == TRUE)
		{
			echo "<script>
				alert('Data Berhasil Dihapus');
				document.location = 'cart.php';
			</script>";
			// alert('Data berhasil dihapus');
			// header('location:cart.php');
		}
		else
		{
			echo '<b><font color = "red"> Data Gagal ! </font>: '.$koneksi->error .' </b>';
		}

		
?>
