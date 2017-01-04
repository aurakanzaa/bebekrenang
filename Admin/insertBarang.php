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
          	<h3><i class="fa fa-angle-right"></i> Insert Barang</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		    <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="post" action="prosesinsertbarang.php" enctype="multipart/form-data">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Judul Film</label>
                              <div class="col-sm-5">
                                  <input type="text" class="form-control" name="judul">
                              </div>
                           </div>
                          <div class="form-group">
                              <label class="col-sm-6 col-sm-2 control-label" >Genre</label>
                              <div class="col-sm-5">
                                  <div class="btn-group">
                                      <select name="genre">
                                        <option value="cartoon">Cartoon</option>
                                        <option value="action">Action</option>
                                        <option value="horror">Horror</option>
                                        <option value="romance">Romance</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                              <div class="col-sm-3">
                                  <input type="text" class="form-control" name="harga">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Stok</label>
                              <div class="col-sm-2">
                                  <input type="text" class="form-control" name="stok">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Choose Pict</label>
                              <div class="col-sm-5">
                                  <input type="file"  name="image" onchange="PreviewImage();" accept="image/jpeg, image/png"/>
                                  <br><br>
                              </div>
                          </div>
                          <div class="" align="right"><!-- 
                          <button type="button" class="btn btn-round btn-success btn-lg" name="save">Save</button> -->
                          <input type="submit" name="save" value="Save" class="btn btn-round btn-success btn-lg">
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

<!-- PROSES INSERT BARANG -->
<!-- <?php
  if(!empty($_POST['tambah']))
  {
    include'koneksi.php';

    if($koneksi->connect_error)
    {
      die('Coba periksa koneksi anda');
    }

    $kd = $_POST['kodeapotek'];
    $nama = $_POST['namaapotek'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];
    $queryinsert = $mysqli->query("INSERT INTO apotek (kode_apotek, nama_apotek, alamat, tlp) VALUES ('$kd', '$nama', '$alamat', $tlp) ");

    echo $mysqli->query($queryinsert);
    if($queryinsert == TRUE){
      echo "<script>
        alert('Data Berhasil Ditambahkan Di Tabel Apotek');
        document.location = 'lapapotek.php';
      </script>";
    }else{
    echo "    
      <script>
        alert('Maaf Data Gagal Dimasukkan');
        document.location = 'formapotek.php';
      </script>";
    }
  }
?>
 -->