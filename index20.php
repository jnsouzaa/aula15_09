<?php

$senha_pre_definida = "php123";
$senha_digitada = "php123";

if ($senha_digitada === $senha_pre_definida) {
    echo "Senha correta. Acesso permitido.\n";
} else {
    echo "Senha incorreta. Acesso negado.\n";
}
?>