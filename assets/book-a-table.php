<?php
include ('cnx.php'); 

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email non valide";
        exit;
    }

    $nom = filter_var($nom, FILTER_SANITIZE_STRING);
    $prenom = filter_var($prenom, FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);    $date = filter_var($date, FILTER_SANITIZE_STRING);
    $pers = filter_var($date, FILTER_SANITIZE_NUMBER_INT);

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $date = $_POST['date'];
    $pers = $_POST['pers']
    
    $sql = "INSERT INTO clients(nomClient,prenomClient,mailClient,messageReserv,dateReservation,pers) VALUES('$nom', '$prenom', '$email','$msg', '$date','$pers')";
    
    $rs_insert = $cnx->exec($sql);
    

    
    if ($rs_insert) {
        echo "<script>alert('Insertion valide vous pouvez retourner sur la page précedente');</script>";
    } else {
        $erreur = $cnx->errorInfo();
        echo $erreur[2];
    }

?>