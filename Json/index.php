<?php

/**
* Decouverte de php et de git a travers l'utilisationdes fonctionnalitées de php.
*http://php.net/manual/fr
*
*/

include ("./fonctions.php");

$loic = array();

$michel = array(
"nom" => "thierry"
);

$laurent = array(
"prenom" => "tabeat"
);

array_push($loic, $michel, $laurent);


echo json_encode_bwb($loic);
