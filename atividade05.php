<?php
$numeroAleatorio = rand(1,10);
$gameLoop = true;

while($gameLoop){
    $chute = readline("Chute um número entre 1 e 10: ");
    if($chute == $numeroAleatorio){
        echo"Acertouuuuuuuuu";
        $gameLoop = false;
}
    if($chute < $numeroAleatorio){
        echo"Tente novamente o número aleatório e maior que seu chute".PHP_EOL;
}
    if($chute > $numeroAleatorio){
        echo"Tente novamente o número aleatório e menor que seu chute".PHP_EOL;
}
}