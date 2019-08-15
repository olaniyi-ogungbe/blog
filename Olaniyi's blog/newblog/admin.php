<?php 

	include ('connection.php');
	error_reporting(0);
	$username = $_POST['username'] ;
	$password = $_POST['password'];
	

	$username = stripcslashes($username);
	$password = stripcslashes($password);	
	$username = mysqli_real_escape_string($username);
	$password = mysqli_real_escape_string($userpass);

	$result = mysqli_query("SELECT * FROM login WHERE username ='$username' and password = '$password'");
	$row = mysqli_fetch_array($result);
	if($row ['username'] == $username && $row['password'] == $password){
		echo " Welcome !!!".$row['username'];
	} else {
		echo "Login Failed!";
	}
	
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Olaniyi Ogungbe's Blog - Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    <link rel="stylesheet" href="vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    
    <!-- Hero Section-->
    <section style="background: url(img/hero.jpg); background-size: cover; background-position: center center" class="hero">
      <div class="container">
       
            <h3 align="center">Welcome To</h3>
            <h1 align="center"> Olaniyi Ogungbe's Blog</h1><br>
            <h6 align="center"> The Home of the latest Movies and Tv Series Gist.</h6>
          
      </div>
    </section>
<body>

	<div style="background: grey;">
	<form action="dashboard.php" method="POST">
	<div class="container" style="padding: 100px; ">
  <div class="row">
    <div class="col-md-3">
   
    </div>
    <div class="col-md-6">
    <div class="form-group">
   <label for="formGroupname">Username</label>
   <input type="text" class="form-control" name="username" placeholder="Username" required><br>
	</div>

   <div class="form-group">
    <label for="formGroupemail">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password" required >
  </div>

   
  

  <input  type="submit" name="submit" value="Login"/>

	</form>
	</div>
</div>
    
    </div>
  </div>
</div>
</div>
    
    </div>
  </div>
</div>

	
<!-- Page Footer-->
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              <h6 class="text-white">Olaniyi Ogungbe's Blog</h6>
            </div>
            <div class="contact-details">
              <p>Contact Us On</p>
              <p>Phone: (234) 809317532</p>
              <p>Email: <a href="olaniyiogungbe@gmail.com">olaniyiogungbe@gmail.com</a></p>
              <ul class="social-menu">
                <li class="list-inline-item"><a href="https://facebook.com/olaniyi.ogungbe"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="https://twitter.com/olaniyi.ogungbe"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="https://instagram.com/olaniyi.ogungbe"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
          
          
     <div class="container">
      <div >
              <p align="center">&copy; 2018. All rights reserved.</p>
            
              <p align="center"> Designed By <a href="https://olaniyiogungbe.wordpress.com" class="text-white">@olaniyi</a>
             
              </p>
            </div>
      </div>
            
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>