<?php
if($_GET['content'] === "cartes"){
    include("./content/cartes.php");
}elseif($_GET['content'] === "contact"){
    include("./content/contact.php");
}elseif($_GET['content'] === "login"){
    include('./content/login.php');
}elseif($_GET['content'] === "livre d' or"){
    include('./content/livre_d_or.php');
}elseif($_GET['content'] === "accueil"){
    include('./content/accueil.php');
}
?>