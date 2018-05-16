<?php
include '../scripts/fonctions.php';
session_start();
$users = "/var/www/html/serveurweb/php-decouverte.bwb/datas/users.json";

$listeUser = file_get_contents($users);

$listeUserTableau = json_decode($listeUser,TRUE);
if ($listeUserTableau === NULL){
    $listeUserTableau = array();
}
var_dump($listeUserTableau);

$user = array(
  "nom" => $_POST["nom"],
  "prenom" => $_POST["prenom"],
  "identifiant" => $_POST["identifiant"],
  "email" => $_POST["email"],
  "password" => $_POST["password"]
    
);

array_push($listeUserTableau, $user);

$test = $user["identifiant"];
$listeUser2 = json_encode($listeUserTableau);

if(userExist($test)){
    
    // on réative la session qui a été destroy dans la fonction userExist
    session_start();
    
    // on crée une variable Session pour activer la condition sur une autre page
    $_SESSION["test"]= $test;
    
}else{
$_SESSION["username"] = $user["identifiant"];
file_put_contents($users, $listeUser2);

}
echo '<hr>';
var_dump ($_SESSION["test"]);
var_dump ($user["identifiant"]);
header('Location: http://php-decouverte.bwb/?content=connexion');
