<!-- PRELOADER -->
<?php
session_start();
include 'koneksi.php'; 
?>
        <div id="preloader">
            <div class="preloader-area">
            	<div class="preloader-box">
            		<div class="preloader"></div>
            	</div>
            </div>
        </div>


        <section class="header-top-section">
            <div class="container">
                <div class="row">
                    <div  class="col-md-6">
                        <div class="header-top-content">
                            <ul class="nav nav-pills navbar-left">
                                <li><a href="#"><i class="pe-7s-call"></i><span> (0341) - 321433</span></a></li>
                                <li><a href="#"><i class="pe-7s-mail"></i><span> movieshop@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div  class="col-md-6">
                        <div class="header-top-menu">
                            <ul class="nav nav-pills navbar-right">
                                
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="#">Checkout</a></li>
                                <?php if (empty($_SESSION['username'])) {
                                      ?>
                                <li><a href="login.php"><i class="pe-7s-lock"></i>Login/Register</a></li>
                                <?php } else { $username=$_SESSION['username'];
                           $cek = $koneksi->query("select * from signup where username='$username' ");
                            $comm = $cek->fetch_assoc();
                                    ?> <li><a href="profile.php"><i class="pe-7s-lock"></i><?php echo $comm['full_name'] ;?></a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                    <?php } ?>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <header class="header-section">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><b>Movie</b>Shop</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="contactinfo.php">Contact Info</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right cart-menu">
                        <li><a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <?php if(!empty($_SESSION['username'])) { ?>
                        <li><a href="#"><span> Cart Rp <?php echo $comm['uang']; ?>&nbsp;</span> <span class="shoping-cart">0</span></a></li>
                        <?php }?>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </header>