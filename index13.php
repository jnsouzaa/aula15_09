<?php

$n1 = 10;
$n2 = 25;
$n3 = 15;

$maior = $n1;
if ($n2 > $maior) {
    $maior = $n2;
}
if ($n3 > $maior) {
    $maior = $n3;
}

echo "O maior número é: $maior\n";
?>