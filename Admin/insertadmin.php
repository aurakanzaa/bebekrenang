<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include'koding/top.php';
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
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Register Admin</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		    <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="prosesinsertadmin.php" method="post" >
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="full_name">
                              </div>
                           </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="username">
                              </div>
                           </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="email">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-2">
                                  <input type="Password" class="form-control" name="password">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-6 col-sm-2 control-label" >Role</label>
                              <div class="col-sm-5">
                                  <div class="btn-group">
                                      <select name="role">
                                        <option value="admin">Admin</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="" align="right"> <input type="submit" class="btn btn-round btn-primary btn-lg" name="save">
                          </div>
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Aura Kanza C | TI - 2F | 1541180188
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

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

