<?php

$p = readline("Digite seu peso(Ex:80): "); 
$a = readline("Digite sua altura(Ex:1.90): ");
$imc = $p / ($a * $a);

echo "Seu IMC é: " . number_format($imc, 2) . PHP_EOL;

if ($imc < 18.5) {
    echo "Você está abaixo do peso ideal." . PHP_EOL;
} elseif ($imc < 25) {
    echo "Seu peso está ideal." . PHP_EOL;
} elseif ($imc < 30) {
    echo "Você está acima do peso." . PHP_EOL;
} elseif ($imc < 35) {
    echo "Você está obeso em um caso simples." . PHP_EOL;
} elseif ($imc < 40) {
    echo "Você está obeso em um caso médio." . PHP_EOL;
} else {
    echo "Você está obeso em um caso grave." . PHP_EOL;
}
