<html>
    <head>
        <meta charset="utf-8"/>
    </head>

<?php

session_start();
$messages = "/var/www/html/serveurweb/php-decouverte.bwb/datas/message.json";
$date = date("d/m/Y, H:i");

// lecture du fichier "message.json" et récupération du contenu en chaine de caractéres
$listeMessage = file_get_contents($messages);


// on décode la chaine de caractéres json
$listeMessageTableau = json_decode($listeMessage, TRUE);
if ($listeMessageTableau === NULL){
    $listeMessageTableau = array();
}
$newID = end($listeMessageTableau)["id"]+1;

// récupération du message du livre d'or par la requete POST
$message = array(
    "pseudo" => $_SESSION["username"],
    "message" => $_POST["message"], 
    "date" => $date,
    "id" => $newID
    );


//  on stocke le message dans la variable "tableau" qui a décodé le fichier json
array_push($listeMessageTableau,$message);


// on encode le "tableau" au format "json"

$listeMessage2 = json_encode($listeMessageTableau);

// on ouvre, ecrit, et ferme le fichier "json"

file_put_contents($messages, $listeMessage2);

header('Location: http://php-decouverte.bwb/?content=livre_d_or');
var_dump($listeMessage2);
echo is_file($messages);

//echo file_put_contents($messages,"Hello World. Testing!");
?>


</html>


