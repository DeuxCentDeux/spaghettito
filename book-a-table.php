<?php
    include ('cnx.php'); 
    ?>
    
    <?php


    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $msg = htmlspecialchars($_POST['msg'], ENT_QUOTES, 'UTF-8');
    $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
    $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
    


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $date = $_POST['date'];
    
    $sql = "INSERT INTO clients(nomClient,prenomClient,mailClient,messageReserv,dateReservation) VALUES('$nom', '$prenom', '$email', '$msg', '$date')";
    $rs_insert = $cnx->exec($sql);
    
    
    
    if($rs_insert) {
        echo "<script>alert('Insertion valide vous pouvez retourner sur la page précedente');</script>";
    } else {
        $erreur = $cnx->errorInfo();
        echo $erreur[2];
    }