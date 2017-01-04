<?php
	if(!empty($_POST['tambah']))
	{
		$mysqli = new mysqli("localhost", "root", "", "proyek");

		if($mysqli->connect_error)
		{
			die('Coba periksa koneksi anda');
		}

		$kd = $_POST['kodeapotek'];
		$nama = $_POST['namaapotek'];
		$alamat = $_POST['alamat'];
		$tlp = $_POST['tlp'];
		$queryinsert = $mysqli->query("INSERT INTO apotek (kode_apotek, nama_apotek, alamat, tlp) VALUES ('$kd', '$nama', '$alamat', $tlp) ");

		echo $mysqli->query($queryinsert);
		if($queryinsert == TRUE){
			echo "<script>
				alert('Data Berhasil Ditambahkan Di Tabel Apotek');
				document.location = 'lapapotek.php';
			</script>";
		}else{
		echo "		
			<script>
				alert('Maaf Data Gagal Dimasukkan');
				document.location = 'formapotek.php';
			</script>";
		}
	}
?>
