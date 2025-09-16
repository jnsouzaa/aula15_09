<?php

$numero = 5;
$fatorial = 1;
for ($i = $numero; $i >= 1; $i--) {
    $fatorial *= $i;
}
echo "O fatorial de $numero é: $fatorial\n";
?>