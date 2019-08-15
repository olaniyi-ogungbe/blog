<?php

include ('connection.php')




?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Olaniyi Ogungbe's Blog</title>
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
            <div align="center"><button><a href="admin.php">LOGIN</a></button></div>
          
      </div>
    </section>

    <div class="container">
      <div class="row">
        <!-- Posts -->
        <main class="post blog-post col-lg-8"> 
          <div class="container">
            <div class="post-single">
              
              <?php
                  $get_data = "SELECT * FROM blogposts";
                  $query_data = mysqli_query($conn, $get_data);
                  while ($row_data = mysqli_fetch_array($query_data,MYSQLI_ASSOC)) {
                    $blogtitle = $row_data ['blogtitle'];
                    $blogposts = $row_data ['blogposts'];
                  ?>   
              <div class="post-details">                
                <h1> <?php  echo $blogtitle; ?><i class="fa fa-bookmark-o"></i></a></h1>
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/downloaduu.png" alt="..." class="img"></div>
                    <div class="title"><span>Olaniyi Ogungbe</span></div></a>
                  <div class="d-flex align-items-center flex-wrap">       
                    <div class="date"><i class="icon-clock"></i> <?php $date = date('Y-m-d ');  echo $date ;?></div>
                    <div class="views"><i class="icon-eye"></i> 0</div>
                    <div class="comments meta-last"><i class="icon-comment"></i>0</div>
                  </div>
                </div>
                <div align="justify" class="post-body">
                    <p> <?php echo $blogposts; 
                   ?> 
                </div>

                <?php }?>

              


                
              
               
                
              </div>
            </div>
          </div>
        </main>


        <aside class="col-lg-4">
          
          <!-- Widget [Latest Posts Widget]        -->
          <div class="widget latest-posts">
            <header>
              <h3 class="h6">Latest Posts</h3>
            </header>
            <div class="blog-posts">
                <div class="item d-flex align-items-center">
                   <?php
                  $get_data = "SELECT * FROM blogposts";
                  $query_data = mysqli_query($conn, $get_data." LImit 4");
                  while ($row_data = mysqli_fetch_array($query_data,MYSQLI_ASSOC)) {
                    $blogtitle = $row_data ['blogtitle']; ?>   
                  <div class="image"><img src="img/downloaduu.png" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>
                    <?php  echo $blogtitle; }?>
                    
                  </strong>
                  </div>
                  </div>
</div>
</div>

              
          
       
  </aside>
    
    
    
    
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
   
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