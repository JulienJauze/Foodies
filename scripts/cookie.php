<?php
include '../scripts/fonctions.php';
session_start();

// script cookie
$test2 = $_POST["username"];
userCookie($test2);

