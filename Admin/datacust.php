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
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Data Customer</h4>
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
                                    include 'koneksi.php';
                                    $hasil = $koneksi->query("SELECT full_name,username,email,hp,jenis_kelamin,tgl_lahir,alamat,kodepos,kota,hp_lain FROM signup");
                                    $a=0;
                                    while($baris=$hasil->fetch_assoc()) {
                                      $a=$a+1;
                                      $up = $baris['username'];
                                      $del = $up;
                                      echo "<td>";
                                      echo $a;
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['full_name'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['username'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['email'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['hp'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['jenis_kelamin'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['tgl_lahir'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['alamat'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['kodepos'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['kota'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['hp_lain'];
                                      echo "</td>";
                                
                                      
                                  

                                    ?>
                                  <td>
                                      <a href="editcust.php?username=<?php echo $up;?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <a href="hapuscust.php?username=<?php echo $del;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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
