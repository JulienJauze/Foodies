<?php
if($_GET['content'] === "cartes"){
    include("./content/cartes.php");
}elseif($_GET['content'] === "contact"){
    include("./content/contact.php");
}elseif($_GET['content'] === "connexion"){
    include('./content/connexion.php');
}elseif($_GET['content'] === "livre_d_or"){
    include('./content/livre_d_or.php');
}elseif($_GET['content'] === "accueil"){
    include('./content/accueil.php');
}
?>

<!--if(!isset($_GET['content'])){
	include ('./contents/accueil.php');;
}else{
	include('./contents/'.$_GET['content'].'.php');
}-->