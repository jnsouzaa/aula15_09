<?php

function somaDiagonalPrincipal($matriz) {
    $soma = 0;
    for ($i = 0; $i < count($matriz); $i++) {
        $soma += $matriz[$i][$i];
    }
    return $soma;
}

$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "A soma da diagonal principal é: " . somaDiagonalPrincipal($matriz) . "\n";
?>