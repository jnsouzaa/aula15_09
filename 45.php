<?php

function tamanhoString($string) {
    return strlen($string);
}

$texto = "Hello, World!";
echo "O tamanho da string é: " . tamanhoString($texto) . "\n";
?>