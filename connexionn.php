<?php
//Vaiable d'environement pour le script
$host = "localhost";
$user = "malick";
$password = "NDIAYE@5903a";
$bdd = "man";

//Chaine de connection a la base de donnee
$conn = mysqli_connect($host, $user, $password,$bdd);

//Verification, de la possiblite d'acceder a la base de donnee
//mysqli_select_db($bdd) or die("IMpossible d'ouvrir la base de donnee $bdd");
if(!$conn){
    echo "erreur  de connnection";
}
?>