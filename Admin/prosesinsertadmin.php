<?php
	if(isset($_POST['save']))
	{
		include'koneksi.php';

		if($koneksi->connect_error)
		{
			die('Coba periksa koneksi anda');
		}

		$full_name = $_POST['full_name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$role = $_POST['rolee'];
		$data=$koneksi->query("INSERT INTO signup values('$full_name','$username','$password', '$role','','$email','','','','','','','')");

		if($data){
			echo "<script>
				alert('Data Berhasil Ditambahkan ');
				document.location = 'index.php';
			</script>";
		}else{
		echo "		
			<script>
				alert('Maaf Data Gagal Dimasukkan');
				document.location = '#';
			</script>";
		}
	}
?>
