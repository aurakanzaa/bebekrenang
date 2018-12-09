<?php
	if(!empty($_POST['save']))
	{
		include'koneksi.php';

		if($koneksi->connect_error)
		{
			die('Coba periksa koneksi anda');
		}

		$judul = $_POST['judul'];
		$genre = $_POST['genre'];
		$harga = $_POST['harga'];
		$stok = $_POST['stok'];

      	$file_name = $_FILES['image']['name'];
     	$file_tmp =$_FILES['image']['tmp_name'];
      	$path="uploadGambar/".$file_name;

      	if(move_uploaded_file($file_tmp, $path)){
      		$queryinsert = mysqli_query($koneksi, "INSERT INTO barang (idBarang,judul,genre,harga,stok,image) VALUES ('', '$judul', '$genre', '$harga', '$stok','$file_name') ");
			if($queryinsert == TRUE){
				echo "<script>
					alert('Data Berhasil Ditambahkan ');
					document.location = 'laporanBarang.php';
				</script>";
			}else{
				echo "<script>
					alert('Data Gagal ditambahkan');
					document.location = 'insertBarang.php';
				</script>";
			}
      	}else{
      		echo "foto gagal di upload";
      	}

		

		
	}
?>
