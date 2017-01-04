<!DOCTYPE html>
<html>
<head>
  <title>FORM APOTEK</title>
  <?php
  session_start();
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
				                        <h1> FORM APOTEK</h1>
                                <label>** Masukkan Data Apotek **<br><br></label>
                            </div>
                            <form action="tambahapotek.php" method="post" role="form" class="contactForm">
                              <div class="form-group">
                                <label for="id">Kode Apotek</label>
                                <input type="text" name="kodeapotek" class="form-control" placeholder="AP0000" />
                                <div class="validation"></div>
                              </div>
                              
                              <div class="form-group">
                                <label for="nama">Nama Apotek</label>
                                <input type="text" name="namaapotek" class="form-control" placeholder="Nama Apotek" />
                                <div class="validation"></div>
                              </div>

                              <div class="form-group">
                                <label for="alamat">Alamat Lengkap</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap" />
                                <div class="validation"></div>
                              </div>

                              <div class="form-group">
                                <label for="tlp">Nomor Telepon </label>
                                <input type="text" name="tlp" class="form-control" placeholder="No. Telp" />
                                <div class="validation"></div>
                              </div>

                              <br>
                              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                              <input name="tambah" value = "----- SEND -----" type="submit" class="btn btn-theme pull-left">
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