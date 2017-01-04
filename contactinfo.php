<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Read More</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="css/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/css/animate.min.css">
        <link rel="stylesheet" href="css/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/css/style.css">


    <?php
        include 'koding/top.php';
    ?>
</head>
<body>
<?php
include 'koding/preloaader.php';
?>

<section class="search-section">
    <div class="container">            
       <div class="row subscribe-from">
            <div class="col-md-12">             
                <form class="form-inline col-md-12 wow fadeInDown animated">
                <div class="form-group">
                     <input type="email" class="form-control subscribe" id="email" placeholder="Search...">
                     <button class="suscribe-btn" ><i class="pe-7s-search"></i></button>
                </div>
                </form><!-- end /. form -->
            </div>
        </div><!-- end of/. row -->
    </div><!-- end of /.container -->
</section><!-- end of /.news letter section -->  
<section class="slider-section">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators slider-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/slide1.png" width="1648" height="600" alt="" style="max-width: 1648px ;height: 300px">
                        <div class="carousel-caption"> 
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slide2.png" width="1648" height="600" alt="" style="max-width: 1648px ;height: 300px">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item ">
                        <img src="images/slide3.png" width="1648" height="600" alt="" style="max-width: 1648px ;height: 300px">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item ">
                        <img src="images/slide4.png" width="1648" height="600" alt="" style="max-width: 1648px ;height: 300px">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slide5.png" width="1648" height="600" alt="" style="max-width: 1648px ;height: 300px">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item ">
                        <img src="images/slide6.png" width="1648" height="600" alt="" style="max-width: 1648px ;height: 300px">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item ">
                        <img src="images/slide7.png" width="1648" height="600" alt="" style="max-width: 1648px ;height: 300px">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

            </div>
</section>

<!-- Single Project section
================================================== -->
<section id="single-project">
   <div class="container">
      <div class="row">
      <br><br><br>  
         <div class="wow fadeInUp col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-4" data-wow-delay="2.3s">
            <div class="project-info">
                <h4><i class="pe-7s-map-marker" size='height= 30 width=50'></i> Address</h4>
                <p>Jl. Tanimbar no 24, Malang.</hp>
            </div>
            <div class="project-info">
                <h4><i class="pe-7s-phone"></i> Phone</h4>
                <p>(0341) - 321 433</p>
            </div>
            <div class="project-info">
                <h4><i class="pe-7s-mail"></i> Email</h4>
                <p><a href="mailto:info@example.com"> movieshop@gmail.com</a></p>
            </div>
            <div class="project-info">
                <h4><i class="pe-7s-clock"></i> Open Hours:</h4>
                <p>Monday-Friday, 8AM-5PM</p>
            </div>
        </div>

        <div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="1.6s">
        <h1><b>Movie Shop</b></h1>
            <p>Movie Shop indonesia adalah situs web belanja yang menyediakan dvd film yang terdiri dari berbagai jenis film baik lokal maupun internasional.</p>
            <p>Movie Shop Indonesia yang didirikan tahun 2010 oleh Aura Kanza merupakan perusahaan yang menyediakan jasa penjualan DVD dengan kualitas yang sangat baik.</p>
            <p>Pelanggan yang berbelanja melalui situs ini tidak dikenakan biaya pengiriman ke seluruh Indonesia dan garansi pengembalian barang jika pelanggan merasa tidak puas atas produk yang diterimanya.</p>
            

      </div>
   </div>
</section>


<!-- Footer section
================================================== -->
<?php
            include 'koding/footer.php';
?>

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>