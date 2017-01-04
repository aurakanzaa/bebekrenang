<?php
if(isset($_GET['id']))
{
	$mysqli = new mysqli("localhost", "root", "", "proyek");
	$id = $_GET['id'];

	if($mysqli->connect_error)
	{
		die('Coba periksa koneksi anda');
	}
	
		$querydelete = $mysqli->query("DELETE FROM apotek WHERE kode_apotek = '$id' ");
		echo $mysqli->query($querydelete);
		if($querydelete == TRUE)
		{
			echo "<script>
				alert('Data Berhasil Dihapus Di Tabel Apotek');
				document.location = 'lapapotek.php';
			</script>";
		}
		else
		{
			echo '<b><font color = "red"> Data Gagal ! </font>: '.$mysqli->error .' </b>';
		}
}
		
?>
