<?php
function verificarGrau($nota) {
    if ($nota >= 60) {
        return "Primera Divisió";
    } elseif ($nota >= 45 && $nota <= 59) {
        return "Segona Divisió";
    } elseif ($nota >= 33 && $nota <= 44) {
        return "Tercera Divisió";
    } else {
        return "Reprovat";
    }
}

$nota = 75;
$grauEstudiant = verificarGrau($nota);
echo "El grau de l'estudiant és: " . $grauEstudiant;

?>