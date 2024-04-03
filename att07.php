<?php

$p = 86; 
$a = 1.77; 
$imc = $p / ($a * $a);

echo "Seu IMC é: " . number_format($imc, 2) . "\n";

if ($imc < 18.5) {
    echo "Você está abaixo do peso ideal.\n";
} elseif ($imc < 25) {
    echo "Seu peso está ideal.\n";
} elseif ($imc < 30) {
    echo "Você está acima do peso.\n";
} elseif ($imc < 35) {
    echo "Você está obeso em um caso simples.\n";
} elseif ($imc < 40) {
    echo "Você está obeso em um caso médio.\n";
} else {
    echo "Você está obeso em um caso grave.\n";
}
?>