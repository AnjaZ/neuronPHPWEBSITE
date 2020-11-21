<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="Art is the lie that enables us to realize the truth">
<meta name="keywords" content="art">
<meta name="author" content="Anja Zubac">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Neuron</title>
<link rel="shortcut icon" href="images/logo.png" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="index.php" class="navbar-brand">Neuron</a>
          </div>
          <div class="collapse navbar-collapse">
          <?php
          include "meni.php";
          ?>
          </div>

  </div>
</div>

<!-- Home Section -->

<section id="home" class="main-about parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>About Us</h1>
               </div>

          </div>
     </div>
</section>

<!-- About Section -->

<section id="about">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">

                    
                    <div class="col-md-6 col-sm-6">
                         <input type="text" name="ok" id="ok"/>
                    </div>
                    <div class="col-md-6 col-sm-6">
                              <img src="images/about-image.jpg" class="img-responsive" alt="About Image">
                    </div>
                    

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-4">
                         <img src="images/about-image1.jpg" class="img-responsive" alt="Blog Image">
                         <h3>Section One</h3>
                         <p>Pellentesque lobortis velit mi, sed volutpat enim facilisis at. Maecenas quis pulvinar neque, non dapibus orci.</p>
                         
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <img src="images/about-image2.jpg" class="img-responsive" alt="Blog Image">
                         <h3>Section Two</h3>
                         <p>Pellentesque lobortis velit mi, sed volutpat enim facilisis at. Maecenas quis pulvinar neque, non dapibus orci.</p>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <img src="images/about-image3.jpg" class="img-responsive" alt="Blog Image">
                         <h3>Section Three</h3>
                         <p>Pellentesque lobortis velit mi, sed volutpat enim facilisis at. Maecenas quis pulvinar neque, non dapibus orci.</p>
                    </div>
					
                    <h3>One Column</h3>
                    <p>Fusce finibus ac orci ut feugiat. Duis accumsan dui non augue ullamcorper, at porta elit lacinia. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras at est non quam mattis hendrerit. Fusce purus massa, pretium malesuada eros nec, feugiat iaculis sem.</p>
               </div>

          </div>
     </div>
</section>

<!-- Footer Section -->

<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <h3>Neuron Studio</h3>
                    <p>This site is where you can come and enjoy. Creativity and freedom are just what matters.</p>
                    <div class="footer-copyright">
                         <p>Copyright &copy;Anja Zubac</p>
                    </div>
               </div>

               <div class="col-md-4 col-md-offset-1 col-sm-6">
                    <h3>Talk to us</h3>
                    <p><i class="fa fa-globe"></i> 512 Delicious Street, San Francisco, CA 10880</p>
                    <p><i class="fa fa-phone"></i> 010-020-0990</p>
                    <p><i class="fa fa-save"></i> anja.zubac.27.17@ict.edu.rs</p>
               </div>

               <div class="clearfix col-md-12 col-sm-12">
                    <hr>
               </div>

               <div class="col-md-12 col-sm-12">
               <?php 
                    include "footer.php";
               ?>
               </div>
               
          </div>
     </div>
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/custom.js"></script>

</body>
</html>