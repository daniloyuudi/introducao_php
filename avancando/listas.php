<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[4];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
unset($idadeList[4]);

echo $umaIdade;

$idadeList[] = 20;

foreach ($idadeList as $idade) {
	echo $idade . PHP_EOL;
}