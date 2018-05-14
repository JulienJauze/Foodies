<?php
include '../scripts/fonctions.php';

?>
<div class="container text-center"> 
<div class="row">
    <div class="col-sm-6">
        <h1 class="title">Connexion</h1>
<br><form method="POST"action="./scripts/connect.php">
            Identifiant:<br>
            <input type="text" name="username" value="">
            <br>
            Mot de Passe:<br>
            <input type="password" name="password" value="">
            <br><br>
            <input type="submit" value="Envoyer">
        </form> 
    </div>
    <div class="col-sm-6">
    <h1 class="title">Inscription</h1>

<form method="POST"action="./scripts/inscription.php">
            Nom:<br>
            <input type="text" name="nom" value="">
            <br>
            Prenom:<br>
            <input type="text" name="prenom" value="">
            <br>
            Identifiant:<br>
            <input type="text" name="identifiant" value="">
            <?php userExist($_SESSION["test"]);?>
            <br>
            Email:<br>
            <input type="text" name="email" value="">
            <br>
            Mot de Passe:<br>
            <input type="password" name="password" value="">
            <br>
            
            <br>
            <input type="submit" value="Envoyer">
        </form> 
    </div>
</div>
</div>
    

                                       
