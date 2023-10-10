<?php
function charFind($array, $character) {
    foreach ($array as $words) {
        if (stripos($words, $character) === false) {
            return false;
        }
    }
    return true;
}
$array_character = ["hola", "Php", "Html"];
$character = "h";
$character1 = "l";

var_dump(charFind($array_character, $character)); 
var_dump(charFind($array_character, $character1)); 

?>
