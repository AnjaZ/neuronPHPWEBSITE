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

<title>Neuron Gallery</title>
<link rel="shortcut icon" href="images/logo.png" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
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

<section id="home" class="main-gallery parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Image Gallery</h1>
               </div>

          </div>
     </div>
</section>

<!-- Gallery Section -->

<section id="gallery">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <h2>Beautiful Images..</h2>
                    <p>“To me, photography is an art of observation. It’s about finding something interesting in an ordinary place… I’ve found it has little to do with the things you see and everything to do with the way you see them.”</p>
                    <span>— Elliott Erwitt</span>
                    <p>“People spot a big black lens, and they worry about what they're doing, or how their hair looks. Nobody see the person holding the camera.” </p>
                    <span>― Erica O'Rourke</span>
                    <?php 
                    include "konekcija.php";
                    $str = 0;

                         if(isset($_GET['str'])){
                          $str = ($_GET['str']) * 2;
                          }

                         $select = "SELECT * FROM slike
                               WHERE galerija=1
                               LIMIT $str, 2";

                         $slike = $konekcija->query($select)->fetchAll();
                                
                         foreach($slike as $slika):
                    ?>
                         <div class="col-md-6 col-sm-6">
                         <div class="gallery-thumb">
                              <a href="<?= $slika->putanja ?>" class="image-popup">
                                   <img src="<?= $slika->putanja ?>" class="img-responsive" alt="<?= $slika->alt ?>">
                              </a>
                         </div>
                         </div>
                     <?php endforeach;?>

               </div>
          </div>
          <div id="str">
                    <ul class="nav nav-pills">
                    <li><a href="gallery.php?str=0"><b> 1 </b></a></li>
                    <li><a href="gallery.php?str=1"><b> 2 </b></a></li>
                    <li><a href="gallery.php?str=2"><b> 3 </b></a></li>
                    </ul>
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
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/custom.js"></script>

</body>
</html>