<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login & Sign Up</title>
  
      <link rel="stylesheet" href="/css/cssLogin.css">
      <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
      <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="css/style3.css">
      <link rel="icon" href="images/icon.png">
  
</head>

<body>
  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
 
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form class="" action="loginProses.php" method="post">
      <div class="input-container">
        <input type="text" name="username" required="required" maxlength="10" />
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" required="required" maxlength="8" />
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <?php
            if(isset($_GET['pesan'])){
              if($_GET['pesan']=='gagal'){
                echo "<div class= 'alert alert-danger' role='alert'>Failure to Login</div>";
              }
            }
          ?>
      <div class="button-container">
        <button  href="" name="login" type="submit"><span>Go</span></button>
      </div>
    </form>


  </div>
  <div class="card alt">
    <div class="toggle"> 

     </div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form class="" action="signupProses.php" method="post">
      <div class="input-container">
        <input type="text" name="full_name" required="required"/>
        <label for="#{label}">Full Name</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" name="username" required="required" maxlength="10" />
        <label for="#{label}">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" required="required" maxlength="8" />
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
       <!--  <label for="#{label}">Role</label>
            <select name="rolee" >
              <option value="" disabled selected>Pilih :</option>
              <option value="admin">Admin</option>
              <option value="user">User</option>
            </select> -->
        <!-- <div class="bar"></div> -->
      </div>

      <div class="button-container">
        <button href="" name="register" type="submit"><span>Next</span></button>
      </div>
    </form>
  </div>
</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index2.js"></script>

</body>
</html>
