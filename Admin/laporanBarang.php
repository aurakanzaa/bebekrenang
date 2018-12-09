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
            <h3><i class="fa fa-angle-right"></i> Laporan Barang Masuk</h3>
        <div class="row">

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            
                            <hr>
                              <thead>
                              <tr>
                                  <th>no</th>
                                  <th>id Brang</th>
                                  <th> Judul Film</th>
                                  <th> Genre</th>
                                  <th> Harga</th>
                                  <th> Stok</th>
                                  <th> Poster</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                    include'koneksi.php';
                                    $hasil = $koneksi->query("SELECT idBarang,judul,genre,harga,stok,image FROM barang");
                                   
                                    $a=0;
                                    while( $baris = $hasil->fetch_assoc())
                                    {
                                      $a=$a+1;
                                       $up = $baris['idBarang'];
                                      $del = $up;
                                      echo "<td>";
                                      echo $a;
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['idBarang'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['judul'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['genre'];
                                      echo "</td>";
                                       echo "<td>";
                                      echo $baris['harga'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['stok'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['image'];
                                      echo "</td>";
                                      ?>
                                  <td>
                                      <a href="editbarang.php?idBarang=<?php echo $up; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <a href="hapusbarang.php?idBarang=<?php echo $del; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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
