<?php

$n = 10;
$a = 0;
$b = 1;
echo "Sequência de Fibonacci até $n termos:\n";
echo "$a\n";
echo "$b\n";
for ($i = 2; $i < $n; $i++) {
    $c = $a + $b;
    echo "$c\n";
    $a = $b;
    $b = $c;
}
?>