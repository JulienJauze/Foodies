<?php
?>
<h1>Le Livre d'OR</h1>
 

<form method="POST"action="./scripts/commentary.php">
<div>
<fieldset> <legend>Votre Nom</legend>
<input type="text" name="username" />
</fieldset>
<fieldset><legend>Postez un message pour le livre d'or</legend>
<textarea cols="66" rows="6" name="message" value="message"></textarea>
</fieldset>
    <br><input type="submit" value="Envoyer" />
</div>
</form>

    <?php

$messages = "/var/www/html/serveurweb/php-decouverte.bwb/datas/message.json";

$listeMessage = file_get_contents($messages);
$listeMessageTableau = json_decode($listeMessage, TRUE);
//if ($listeMessageTableau !== NULL){
    foreach($listeMessageTableau as $message){
        echo '<div class="goldenbook">
   <div class="msg">
   <h4>Message n°'.$message['id'].'</h4>
   <p>'.$message['message'].'</p>
   </div>
   <div class="msgfooter">
   <h6>Publié par '.$message['pseudo'].', le '.$message['date'].'</h6>
   </div>
</div>';
    }
//}

?>