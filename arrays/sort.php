<?php

$saldos = [
    2500,
    3000,
    1000,
    3700,
    9000
];

foreach ($saldos as $saldo) {
    echo "<p>O saldo é $saldo</p>";
}

sort($saldos);

echo "O menor saldo é $saldos[0]";