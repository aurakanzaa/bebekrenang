<?php
include 'koneksi.php';
include 'koding/top.php';

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>Profile</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 
<link href="profile/css/bootstrap.css" rel="stylesheet">
<link href="profile/css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<!--animate-->
<link href="profile/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="profile/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<script type="text/javascript" src="profile/js/jquery.min.js"></script>

</head>
<body>
 <?php
        include 'koding/preloaader.php';
        $id=$_SESSION['username'];
$query = $koneksi->query("SELECT * FROM signup WHERE username='$id'");
$check = $query->fetch_assoc();
        ?>

<div class="banner page-head">
	
	<div class="container">
		<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.png) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Your Profile</p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								
							</li>
							<div class="clearfix"> </div>
						</ul>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<!-- SETTINGS -->
<div class="set-content">
	<div class="container">
		<h4 class="view_title">SETTINGS</h4>
							<div class="bs-example bs-example-tabs orders-tab" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Personal info</a></li>
								</ul>
								<!-- PERSONAL INFO -->
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tabs-para tab-pane fade in active" id="home" aria-labelledby="home-tab">
										<div class="profile-gd">
										<form action="prosesProfile.php" method="post" role="form">
											<div class="tab-for-sett">				
												<h5>nama</h5>													
													<input type="text" value="<?php echo $check['full_name'] ?>" name="full_name"  required="">
												<h5>Email </h5>													
													<input type="text" value="<?php echo $check['email'] ?>" name="email" required="">
												<h5>no hp</h5>													
													<input type="text" value="<?php echo $check['hp'] ?>" name="hp"  required="" maxlength="12">
												<h5>jenis kelamin</h5>
												<div class="swit-radio-thre">								
													<div class="check_box_thre"> 
														<div class="radio_thre"> 
															<label><input type="radio" name="jenis_kelamin" value="perempuan" checked=""><i></i>P</label> 
														</div>
													</div>
													<div class="check_box_thre"> 
														<div class="radio_thre"> 
															<label><input type="radio" name="jenis_kelamin" value="laki-laki"><i></i>L</label> 
														</div>
													</div>	
													<div class="clearfix"></div>	
												</div>
												<h5>tanggal lahir</h5>	
													<input type="date" name="<?php echo $check['tgl_lahir'] ?>" ><br>
												
											</div>
											<div class="tab-for-sett">
												<h5>Alamat</h5>														
														<input type="text" value="<?php echo $check['alamat'] ?>" name="alamat">
												<h5>Kode Pos</h5>													
														<input type="text" value="<?php echo $check['kodepos'] ?>" name="kodepos" maxlength="5">	
												<h5>Kota</h5>													
														<input type="text" value="<?php echo $check['kota'] ?>" name="kota">
												<h5>No Telp Lainnya</h5>													
														<input type="text" value="<?php echo $check['hp_lain'] ?>" name="hp_lain" maxlength="12">	

												 <input  type="submit" value="SAVE" name="save">
											</div>	
											<div class="clearfix"></div>
											
										</form>
										</div>
									</div>
								</div>
							</div>
	</div>
</div>
	
<?php
            include 'koding/footer.php';
       ?>
<!-- for bootstrap working -->
		<script src="profile/js/bootstrap.js"></script>
		<script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
<!-- //for bootstrap working -->
</body>
</html>


