<?php 
session_start();
 include'koneksi.php';
    if($koneksi->connect_error){
    die('<font color="red">Koneksi gagal</font> : <b>'.$koneksi->connect_error. '</br>');
    }
    $idbarang = $_GET['idBarang'];
    $query = $koneksi->query("SELECT * FROM barang WHERE idBarang='$idbarang'");
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
          	<h3><i class="fa fa-angle-right"></i> Insert Data</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		    <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Form Edit Barang</h4>
                      <form class="form-horizontal style-form" method="post" action="" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Judul Film</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control" name="judul" value="<?php echo $baris['judul']; ?>">
                              </div>
                           </div>
                          <div class="form-group">
                              <label class="col-sm-6 col-sm-2 control-label" >Genre</label>
                              <div class="col-sm-5">
                                  <div class="btn-group">
                                      <select name="genre" value="<?php echo $baris['genre']; ?>">
                                        <option value="cartoon"<?php if($baris['genre'] == 'cartoon'){ echo 'selected'; } ?>>Cartoon</option>
                                        <option value="action"<?php if($baris['genre'] == 'action'){ echo 'selected'; } ?>>Action</option>
                                        <option value="horror"<?php if($baris['genre'] == 'horror'){ echo 'selected'; } ?>>Horror</option>
                                        <option value="romance"<?php if($baris['genre'] == 'romance'){ echo 'selected'; } ?>>Romance</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                              <div class="col-sm-3">
                                  <input type="text" class="form-control" name="harga" value="<?php echo $baris['harga']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Stok</label>
                              <div class="col-sm-2">
                                  <input type="text" class="form-control" name="stok" value="<?php echo $baris['stok']; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Choose Pict</label>
                              <div class="col-sm-5">
                                  <input type="file"  name="image" onchange="PreviewImage();" accept="image/jpeg, image/png"/ value="<?php echo $baris['image']; ?>">
                                  <br><br>
                              </div>
                              <div>*wajib diisi</div>
                          </div>
                          <div class="" align="right"><!-- 
                          <button type="button" class="btn btn-round btn-success btn-lg" name="save">Save</button> -->
                          <input type="submit" name="update" value="Update" class="btn btn-round btn-success btn-lg">
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

$idbarang = $baris['idBarang'];
$query = $koneksi->query("SELECT * FROM barang WHERE idBarang='$idbarang'");
$baris = $query ->fetch_assoc();

if(isset($_POST['update'])) {
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $image = $_POST['image'];
    $file_name = $_FILES['image']['name'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $path="uploadGambar/".$file_name;

    if(move_uploaded_file($file_tmp, $path)){
          $update = $koneksi->query("UPDATE barang SET idBarang='$idbarang',judul='$judul', genre='$genre', harga='$harga',stok='$stok',image='$file_name' WHERE idBarang='$idbarang'") or die($koneksi->error);

          echo $koneksi->query($update);
      if($update == TRUE){
        echo "<script>
          alert('Data Berhasil Ditambahkan ');
          document.location = 'laporanBarang.php';
        </script>";
      }else{
        echo "<script>
          alert('Data Gagal ditambahkan');
          document.location = 'editbarang.php';
        </script>";
      }
        }else{
          echo "foto gagal di upload";
        }

    

    
  }
?>



