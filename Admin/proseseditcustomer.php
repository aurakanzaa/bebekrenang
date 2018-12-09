<?php
include 'koneksi.php';
session_start();
if($koneksi->connect_error){
    die('<font color="red">Koneksi gagal</font> : <b>'.$koneksi->connect_error. '</br>');
}
$user = $_GET['username'];
$query = $koneksi->query("SELECT * FROM signup WHERE username='$user'");
$baris = $query ->fetch_assoc();

if(isset($_POST['save'])) {
    $full_name = $_POST['full_name'];
    
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $kodepos = $_POST['kodepos'];
    $kota = $_POST['kota'];
    $hp_lain = $_POST['hplain'];


    
    $update = $koneksi->query("UPDATE signup SET full_name='$full_name', username='$user', password='',email='$email',hp='$hp',jenis_kelamin='$jenis_kelamin',tgl_lahir='$tgl_lahir',alamat='$alamat', kodepos='$kodepos',kota='$kota', hp_lain='$hp_lain' WHERE username='$user'") or die($koneksi->error);
      
    echo $koneksi->query($update);
    if($update == TRUE){
      echo "<script>
        alert('Data Customer Berhasil Diupdate ');  
      </script>";
    }else{
    echo "    
      <script>
        alert('Maaf Data Gagal Diupdate');
        document.location = 'editcust.php';
      </script>";
    }

}
?>


