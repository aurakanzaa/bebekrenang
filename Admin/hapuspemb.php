<?php
if(isset($_GET['idPenjualan']))
{
	include'koneksi.php';
	$idpenjualan = $_GET['idPenjualan'];


echo $idpenjualan;
	if($koneksi->connect_error)
	{
		die('Coba periksa koneksi anda');
	}
	
		$querydelete = $koneksi->query("DELETE FROM daftarpenjualan WHERE idPenjualan = '$idpenjualan' ");
		echo $koneksi->query($querydelete);
		if($querydelete == TRUE)
		{
			echo "<script>
				alert('Data Berhasil Dihapus Di Tabel Customer');
				document.location = 'datapemb.php';
			</script>";
		}
		else
		{
			echo '<b><font color = "red"> Data Gagal ! </font>: '.$koneksi->error .' </b>';
		}
}
		
?>
