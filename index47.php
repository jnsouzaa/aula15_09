<?php

function somaArray($array) {
    return array_sum($array);
}

$numeros = [10, 20, 30, 40];
echo "A soma dos elementos do array é: " . somaArray($numeros) . "\n";
?>