<?php

function fatorial($numero) {
    if ($numero <= 1) {
        return 1;
    }
    return $numero * fatorial($numero - 1);
}

$num = 5;
echo "O fatorial de $num é: " . fatorial($num) . "\n";
?>