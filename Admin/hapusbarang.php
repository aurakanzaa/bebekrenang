<?php
if(isset($_GET['idBarang']))
{
	include'koneksi.php';
	$id = $_GET['idBarang'];

	if($koneksi->connect_error)
	{
		die('Coba periksa koneksi anda');
	}
	
		$querydelete = $koneksi->query("DELETE FROM barang WHERE idBarang = '$id' ");
		echo $koneksi->query($querydelete);
		if($querydelete == TRUE)
		{
			echo "<script>
				alert('Data Berhasil Dihapus ');
				document.location = 'laporanBarang.php';
			</script>";
		}
		else
		{
			echo '<b><font color = "red"> Data Gagal ! </font>: '.$koneksi->error .' </b>';
		}
}
		
?>
