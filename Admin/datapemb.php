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
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Data Pembelian</h4>
                          <table class="table table-striped table-advance table-hover">
                            
                            <hr>
                              <thead>
                              <tr>
                                  <th> No</th>
                                  <th> Id Cart</th>
                                  <th> Id Barang</th>
                                  <th> username</th>
                                  <th> qty</th>
                                  <th> Total</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                    include'koneksi.php';
                                    $hasil = $koneksi->query("SELECT idPenjualan,idBarang,username,qty,total FROM daftarpenjualan");
                               
                                     $a=0;
                                    while($baris=$hasil->fetch_assoc()) {
                                      $a=$a+1;
                                      $up = $baris['idPenjualan'];
                                      $del = $up;
                                      echo "<td>";
                                      echo $a;
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['idPenjualan'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['idBarang'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['username'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['qty'];
                                      echo "</td>";
                                      echo "<td>";
                                      echo $baris['total'];
                                      echo "</td>";
                                      
                                      ?>
                                  <td>
                                      <a href="hapuspemb.php?idPenjualan=<?php echo $del;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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
