<?php

date_default_timezone_set('Europe/Brussels');
$hote='localhost';
$nomBD='projet_patro';
$user='root';
$mdp='x+43gDV7^.Ky'; 

try {
 $bd=new PDO('mysql:host='.$hote.';dbname='.$nomBD, $user, $mdp);
 $bd->exec("SET NAMES 'utf8'");
}
catch (Exception $e) {
 echo "Erreur de connexion à la BD : $e";
}

?>