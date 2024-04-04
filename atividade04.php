<?php
$f = array(0, 1);

echo "A sequência de números são: ";
    for ($i = 2; $i < 10; $i++) {
        $f[$i] = $f[$i - 1] + $f[$i - 2];
            echo "$f[$i] ";
}