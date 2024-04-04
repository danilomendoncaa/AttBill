<?php
$adiciona = 0;
$i = 0;
$maximo = 5;
$continua = true;

echo "Adicione uma sequência de números que finalize em um número negativo para que seja calculada a média dos números positivos:\n";

while ($continua) {
    $valor = readline("Digite um número: ");
    
    if ($valor < 0) {
        $continua = false;
    } else {
        $adiciona += $valor;
        $i++;
    }
    if ($i >= $maximo || !$continua) {
        break;
    }
}

if ($i > 0) {
    $media = $adiciona / $i;
    echo "A média dos números positivos é: $media" . PHP_EOL;
} else {
    echo "Nenhum número positivo foi inserido." . PHP_EOL;
}
