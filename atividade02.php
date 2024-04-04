<?php
$divide = readline("Digite o número que você quer que seja divido: ");
echo "Divisores de $divide são:"; 
for($i=1; $i <=$divide; $i++){
    if ($divide % $i == 0){
        echo "$i" . PHP_EOL;
    }
}
