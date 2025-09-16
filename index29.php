<?php

$contador = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $contador++;
    }
}
echo "Existem $contador números pares entre 1 e 100.\n";
?>