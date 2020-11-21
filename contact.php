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

<section id="home" class="main-contact parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Contact Us</h1>
               </div>

          </div>
     </div>
</section>

<!-- Contact Section -->

<section id="contact">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <h2>Say hello..</h2>

                    <form action="#" method="post">
                         <div class="col-md-4 col-sm-4">
                              <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                         </div>
                         <div class="col-md-4 col-sm-4">
                              <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                      	 </div>
                         <div class="col-md-4 col-sm-4">
                              <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                      	 </div>
                         <div class="col-md-12 col-sm-12">
                              <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
                         </div>
                         <div class="col-md-3 col-sm-6">
                              <input name="button" type="button" class="form-control" id="posalji" name="posalji" value="Send">
                         </div>
                         <div class="col-md-12 col-sm-12">
                              <p id="gre"></p>
                         </div>
                    </form>
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
<script src="js/main.js"></script>
</body>
</html>