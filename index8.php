<?php

$var1 = 100;
$var2 = 200;

echo "Valores originais: var1 = $var1, var2 = $var2\n";

$temp = $var1;
$var1 = $var2;
$var2 = $temp;

echo "Valores trocados: var1 = $var1, var2 = $var2\n";
?>