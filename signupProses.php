<?php  
if(isset($_POST['register'])){
	include'koneksi.php';
		$full_name=$_POST['full_name'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$data=$koneksi->query("INSERT INTO signup (full_name,username,password)values('$full_name','$username','$password')");

		if($data){
			// echo "Berhasil Input Data";
			// echo "<br>";
			// echo '<a href="index.php">Kembali</a>';
			header('location:index.php');
		}else{
			// echo "Gagal Input Data!";
			// echo "<br>";
			// echo '<a href="signup.php">Kembali</a>';
			header('location:login.php');
		}

	
} else{
	echo '<script>window.history.back()</script>';
}
 



?>