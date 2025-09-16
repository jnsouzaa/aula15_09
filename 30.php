<?php

$numero = 12;
echo "Divisores de $numero:\n";
for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        echo "$i\n";
    }
}
?>