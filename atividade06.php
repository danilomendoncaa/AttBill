<?php
function bubbleSort($array) {
    $n = count($array);
    // Percorre todos os elementos do array
    for ($i = 0; $i < $n; $i++) {
        // Percorre o array de 0 a n-i-1
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Troca se o elemento atual for maior que o próximo elemento
            if ($array[$j] > $array[$j + 1]) {
                $troca = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $troca;
            }
        }
    }
    return $array;
}
    echo "Digite os números separados por espaço em ordem aleatória: ";
        $input = readline();
// Converte a string de números em um array
        $numero = explode(" ", $input);
// Remove espaços em branco ao redor de cada número
        $numero = array_map("trim", $numero);

// Chamada da função bubbleSort para ordenar o array
        $numerosOrdem = bubbleSort($numero);

// Imprime os números ordenados
    echo "Sequência de números: " . implode(" ", $numerosOrdem) . PHP_EOL;

