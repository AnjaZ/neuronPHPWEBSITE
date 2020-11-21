<?php
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);

    if(isset($_POST["posalji"])){
    $ime = $_POST["ime"];
    $email = $_POST["email"];
    $poruka = $_POST["poruka"];
    $reIme = "/^[A-Z][a-z]{2,14}(\s[A-Z][a-z]{2,14})*$/";
    $reEmail = "/^\w+([\.\-]\w+)*@\w+([\.\-]\w+)*(\.\w{2,4})+$/";
    $validno = true;
    if(!preg_match($reIme, $ime)){
    $validno = false;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $validno = false;
    }
    if(empty($poruka)){
    $validno = false;
    }
    if($validno){
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0; 
            
            $mail->isSMTP();         
            $mail->Host = 'smtp.gmail.com';  

            $mail->SMTPAuth = true;         
            $mail->Username = 'auditorne.php@gmail.com'; 
            $mail->Password = 'Sifra123';   
            $mail->SMTPSecure = 'tls';                    
            $mail->Port = 587;  
            
            $mail->setFrom('anjazubac1@gmail.com', 'Ko salje');
            $mail->addAddress('anjazubac@gmail.com', 'Anja Zubac');

            $mail->isHTML(true);

            $mail->Subject= $mail->Body = $poruka;
            $mail->send();
            
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
}