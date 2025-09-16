<?php

$letra = 'a';
$vogais = ['a', 'e', 'i', 'o', 'u'];

if (in_array(strtolower($letra), $vogais)) {
    echo "A letra '$letra' é uma vogal.\n";
} else {
    echo "A letra '$letra' é uma consoante.\n";
}
?>