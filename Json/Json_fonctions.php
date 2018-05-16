<?php


//Fonction qui prend un tableau en argument et qui le transforme en une
//chaine de caractère au format Json.

function json_encode_bwb($array){

$jsonString = "";

$stringSeparator = ",";
$stringBegin = "[";
$stringEnd = "]";
$stringAccOuv = "{";
$stringAccFerm = "}";
$stringJulien = ":";

if(!is_array($array)){
   return false;}
$jsonString .= $stringBegin;
foreach($array as $key => $value){
	if(is_array($value)){

		foreach($value as $k => $v){
	$jsonString .= $stringAccOuv.$k.$stringJulien.$v.$stringSeparator;

}
$jsonString = substr($jsonString,0, count($jsonString)-2);
$jsonString .= $stringAccFerm.$stringSeparator;
	}

}
$jsonString = substr($jsonString, 0, count($jsonString)-2);

$jsonString .= $stringEnd;

return $jsonString;

}
    
    
    
    
    
    
    
    
    
