<?php
$varX=5;
$varY=3;
$varN=9.4;
$varM=4.7;
$sumaXY=$varX + $varY;
$restaXY=$varX - $varY;
$multiplicacionXY=$varX * $varY;
$moduloXY=$varX % $varY;
echo "La variable X es $varX" . '<br>';
echo "La variable Y es $varY" . '<br>';
echo "La suma de X más Y es $sumaXY" . '<br>';
echo "La resta de X menos Y es $restaXY" . '<br>';
echo "El producto de X por Y es $multiplicacionXY" . '<br>';
echo "La division de X entre Y es $moduloXY" . '<br>';
$sumaNM=$varN + $varM;
$restaNM=$varN - $varM;
$multiplicacionNM=$varN * $varM;
$moduloNM=$varN % $varM;
echo "La variable N es $varN" . '<br>';
echo "La variable N es $varM" . '<br>';
echo "La suma de N más M es $sumaNM" . '<br>';
echo "La resta de N menos M es $restaNM" . '<br>';
echo "El producto de N por M es $multiplicacionNM" . '<br>';
echo "La division de N entre M es $moduloNM" . '<br>';
$dobleX= $varX * 2;
echo "El doble de X es $dobleX" . '<br>';
$dobleY= $varY * 2;
echo "El doble de Y es $dobleY" . '<br>';
$dobleN= $varN * 2;
echo "El doble de N es $dobleN" . '<br>';
$dobleM= $varM * 2;
echo "El doble de M es $dobleM" . '<br>';
$sumaVar=$varX + $varY + $varN + $varM;
echo "La suma de las variables es $sumaVar" . '<br>';
$productoVar=$varX * $varY * $varN * $varM;
echo "El producto de las variables es $productoVar" . '<br>';

function calcular($numero1, $numero2, $operacion) {
    switch ($operacion) {
        case '+':
            $resultado = $numero1 + $numero2;
            break;
        case '-':
            $resultado = $numero1 - $numero2;
            break;
        case '*':
            $resultado = $numero1 * $numero2;
            break;
        case '/':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Error: No se puede dividir entre cero";
            }
            break;
        default:
            $resultado = "Error: Operación inválida";
            break;
    }
    
    return $resultado;

}
$numero1 = 10;
$numero2 = 5;
$operacion = '+';

$resultado = calcular($numero1, $numero2, $operacion);
echo "El resultado es: " . $resultado;

?>
