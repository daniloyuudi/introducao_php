<?php

$contasCorrentes = [
	'123.456.789-10' => [
		'titular' => 'Vinicius',
		'saldo' => 1000
	],
	'123.456.789-11' => [
		'titular' => 'Maria',
		'saldo' => 10000
	],
	'123.256.789-10' => [
		'titular' => 'Alberto',
		'saldo' => 300
	]
];

$contasCorrentes['123.258.852-12'] = [
	'titular' => 'Claudia',
	'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
	echo $cpf . ' ' . $conta['titular'] . PHP_EOL;
}

$carros = [
    'LMS-2232' => [
       'marca' => 'VW',
       'modelo' => 'Golf'
    ],
    'KLM-1324' => [
        'marca' => 'Ford',
        'modelo' => 'Fiesta'
    ],
    'OPN-5612' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ],
];

foreach ($carros as $placa => $carro) {
    echo $placa . ': ' . $carro['marca'] . PHP_EOL;
}