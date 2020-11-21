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

<section id="home" class="main-single-post parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Single Post</h1>
               </div>

          </div>
     </div>
</section>

<!-- Blog Single Post Section -->

<section id="blog-single-post">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-single-post-thumb">
                         
                         <?php
                         include "konekcija.php";
                         if(isset($_GET['post'])){
                              $brPosta = ($_GET['post']);
                         }
                         $upit ="SELECT * FROM postovi p INNER JOIN slike s ON p.slikaId=s.idSlike INNER JOIN korisnici k ON p.idKor=k.idKorisnik WHERE idPost=:id";
                         $izvrsenje=$konekcija->prepare($upit); 
                         $izvrsenje->bindParam(":id",$brPosta);
                         $rezultat=$izvrsenje->execute();
                         $post=$izvrsenje->fetch();
                         $upit2 = "SELECT COUNT(k.idKom) as broj FROM komentari k INNER JOIN postovi p on p.idPost=k.postId where p.idPost=".$post->idPost;
                         $rezultat2 = $konekcija->query($upit2);
                         $brojKom= $rezultat2->fetch();

                            echo "<div class='blog-post-title'>
                                   <h2>$post->naslov</a></h2>
                              </div>
                              <div class='blog-post-format'>
                                   <span> $post->ime $post->prezime</span>
                                   <span><i class='fa fa-date'></i>$post->datum </span>
                                   <span><i class='fa fa-comment-o'></i> $brojKom->broj </span>
                              </div>
                              <div class='blog-post-des'>
                                   <blockquote>'Art is what we call...the thing an artist does. It's not the medium or the oil or the price or whether it hangs on a wall or you eat it. What matters, what makes it art, is that the person who made it overcame the resistance, ignored the voice of doubt and made something worth making. Something risky. Something human. Art is not in the ...eye of the beholder. It's in the soul of the artist.' </blockquote>
                              
                                   <div class='blog-post-image'>
                                   <img src=' $post->putanja' class='img-responsive' alt=' $post->alt'>
                                   </div>
                                   <p> $post->tekst </p>
                              </div>";
                         ?>

                         <div class="blog-comment">
                              <h3>Comments</h3>
                         <?php
                              if(isset($_GET["post"])){
                                   $id = $_GET["post"];
                                   $upit = "SELECT * FROM komentari k INNER JOIN korisnici ko ON k.korisnikId=ko.idKorisnik WHERE postId=:id LIMIT 3";
                                   $izvrsenje=$konekcija->prepare($upit); 
                                   $izvrsenje->bindParam(":id",$id); 
                                   $rezultat=$izvrsenje->execute();
                                   $kom=$izvrsenje->fetchAll();
                                   foreach($kom as $k){
                                        echo "<div class='media'>
                                             <div class='media-body'>
                                                  <h3 class='media-heading'>$k->ime $k->prezime</h3>
                                                  <p>$k->sadrzaj</p>
                                             </div>
                                        </div> ";
                                   }
                              }
                              ?>
                         </div>
                    
                     <?php
                         if(isset($_SESSION['korisnik'])){
                         
                         echo"<div class='blog-comment-form'>
                              <h3>Leave a Comment</h3>
                                   <form method='post'>
                                        <textarea name='message' rows='5' class='form-control' id='message' placeholder='Message' message='message'></textarea>
                                        <div class='col-md-3 col-sm-4'>
                                             <input name='komentar' type='button' class='form-control' id='komentar' value='Post Your Comment'>
                                             <input type='hidden' value=".$brPosta." id='hidden' name='hidden'>
                                        </div>
                                   </form>
                                   <p id='kom'>Message can't be emprty</p>
                                   
                         </div>";
                         }
                    ?>
                    
                    </div>
          </div>
     </div>
</section>

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


<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/custom.js"></script>
<script src="js/main.js"></script>
</body>
</html>