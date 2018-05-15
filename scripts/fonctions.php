<?php
session_start();
function getNavbar() {
    $dir = scandir("/var/www/html/serveurweb/php-decouverte.bwb/content");
    foreach ($dir as $files) {
        if ($files !== "." && $files !== "..") {
            if (strpos($files, "_") !== FALSE) {
                $modif = ucfirst(str_replace('_', ' ', implode('.', explode(".", substr_replace($files, "'", strrpos($files, "_", -1), 0), -1))));
                $done = ucfirst(implode('.', explode(".", str_replace("_", "", substr_replace(substr_replace($files, "'", strrpos($files, "_", -1), 0), " ", strrpos($files, "_", -9), 0)), -1)));

                echo '<li><a href="http://php-decouverte.bwb/?content=' . implode('.', explode(".", $files, -1)) . '">' . $done . '</a></li>';
            } else {
                echo '<li><a href="http://php-decouverte.bwb/?content=' . implode('.', explode(".", $files, -1)) . '">' . ucfirst(implode('.', explode(".", $files, -1))) . '</a></li>';
            }
        }
    };
    if (isset($_SESSION["username"])) {
        echo '<li><p>Bonjour '.$_SESSION["username"].'</p><a href="./scripts/disconnect.php"><button><small>Deconnexion</small></button></a></li>';
    }
}

function getMessage() {
    $messages = "/var/www/html/serveurweb/php-decouverte.bwb/datas/message.json";
    $listeMessage = file_get_contents($messages);
    $listeMessageTableau = json_decode($listeMessage, TRUE);
    if ($listeMessageTableau !== NULL) {
        foreach ($listeMessageTableau as $message) {
            echo '<div class="goldenbook">
   <div class="msg">
   <h4>Message n°' . $message['id'] . '</h4>
   <p>' . $message['message'] . '</p>
   </div>
   <div class="msgfooter">
   <h6>Publié par ' . $message['pseudo'] . ', le ' . $message['date'] . '</h6>
   </div>
</div>';
        }
    }
}

function userExist($diablo){
    
$users = "/var/www/html/serveurweb/php-decouverte.bwb/datas/users.json";
$listeUser = file_get_contents($users);
$listeUserTableau = json_decode($listeUser,TRUE);
    if ($listeUserTableau !== NULL){
        foreach ($listeUserTableau as $user) {
            if($user["identifiant"] === $diablo){
                echo'<p>Identifiant déja utilisé</p>';
                session_destroy();
                return true;
          
            }           
        }
    }

}

function userConnexionExist($diablito){
    
$users = "/var/www/html/serveurweb/php-decouverte.bwb/datas/users.json";
$listeUser = file_get_contents($users);
$listeUserTableau = json_decode($listeUser,TRUE);
    if ($listeUserTableau !== NULL){
        foreach ($listeUserTableau as $user) {
            if($user["identifiant"] === $diablito){
               echo'identifiant incorrect<br>';
               session_destroy();
                return true;
          
            }      
        }
    }

}
