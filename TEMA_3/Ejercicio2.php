<?php
$X = array (10, 20, 30, 40, 50,60);
echo "El tamaño del array X es " .count($X) . "<br>";
unset($X[2]);
$X2 = array_values($X);

var_dump($X2);
echo "El nuevo tamaño del array X2 es " .count($X2) . "<br>";
?>