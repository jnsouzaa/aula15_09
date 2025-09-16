<?php

function contarVogais($string) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;
    $string = strtolower($string);
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vogais)) {
            $contador++;
        }
    }
    return $contador;
}

$texto = "Programacao";
echo "A string tem " . contarVogais($texto) . " vogais.\n";
?>