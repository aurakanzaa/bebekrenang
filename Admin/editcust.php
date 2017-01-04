<?php
include 'koneksi.php';
session_start();
if($koneksi->connect_error){
    die('<font color="red">Koneksi gagal</font> : <b>'.$koneksi->connect_error. '</br>');
}
$user = $_GET['username'];
$query = $koneksi->query("SELECT * FROM signup WHERE username='$user'");
$baris = $query ->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include'koding/top.php';
    ?>
  </head>

  <body>

  <section id="container" >
    <?php  
    include 'koding/header.php';
    include 'koding/sidebar.php';
    ?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Edit Customer</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		    <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="datacust.php" method="post" >
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="full_name" value="<?php echo $baris['full_name']; ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="full_name" value="<?php echo $baris['username']; ?>">
                              </div>
                           </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-4">
                                  <input type="email" class="form-control" name="email" value="<?php echo $baris['email']; ?>">
                              </div>
                           </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Hp</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="hp" value="<?php echo $baris['hp']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-6 col-sm-2 control-label" >Jenis kelamin</label>
                              <div class="col-sm-5">
                                  <div class="btn-group">
                                      <select name="jenis_kelamin" >
                                        <option value="admin">Laki-Laki</option>
                                        <option value="admin">Perempuan</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Birthdate</label>
                              <div class="col-sm-3">
                                  <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $baris['tgl_lahir']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="alamat" value="<?php echo $baris['alamat']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kodepos</label>
                              <div class="col-sm-2">
                                  <input type="text" class="form-control" name="kodepos" value="<?php echo $baris['kodepos']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kota</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="kota" value="<?php echo $baris['kota']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Lain</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="no_lain" value="<?php echo $baris['hp_lain']; ?>">
                              </div>
                          </div>
                          <div class="" align="right"> <input type="submit" class="btn btn-round btn-primary btn-lg" name="save">
                          </div>
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Aura Kanza C | TI - 2F | 1541180188
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

  <?php
    include'koding/bawah.php';
  ?>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>


<?php
if(isset($_POST['save'])) {
    $full_name = $_POST['full_name'];
    $user = $_POST['username'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $kodepos = $_POST['kodepos'];
    $kota = $_POST['kota'];
    $hp_lain = $_POST['hp_lain'];


    
    $update = $koneksi->query("UPDATE signup SET full_name='$full_name', username='$user', password='',email='$email',hp='$hp',jenis_kelamin='$jenis_kelamin',tgl_lahir='$tgl_lahir',alamat='$alamat', kodepos='$kodepos',kota='$kota', hp_lain='$hp_lain' WHERE username='$user'") or die($koneksi->error);
      
    echo $koneksi->query($update);
    if($update == TRUE){
      echo "<script>
        alert('Data Customer Berhasil Diupdate ');
        document.location = 'datacust.php';
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


