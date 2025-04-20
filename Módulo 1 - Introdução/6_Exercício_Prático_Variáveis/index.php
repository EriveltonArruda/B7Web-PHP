<?php
/* Conserte esse código
	$lista = [
	'nome' => 'Erivelton',
	'idade' => 31,
	'atributos' => [
		'forca' => 60,
		'agilidade' => 50,
		'destreza' => 80
	],
	vida = 1000,
	mana = 928
];

echo "NOME: ".$lista['nome']."<br/>";
echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
echo "VIDA: ".$lista['vida'];
*/

// Solução
$lista = [
  'nome' => 'Erivelton',
  'idade' => 31,
  'atributos' => [
    'forca' => 60,
    'agilidade' => 50,
    'destreza' => 80,
    'vida' => 1000,
    'mana' => 928
  ]
];

echo "NOME: " . $lista['nome'] . "<br/>";
echo "FORÇA: " . $lista['atributos']['forca'] . "<br/>";
echo "VIDA: " . $lista['atributos']['vida'];
