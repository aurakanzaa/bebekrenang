<?php
	if(!isset($_POST['proses']))
	{
		include 'koneksi.php';

		if($koneksi->connect_error)
		{
			die('Coba periksa koneksi anda');
		}

		//$jml = $_POST['qty'];
		$qty=$koneksi->query("select qty from cart"); 
		while($r=mysql_fetch_row($qty)
		{
			$koneksi->query("update barang set qty = qty- $r");
		}

		/*$queryupdate = $koneksi->query("update barang set qty=qty-'$jml'");

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
		}*/
	}
?>
	
