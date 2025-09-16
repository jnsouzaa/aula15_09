<?php

$matriz = [];
$numero = 1;
for ($i = 0; $i < 3; $i++) {
    $linha = [];
    for ($j = 0; $j < 3; $j++) {
        $linha[] = $numero++;
    }
    $matriz[] = $linha;
}

echo "Matriz 3x3:\n";
print_r($matriz);
?>