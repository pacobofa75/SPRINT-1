<?php
function contar($numero = 0, $paso = 0) {
    for ($i = 0; $i <= $numero; $i += $paso) {
       
        echo $i . '<br>';
    }
}
contar(20, 2);
?>