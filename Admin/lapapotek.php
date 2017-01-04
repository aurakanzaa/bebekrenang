</php
    
?>

<!DOCTYPE html>
<html>
<head>
  <title>LAPORAN DATA APOTEK </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <section id="main-content" class="section appear clearfix">
            <div class="container">
                
                <div class="row mar-bot40">
                    <div class="col-md-offset-3 col-md-6">
                        <div class="section-header">
                            <h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="container">   
                    <div class="col-md-11">
                        <div class="cform" id="contact-form">
                            <div id="sendmessage">
				                        <h1> LAPORAN DATA APOTEK</h1>
                                <br />
                            </div>        
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th >No. </th>
                                    <th>Kode Apotek</th>
                                    <th>Nama Apotek</th>
                                    <th>Jam Kerja</th>
                                    <th>Alamat</th>
                                    <th>No. Telepon</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    $mysqli = new mysqli("localhost", "root", "", "proyek");
                                    $hasil = $mysqli->query("SELECT * FROM apotek");
                                    $baris = $hasil->fetch_all();

                                    for($b=0; $b<count($baris); $b++)
                                    {
                                      echo "<tr>";
                                      echo "<td align = 'center'>";
                                      echo $b+1;
                                      echo "</td>";
                                      for($k=0; $k<count($baris[$b]); $k++)
                                      {
                                        echo "<td> ";

                                        echo $baris[$b][$k];
                                        if($k == (count($baris[$b]) - 1 ))
                                        {
                                          echo "<br />";
                                        }
                                        echo "</td>";
                                      }
                                      $n = $baris[$b][0];
                                      echo "<td><a href ='ubahapotek.php?id=$n'> Edit </a> / <a href ='hapusapotek.php?id=$n'> Hapus </a></td></tr>";
                                      
                                    }
                                  ?>
                                </tbody>
                              </table>
                            </div>

                        </div>
                    </div>
                    <!-- ./span12 -->
                </div>
                
            </div>
        </section>

<?php include 'koding/bawah.php'; ?>
</body>
</html>