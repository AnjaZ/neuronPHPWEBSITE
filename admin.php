<?php
session_start();
include "konekcija.php";
if(isset($_SESSION['korisnik'])):
    if($_SESSION['korisnik']->ulogaId == 2):
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
<link rel="stylesheet" href="css/admin.css">
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

<section id="home" class="main-about parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Admin</h1>
               </div>

          </div>
     </div>
</section>

<section id="about">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">

                    <div class="col-md-6 col-sm-6">
                        <h2>Users</h2>
                        <form>      
                            <input name="name" id="name" type="text" class="feedback-input" placeholder="Name" />   
                            <input name="surname" id="surname" type="text" class="feedback-input" placeholder="Surname" /> 
                            <input name="pass" id="pass" type="text" class="feedback-input" placeholder="Password" />
                            <input name="email" id="email"type="text" class="feedback-input" placeholder="Email" />
                            <select class="ddl" id="ddli">
                            <?php
                                $upituloge = "SELECT * from uloge";
                                $rez = $konekcija->query($upituloge)->fetchAll();
                                foreach($rez as $uloga):
                            ?>
                                <option value="<?= $uloga->idUloge ?>"> <?= $uloga->naziv ?></option>
                                <?php endforeach;?>
                            </select>
                            <input type="button" id="addKor" name="addKor" value="ADD"/>
                        </form>
                        <p id="inserterror"></p> 
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <form>      
                            <select class="ddl" id="korisnici" nema="korisnici">
                            <?php
                                $upituloge = "SELECT idKorisnik, ime FROM korisnici ORDER BY idKorisnik";
                                $rez = $konekcija->query($upituloge)->fetchAll();
                                foreach($rez as $kor):
                            ?>
                                <option value="<?= $kor->idKorisnik ?>">  <?= $kor->idKorisnik ?>&nbsp;<?= $kor->ime ?></option>
                            <?php endforeach;?>
                            </select>
                            <input name="nameu" id="nameu" type="text" class="feedback-input" placeholder="Name" value="" />   
                            <input name="surnameu" id="surnameu" type="text" class="feedback-input" placeholder="Surname" /> 
                            <input name="passu" id="passu" type="text" class="feedback-input" placeholder="Password" />
                            <input name="emailu" id="emailu"type="text" class="feedback-input" placeholder="Email" />
                            <select class="ddl" id="ddlu" name="ddlu">
                            <?php
                                $upituloge = "SELECT * from uloge";
                                $rez = $konekcija->query($upituloge)->fetchAll();
                                foreach($rez as $uloga):
                            ?>
                                <option value="<?= $uloga->idUloge ?>"> <?= $uloga->naziv ?></option>
                            <?php endforeach;?>
                            </select>
                            <input type="button" value="UPDATE" id="updateKor" name="updateKor"/>
                        </form>  
                        <p id="upderror"></p> 
                    </div>
                    
                    <div class="col-md-12 col-sm-12">
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>RoleId</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $select = "SELECT * FROM korisnici k INNER JOIN uloge u ON k.ulogaId=u.idUloge";
                                    $kor = $konekcija->query($select)->fetchAll();
                                    foreach($kor as $k):
                                ?>
                                    <tr>
                                        <td><?= $k->idKorisnik ?></td>
                                        <td><?= $k->ime ?></td>
                                        <td><?= $k->prezime ?></td>
                                        <td><?= $k->sifra ?></td>
                                        <td><?= $k->email ?></td>
                                        <td><?= $k->naziv ?></td>
                                        <td><a href="obrisiKor.php?id=<?= $k->idKorisnik ?>">Delete</a></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-6 col-sm-6">
                        <h2>Posts</h2>
                        <form action="insertPost.php" method="POST" enctype="multipart/form-data" onsubmit="return proveriIns();">      
                            <input name="naslovp" id="naslovp" type="text" class="feedback-input" placeholder="Title" />   
                            <textarea name="textp" id="textp" class="feedback-input" placeholder="Text"></textarea> 
                            <input name="imagesp" id="imagesp" type="file" class="feedback-input" />
                            <input name="altp" id="altp" type="text" class="feedback-input" placeholder="Alt" />
                            <input name="datump" id="datump" type="text" class="feedback-input" placeholder="YYYY-MM-DD" />
                            <select class="ddl" id="userPost" name="userPost">
                            <?php
                                $upit= "SELECT * FROM korisnici ORDER BY idKorisnik";
                                $rez = $konekcija->query($upit)->fetchAll();
                                foreach($rez as $kor):
                            ?>
                                <option value="<?= $kor->idKorisnik ?>">  <?= $kor->ime ?></option>
                            <?php endforeach;?>
                            </select>
                            <input type="submit" value="ADD" id="addPost" name="addPost"/>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <form action="updatePost.php" method="POST" enctype="multipart/form-data" onsubmit="return proveriUpd();">      
                            <select class="ddl" id="postovi" name="postovi">
                            <?php
                                $upit= "SELECT idPost FROM postovi ORDER BY idPost";
                                $rez = $konekcija->query($upit)->fetchAll();
                                foreach($rez as $post):
                            ?>
                                <option value="<?= $post->idPost ?>">  <?= $post->idPost ?></option>
                            <?php endforeach;?>
                            </select> 
                            <input name="naslov" id="naslov" type="text" class="feedback-input" placeholder="Title" />   
                            <textarea name="text" id="text" class="feedback-input" placeholder="Text"></textarea> 
                            <input name="images" id="images" type="file" class="feedback-input" />
                            <input name="alt" id="alt" type="text" class="feedback-input" placeholder="Alt" />
                            <input name="datum" id="datum" type="text" class="feedback-input" placeholder="YYYY-MM-DD" />
                            <select class="ddl" id="userPos" name="userPos">
                            <?php
                                $upit= "SELECT * FROM korisnici ORDER BY idKorisnik";
                                $rez = $konekcija->query($upit)->fetchAll();
                                foreach($rez as $kor):
                            ?>
                                <option value="<?= $kor->idKorisnik ?>">  <?= $kor->ime ?></option>
                            <?php endforeach;?>
                            </select>
                            <input type="submit" value="UPDATE"  id="updPost" name="updPost"/>
                        </form>   
                        <p id="updPostEr"> </p>
                    </div>
        
                    <div class="col-md-12 col-sm-12">
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Text</th>
                                    <th>Images</th>
                                    <th>Alt</th>
                                    <th>Date</th>
                                    <th>User</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $upit ="SELECT * FROM postovi p INNER JOIN slike s ON p.slikaId=s.idSlike INNER JOIN korisnici k ON p.idKor=k.idKorisnik";
                                    $post = $konekcija->query($upit)->fetchAll();
                                    foreach($post as $p):
                                        $tekst=$p->tekst;
                                ?>
                                    <tr>
                                        <td><?= $p->idPost ?></td>
                                        <td class="tekstAdmin"><?= $p->naslov ?></td>
                                        <td class="tekstAdmin"><?php  substr("$tekst", 100)?></td>
                                        <td><?= $p->putanja ?></td>
                                        <td><?= $p->alt ?></td>
                                        <td><?= $p->datum ?></td>
                                        <td><?= $p->ime ?></td>
                                        <td><a href="admin.php?izmeni=<?= $p->idPost ?>">Update post</a></td>
                                        <td><a href="obrisiPost.php?id=<?= $p->idPost ?>">Delete</a></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6">
                        <h2>Comments</h2>
                        <form>      
                        <textarea name="text" id="text" class="feedback-input" placeholder="Comment"></textarea> 
                            <select class="ddl" id="ddlus">
                            <?php
                                $upit= "SELECT * FROM korisnici ORDER BY idKorisnik";
                                $rez = $konekcija->query($upit)->fetchAll();
                                foreach($rez as $kor):
                            ?>
                                <option value="<?= $kor->idKorisnik ?>">  <?= $kor->ime ?></option>
                            <?php endforeach;?>
                            </select>
                            <select class="ddl" id="ddlpos">
                            <?php
                                $upit= "SELECT * FROM postovi ORDER BY idPost";
                                $rez = $konekcija->query($upit)->fetchAll();
                                foreach($rez as $post):
                            ?>
                                <option value="<?= $post->idPost ?>">  <?= $post->naslov ?></option>
                            <?php endforeach;?>
                            </select>
                            <input type="button" value="ADD" id="insKom" name="insKom"/>
                        </form>
                        <p id="inscom"></p> 
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <form>      
                            <select class="ddl" id="komentari" nema="komentari">
                            <?php
                                $upit= "SELECT idKom FROM komentari ORDER BY idKom";
                                $rez = $konekcija->query($upit)->fetchAll();
                                foreach($rez as $kom):
                            ?>
                                <option value="<?= $kom->idKom ?>">  <?= $kom->idKom ?></option>
                            <?php endforeach;?>
                            </select> 
                            <textarea name="text" class="feedback-input" placeholder="Comment" id="com"></textarea> 
                            <select class="ddl" id="ddluser">
                            <?php
                                $upit= "SELECT * FROM korisnici ORDER BY idKorisnik";
                                $rez = $konekcija->query($upit)->fetchAll();
                                foreach($rez as $kor):
                            ?>
                                <option value="<?= $kor->idKorisnik ?>">  <?= $kor->ime ?></option>
                            <?php endforeach;?>
                            </select> 
                            <select class="ddl" id="ddlpost">
                            <?php
                                $upit= "SELECT * FROM postovi ORDER BY idPost";
                                $rez = $konekcija->query($upit)->fetchAll();
                                foreach($rez as $post):
                            ?>
                                <option value="<?= $post->idPost ?>">  <?= $post->naslov ?></option>
                            <?php endforeach;?>
                            </select> 
                            </select>
                            <input type="button" value="UPDATE" id="updKom" name="updKom"/>
                        </form>   
                        <p id="updcom"></p> 
                    </div>
                    
                    <div class="col-md-12 col-sm-12">
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Comment</th>
                                    <th>User</th>
                                    <th>Post</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $select = "SELECT * FROM komentari k INNER JOIN postovi p ON k.postId=p.idPost INNER JOIN korisnici ko ON k.korisnikId=ko.idKorisnik ORDER BY k.idKom";
                                    $kom = $konekcija->query($select)->fetchAll();
                                    foreach($kom as $k):
                                ?>
                                    <tr>
                                        <td><?= $k->idKom ?></td>
                                        <td><?= $k->sadrzaj ?></td>
                                        <td><?= $k->ime?></td>
                                        <td class="tekstAdmin"><?= $k->naslov ?></td>
                                        <td><a href="admin.php?izmeni=<?= $k->idKom ?>">Update</a></td>
                                        <td><a href="obrisiKom.php?id=<?= $k->idKom ?>">Delete</a></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>

                    <div class="clearfix"></div>
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


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/custom.js"></script>
<script src="js/admin.js"></script>
</body>
</html>
<?php

endif;
endif;
?>