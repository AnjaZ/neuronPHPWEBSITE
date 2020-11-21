<?php
    if(isset($_GET['id'])){
        $idPosta = $_GET['id'];
        include "konekcija.php";
        $obrisi = "DELETE FROM postovi WHERE idPost = :id";
        $prep = $konekcija->prepare($obrisi);
        $prep->execute([
        ":id" => $idPosta
        ]);
        if($prep){
        header("Location: admin.php");
        }else{
        echo "doslo je do greke prilikom brisanja posta";
        }
    }