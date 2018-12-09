<?php
if(isset($_GET['username']))
{
	include'koneksi.php';
	$id = $_GET['username'];

	if($koneksi->connect_error)
	{
		die('Coba periksa koneksi anda');
	}
	
		$querydelete = $koneksi->query("DELETE FROM signup WHERE username = '$id' ");
		echo $koneksi->query($querydelete);
		if($querydelete == TRUE)
		{
			echo "<script>
				alert('Data Berhasil Dihapus Di Tabel Customer');
				document.location = 'datacust.php';
			</script>";
		}
		else
		{
			echo '<b><font color = "red"> Data Gagal ! </font>: '.$koneksi->error .' </b>';
		}
}
		
?>
