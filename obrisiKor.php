<?php
    if(isset($_GET['id'])){
        $idkorisnika = $_GET['id'];
        include "konekcija.php";
        $obrisikorisnika = "DELETE FROM korisnici where idKorisnik = :id";
        $prep = $konekcija->prepare($obrisikorisnika);
        $prep->execute([
        ":id" => $idkorisnika
        ]);
        if($prep){
        header("Location: admin.php");
        }else{
        echo "doslo je do greke prilikom brisanja korisnika";
        }
    }