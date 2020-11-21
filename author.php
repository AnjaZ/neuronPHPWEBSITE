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

<!-- Contact Section -->

<section id="contact">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <div class="col-md-6 col-sm-6" >
                            <img src="images/anja.png" alt="anjaZubac"/>
                         </div>
                         <div class="col-md-4 col-md-offset-1 col-sm-6">
                            <h3>Talk to me</h3>
                            <p><i class="fa fa-globe"></i> 512 Delicious Street, San Francisco, CA 10880</p>
                            <p><i class="fa fa-phone"></i> 010-020-0990</p>
                            <p><i class="fa fa-save"></i> anja.zubac.27.17@ict.edu.rs</p>
                        </div>
                         <div class="col-md-12 col-sm-12 span">
                         <blockquote>You control your destiny -- you don't need magic to do it. And there are no magical shortcuts to solving your problems.</blockquote>
                         <span>-Merina</span>
                         <blockquote>Mind needs books like a sword needs a whetstone.</blockquote>
                         <span>-Tyrion Lannister</span>
                         <blockquote>The price of freedom’s high. Always has been. It’s a price I’m willing to pay.</blockquote>
                         <span>-Capetan America</span>
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