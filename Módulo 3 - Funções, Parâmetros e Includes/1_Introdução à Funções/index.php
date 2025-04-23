<?php
// Funções são blocos de código reutilizáveis.
// Funções são úteis para quando tivermos várias operações e não queremos copiar o código de novo
function somar($n1, $n2) {
	$total = $n1 + $n2;
	return $total
};

echo somar(10, 5);

// Array para exemplificar o uso do print_r()
$lista = [10, 25, 3];

// Funções próprias do PHP
// print_r() lê o array e mostra o resultado de forma mais clara e objetiva para o programador.
print_r($lista);

Resultado:
Array ( [0] => 10, [1] => 25, [2] => 3 );