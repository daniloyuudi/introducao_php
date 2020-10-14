<?php

$peso = 49;
$altura = 1.70;
$imc = $peso / $altura ** 2;

if ($imc < 18) {
    echo "Abaixo do peso";
} elseif ($imc < 25) {
    echo "Peso normal";
} elseif ($imc < 30) {
    echo "Acima do peso";
} else {
    echo "Obeso";
}