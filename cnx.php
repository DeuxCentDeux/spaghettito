<?php

$dsn = 'mysql:host=109.234.164.69;dbname=sc2chfl1498_Equ13;charset=utf8';
$user = 'sc2chfl1498_Equ138s8R';
$pass = '4asf8aNP85';

try {
    $cnx = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo 'Erreur !';
}

?>
