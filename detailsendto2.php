<?php
include 'koding/top.php';
include 'koding/preloaader.php';
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
 include'koneksi.php';
 $username=$_SESSION['username'];
 $query = $koneksi->query("SELECT * FROM sendto WHERE username='$username'");
 $baris = $query->fetch_assoc();
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
		<h4 class="view_title">DETAIL PENGIRIMAN</h4>
							<div class="bs-example bs-example-tabs orders-tab" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Personal info</a></li>
								</ul>
								<!-- PERSONAL INFO -->
									<div id="myTabContent" class="tab-content">
										<div role="tabpanel" class="tabs-para tab-pane fade in active" id="home" aria-labelledby="home-tab">
											<form action="rincian.php" method="post" role="form" class="contactForm">
											<div class="profile-gd">
												<ul class="pro-left">
													<li>Alamat</li>
													<li>Kodepos</li>
													<li>Kota</li>
													<li>Phone</li>
													
												</ul>
												<ul class="pro-right">
											
													<li>: <?php echo $baris['alamat']; ?> </li> 
													<li>: <?php echo $baris['kodepos']; ?><a href="editsendto.php" > Edit</a></li>
													<li>: <?php echo $baris['kota']; ?></li>
													<li>: <?php echo $baris['phone']; ?></li>
													&nbsp; <br>
													<input  type="submit" value="NEXT" name="next" >

												</ul>
												 
												<div class="clearfix"></div>
												
											</div>
											</form>
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


