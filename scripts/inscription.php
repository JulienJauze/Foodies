<?php

$users = "/var/www/html/serveurweb/php-decouverte.bwb/datas/users.json";

$listeUser = file_get_contents($user);

$listeUserTableau = json_decode($listeUser,TRUE);
if ($listeUserTableau === NULL){
    $listeUserTableau = array();
}

$user = array(
  "nom" => $_POST["nom"],
  "prenom" => $_POST["prenom"],
  "identifiant" => $_POST["identifiant"],
  "email" => $_POST["email"],
  "password" => $_POST["password"],
    
);

array_push($listeUserTableau, $user);

$listeUser2 = json_encode($listeUserTableau);

file_put_contents($users, $listeUser2);

header('Location: http://php-decouverte.bwb/?content=connexion');
