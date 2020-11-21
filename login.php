<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="description" content="Art is the lie that enables us to realize the truth">
  <meta name="keywords" content="art">
  <meta name="author" content="Anja Zubac">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Sign-Up/Login Form</title>
  <link rel="shortcut icon" href="images/logo.png" />
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body id="poz">

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h2>Sign Up for Free</h2>
          
          <form>
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" id="ime" name="ime" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" id="pre" name="pre" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="mejl" name="mejl"/>
          </div>
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" id="pass" name="pass"/>
          </div>
          
          <button type="button" class="button button-block" name="reg" id="reg"/>Get Started</button>
          <br/>
          <a href="index.php"><i>Maybe later</i></a>
          <p id="poruka"></p>
          </form>

        </div>
        
        <div id="login">   
          <h2>Welcome Back!</h2>
          <?php if(isset($_SESSION['korisnik'])): 
            header("location: index.php");
          else:?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            
              <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="email" id="email" name="email"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password"  id="sifra" name="sifra"/>
            </div>
            
            <button type="button" class="button button-block" name="login" id="login" />Log In</button>
            <br/>
            <a href="index.php"><i>Not now</i></a>
            <p id="greska"></p>
            </form>
          <?php endif;?> 
          <?php if(isset($_SESSION['greske'])){
             $greska=$_SESSION['greske']; 
             echo($greska); 
             unset($_SESSION['greske']);
             } 
          ?>
        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  
  <script src="js/jquery.js"></script>
  <script  src="js/index.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
