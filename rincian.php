

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
            include 'koding/top.php';
        ?>
    <title>Cart </title>
	<!-- All css Files Here -->
	<!-- fonts -->
	<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500' rel='stylesheet' type='text/css'> -->
	<!-- bootstrap css -->
	<link rel="stylesheet" href="cart/css/bootstrap.min.css" />
	<!-- fontawesome css -->
	<link rel="stylesheet" href="cart/css/font-awesome.min.css" />
	<!-- revolution banner css settings -->
	<link rel="stylesheet" type="text/css" href="lib/rs-plugin/css/settings.css" media="screen" />
	<!-- style css -->
    <link rel="stylesheet" href="cart/style.css">
	<!-- responsive css -->
    <link rel="stylesheet" href="cart/css/responsive.css"/>
	<!-- favicon -->
    <link rel="shortcut icon" href="cart/images/favicon.png" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
        <?php
        include 'koding/preloaader.php';
        //include 'koding/header.php';

        ?>
	<!-- Cart-Page-Content-Start -->
	<div class="cart-page-content page-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="cart_title">
						<h4>Detail Bearang belanjaan</h4>
					</div>
					<div class="table-responsive">
						<table class="cart-table text-center">
							<thead>
								<tr id="cart_th">
									<th>No</th>
									<th>Product name</th>
									<th>qty</th>
									<th>Price</th>
									<th>Total</th>
									<!-- <th>Remove</th> -->
								</tr>
							</thead>
							<tbody>
							<form method="post" action="prosestransaksi.php" >
							<?php
							
							$username = $_SESSION['username'];
		                    $tampil=$koneksi->query("SELECT b.judul as judul,c.username as user,b.harga as harga,a.qty as qty,a.total as total, b.image as image FROM cart as a join barang as b on a.idBarang = b.idBarang join signup as c on c.username = a.username  where a.username='$username'");
		                    	$tampil2=$koneksi->query("SELECT sum(total) as hargatot from cart where username='$username' ");
		                    	$tampil3=$koneksi->query("SELECT * FROM cart where username='$username'");
		                    	$tampil4=$koneksi->query("SELECT uang from signup where username='$username'");
		                    	$tampil5=$koneksi->query("SELECT username as usr, alamat as al, kodepos as kp, kota as ko, phone as phn FROM sendto where username='$username'");
		      
		                    $baris5=$tampil5->fetch_assoc();
		                    $baris4=$tampil4->fetch_assoc();	
		                    $baris3=$tampil3->fetch_assoc();
		                    $baris2=$tampil2->fetch_assoc();
		                    $no =0;
		                    while ($baris=$tampil->fetch_assoc()) {
		                    $no = $no+1;      
		                	?>

								<tr>
									<td><?php echo $no ?></td>
									<td>
										<h6><a href="#"><?php echo $baris['judul'];?></a></h6>
									</td>
									<td>
										<h6><?php echo $baris['qty']; ?></h6>
									</td>
									<td>
										<div class="cart-price"> <?php echo $baris['harga'];?></div>
									</td>
									<td>
										<div class="cart-subtotal"><?php echo $baris['total']?></div>
									</td>
								</tr>
								<?php } ?>
								<tr id="total_colspan">
									<td colspan="3" class="text-left">E-money</td>
									
									<td>
									<?php 
										echo $baris4['uang'];
									?>
									</td>
									<td></td>
								</tr>
								<tr id="total_colspan">
									<td colspan="3" class="text-left">total</td>
									
									<td>
									<?php 
										echo $baris2['hargatot'];
									?>
									</td>
									<td></td>
								</tr>
								<tr id="total_colspan">
									<td colspan="3" class="text-left">Shipping</td>
									<td>Free</td>
									<td></td>
								</tr>
								<tr id="total_colspan">
									<td colspan="3" class="text-left">Kembali</td>
									
									<td>
										<?php 
											$kembalian = $baris4['uang'] - $baris2['hargatot'];
											if ($kembalian < 0)
											{
												echo "Uang tidak cukup";
												echo '<td></td>';
											}
											else
											{
												echo $kembalian;
												echo '<td colspan="1">
												<input class="checkPageBtn"  value="Proses" type="submit" name="proses">

												</td>';
												// echo "<script>
												// 		alert('Data Berhasil Ditambahkan ');
												// 		document.location = 'index.php';
												// 	</script>";
												
											}
										?>
										
									</td>
									<!-- <td></td> -->
									<!-- <td colspan="1">
										<a class="checkPageBtn" href="detailsendto.php">Checkout</a>
									</td> -->
								</tr>
								


								
								>
							</tbody>
						</table>
						<br>
						<table class="cart-table text-center">
							<tr id="total_colspan">
									<td colspan="5" class="text-left">Alamat Pemesanan</td>
		
							</tr>
							<tr id="total_colspan">
									<td colspan="3" class="text-left">Username</td>
									
									<td>
									<?php 
										echo $baris5['usr'];
									?>
									</td>
									<td></td>
							</tr>
							<tr id="total_colspan">
									<td colspan="3" class="text-left">alamat</td>
									
									<td>
									<?php 
										echo $baris5['al'];
									?>
									</td>
									<td></td>
							</tr>
							<tr id="total_colspan">
									<td colspan="3" class="text-left">kodepos</td>
									
									<td>
									<?php 
										echo $baris5['kp'];
									?>
									</td>
									<td></td>
							</tr>
							<tr id="total_colspan">
									<td colspan="3" class="text-left">kota</td>
									
									<td>
									<?php 
										echo $baris5['ko'];
									?>
									</td>
									<td></td>
							</tr>
							<tr id="total_colspan">
									<td colspan="3" class="text-left">phone</td>
									
									<td>
									<?php 
										echo  $baris5['phn'];
									?>
									</td>
									<td></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script> 


	<script type="text/javascript" src="cart/lib/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
	<script type="text/javascript" src="cart/lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="cart/lib/rs-plugin/rs.home.js"></script>
	<!-- search-box js -->
    <script src="cart/js/search-box.js"></script>
	<!-- scrollUp js -->
    <script src="cart/js/jquery.scrollUp.min.js"></script>
	<!-- mobilemenu js -->
    <script src="cart/js/jquery.meanmenu.js"></script>
	<!-- main js -->
    <script src="cart/js/main.js"></script>

     
        <!-- JQUERY -->
        
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
  </body>
</html>