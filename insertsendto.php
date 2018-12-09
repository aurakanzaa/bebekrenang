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
  
        ?>


<div class="banner page-head">
    
   
</div>
<!-- SETTINGS -->
<div class="set-content">
    <div class="container">
        <h4 class="view_title">Shipping</h4>
                            <div class="bs-example bs-example-tabs orders-tab" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs" role="tablist" >
                                  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Shipping info</a></li>
                                </ul>
                                <!-- SHIPPING INFOs -->
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tabs-para tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                        <div class="profile-gd" >
                                        <form action="prosessendto.php" method="post" role="form">
                                            <div class="tab-for-sett">              
                                                <h5>alamat </h5>                                                 
                                                    <input type="text" value="" name="alamat" required="" >
                                                <h5>Kode Pos</h5>                                                   
                                                        <input type="text" value="" name="kodepos" maxlength="5" >
                                                
                                                <input  type="submit" value="SAVE" name="save">
                                            </div>
                                            <div class="tab-for-sett">
                                                <h5>Kota</h5>                                                   
                                                        <input type="text" value="" name="kota">
                                                <h5>Telp</h5>                                                    
                                                        <input type="text" value="" name="phone" maxlength="12" >   
                                                <h5> * Form ini berisikan data penerima paket</h5>
                                                 
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




