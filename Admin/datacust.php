<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include'koding/top.php';
    session_start();
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
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Data Customer</h3>
        <div class="row">

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            
                            <hr>
                              <thead>
                              <tr>
                                  <th> No</th>
                                  <th> Name</th>
                                  <th> Username</th>
                                  <th> email</th>
                                  <th> Hp</th>
                                  <th> Jenis Kelamin</th>
                                  <th> Birthdate</th>
                                  <th> Alamat</th>
                                  <th> Kodepos</th>
                                  <th> Kota</th>
                                  <th> No lain</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                    include'koneksi.php';
                                    $hasil = $koneksi->query("SELECT full_name,username,email,hp,jenis_kelamin,tgl_lahir,alamat,kodepos,kota,hp_lain FROM signup");
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
                                      ?>
                                  <td>
                                      <a href="editCust.php?username=<?php echo $n; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <a href="hapuscust.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                      <!-- <a href ='editcust.php?id=$n'> Edit </a> / <a href ='hapuscust.php?id=$n'> Hapus </a> -->
                                  </td></tr>
                                   <?php   
                                    ;}
                                  ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
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
