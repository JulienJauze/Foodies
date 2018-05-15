<?php
include '../scripts/fonctions.php';
 session_start();

//if($_POST["username"] !== ""){
//   $_SESSION["username"]= $_POST["username"];
//}
//
//if(isset($_SESSION["username"])){
//     header('Location: ../index.php');
//}

//if(userConnexionExist($_POST["username"])){
//    session_start();
//    $_SESSION["username"]= $_POST["username"];
//    header('Location: http://php-decouverte.bwb/?content=connexion');
//}else{
//      echo'<p>Identifiant incorrect</p>';
//}


$test2 = $_POST["username"];
if(userConnexionExist($test2)){
    // on réative la session qui a été destroy dans la fonction userExist
    session_start(); 
    
    $_SESSION["username"]= $test2;
    
}
header('Location: http://php-decouverte.bwb/?content=connexion');