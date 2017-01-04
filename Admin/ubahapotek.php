<?php
session_start();
//$_mysqli = new mysqli("localhost", "root", "", "proyek");
include 'config.php';
if($conn->connect_error){
    die('<font color="red">Koneksi gagal</font> : <b>'.$conn->connect_error. '</br>');
}
$kd = $_GET['id'];
$query = $conn->query("SELECT * FROM apotek WHERE kode_apotek='$kd'");
$baris = $query ->fetch_assoc();

?>



<!DOCTYPE html>
<html>
<head>
  <title>EDIT APOTEK</title>
  <?php
    include'koding/top.php';
  ?>
</head>
<body>
<?php
include 'koding/header.php';
include 'koding/sidebar.php';
?>
<!-- contact -->
        <section id="section-contact" class="section appear clearfix">
            <div class="container">
                
                <div class="row mar-bot40">
                    <div class="col-md-offset-3 col-md-6">
                        <div class="section-header">
                            <h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="cform" id="contact-form">
                            <div id="sendmessage">
				                        <h1> FORM EDIT APOTEK</h1>
                                <label>** Masukkan Data Apotek **<br><br></label>
                            </div>
                            <form action="" method="post" role="form" class="contactForm">
                              <div class="form-group">
                                <label for="id">Kode Apotek</label>
                                <input type="text" name="kodeapotek" class="form-control" placeholder="AP0000" value ="<?php echo $baris['kode_apotek']; ?>"/>
                                <div class="validation"></div>
                              </div>
                              
                              <div class="form-group">
                                <label for="nama">Nama Apotek</label>
                                <input type="text" name="namaapotek" class="form-control" placeholder="Nama Apotek" value ="<?php echo $baris['nama_apotek']; ?>"/>
                                <div class="validation"></div>
                              </div>

                              <div class="form-group">
                                <label for="alamat">Alamat Lengkap</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap" value ="<?php echo $baris['alamat']; ?>"/>
                                <div class="validation"></div>
                              </div>

                              <div class="form-group">
                                <label for="tlp">Nomor Telepon </label>
                                <input type="text" name="tlp" class="form-control" placeholder="No. Telp" value ="<?php echo $baris['tlp']; ?>"/>
                                <div class="validation"></div>
                              </div>

                              <br>
                              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                              <input name="tambah" value = "----- EDIT -----" type="submit" class="btn btn-theme pull-left">
                              <input name="reset" value = "----- CLEAR -----" type="reset" class="btn btn-theme pull-center">
                            </form>

                        </div>
                    </div>
                    <!-- ./span12 -->
                </div>
                
            </div>
        </section>


<?php include 'koding/bawah.php'; ?>
</body>
</html>


<?php
if(isset($_POST['tambah'])) {
    $kd = $_POST['kodeapotek'];
    $nama = $_POST['namaapotek'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];

    
    $update = $conn->query("UPDATE apotek SET kode_apotek='$kd', nama_apotek='$nama', alamat='$alamat', tlp='$tlp' WHERE kode_apotek='$kd'") or die($conn->error);
      
    echo $conn->query($update);
    if($update == TRUE){
      echo "<script>
        alert('Data Berhasil Diupdate di tabel Apotek');
        document.location = 'lapapotek.php';
      </script>";
    }else{
    echo "    
      <script>
        alert('Maaf Data Gagal Diupdate');
        document.location = 'ubahapotek.php';
      </script>";
    }

}
?>



