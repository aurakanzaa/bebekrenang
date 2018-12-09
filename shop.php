<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        

		
		<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DOWNLOADED from htmltemplatesfree.in
		
	Website: 		http://htmltemplatesfree.in/
	Email: 			http://htmltemplatesfree.in/contact-us/
	Facebook: 		https://www.facebook.com/htmltemplatesfree.in/
	Description:    For more templates please visit our site. We have 300+ website templates

	//////////////////////////////////////////////////////
	 -->
		
		<?php
            include 'koding/top.php';
        ?>
        

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
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

        <!-- FEATURED PRODUCTS -->
        <section class="featured-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>FEATURED PRODUCTS</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-menu">
                            <ul class="button-group sort-button-group">
                                <li class="button active" data-category="all">All</li>
                                <li class="button" data-category="cartoon">Cartoon</li>
                                <li class="button" data-category="action">Action</li>
                                <li class="button" data-category="horror">Horror</li>
                                <li class="button" data-category="romance">Romance</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row featured isotope">
                <?php
                    $tampil=$koneksi->query("SELECT * FROM barang where stok>0");
                    while ($baris=$tampil->fetch_assoc()) {    
                ?>
                    <div class="col-md-3 col-sm-6 col-xs-12 <?php echo $baris['genre'] ?> featured-items isotope-item">
                        <div class="product-item">
                            <img src="images/product/<?php echo $baris['image']; ?>" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="addcart.php?idbarang=<?php echo $baris['idBarang'];?>"><i class="pe-7s-cart" name=""></i>Add to Cart</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3><?php echo $baris['judul']?></h3>
                                    <span><?php echo $baris['harga']?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </section>
<!-- END FEATURED PRODUCT -->



         <?php
            include 'koding/footer.php';
       	?>

        <!-- JQUERY -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>