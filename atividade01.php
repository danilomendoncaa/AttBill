<?php

$multiplica = readline("Qual número você quer que seja multiplicado: ");
for ($i = 0; $i <= 10; $i++) {
     echo $multiplica." x ".$i." = ". $i*$multiplica.PHP_EOL;
}