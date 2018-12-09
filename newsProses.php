<?php
	if(!empty($_POST['email']))
	{
		include 'koneksi.php';

		if($koneksi->connect_error)
		{
			die('Coba periksa koneksi anda');
		}

		$send = $_POST['email'];
		
		$queryinsert = $koneksi->query("INSERT INTO newsletter (email) VALUES ('$send') ");

		echo $koneksi->query($queryinsert);
		if($queryinsert == TRUE){
			echo "<script>
				alert('Email berhasil ditambahkan');
				document.location = 'index.php';
			</script>";
		}else{
		echo "		
			<script>
				alert('Maaf Data Gagal Dimasukkan');
				document.location = 'index.php';
			</script>";
		}
	}
?>
