<?php
	session_start();
	if(!empty($_POST['save']))
	{
		include'koneksi.php';

		$username = $_SESSION['username'];
		// $id=$_SESSION['idsendto'];
		


		if($koneksi->connect_error)
		{
			die('Coba periksa koneksi anda');
		}

		// $id_profile = $_POST['id_profile'];
		
		$alamat = $_POST['alamat'];
		$kodepos=$_POST['kodepos'];
		$kota=$_POST ['kota'];
		$phone = $_POST['phone'];

		$queryupdate = $koneksi->query("UPDATE sendto SET alamat='$alamat',kodepos='$kodepos',kota='$kota', phone='$phone' WHERE username='$username' ");


		echo $koneksi->query($queryupdate);
		if($queryupdate == TRUE){
			echo "<script>
				alert('Data Berhasil Ditambahkan ');
				document.location = 'detailsendto.php?idsendto=$idsendto';
			</script>";
			
		}else{
		// echo "		
		// 	<script>
		// 		alert('Maaf Data Gagal Dimasukkan');
		// 		document.location = 'editprofile.php';
		// 	</script>";
		}
	}
?>
