<?php

$num1 = 10;
$num2 = 5;
$operacao = '+';

switch ($operacao) {
    case '+':
        echo "$num1 + $num2 = " . ($num1 + $num2) . "\n";
        break;
    case '-':
        echo "$num1 - $num2 = " . ($num1 - $num2) . "\n";
        break;
    case '*':
        echo "$num1 * $num2 = " . ($num1 * $num2) . "\n";
        break;
    case '/':
        if ($num2 != 0) {
            echo "$num1 / $num2 = " . ($num1 / $num2) . "\n";
        } else {
            echo "Divisão por zero não é permitida.\n";
        }
        break;
    default:
        echo "Operação inválida.\n";
}
?>