<?php
include '../scripts/fonctions.php';
?>
<h1 class="title">Le Livre d'OR</h1>
 

<form method="POST"action="../scripts/commentary.php">
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
getMessage()  
?>