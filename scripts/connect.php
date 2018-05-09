<?php

session_start();

if($_POST["username"] !== ""){
   $_SESSION["username"]= $_POST["username"];
}

if(isset($_SESSION["username"])){
     header('Location: ../index.php');
}