<?php
// Função normal que será transformada em arrow
$dizimo = function ($valor) {
	return $valor * 0.1;
};

/* Essa função não poderia ser transformada em Arrow porque tem mais de uma 
expressão (tem $res e return) */
$dizimo = function ($valor) {
	$res = $valor * 0.1;
	return $res;
};

/* estrutura da arrow:
como é uma função anônima, vamos associar ela à uma variável, então criamos a 
variável ($dizimo), colocamos fn() e dentro do parênteses de fn() colocamos o parâmetro.
Após a seta nós colocamos o que em uma função normal seria o return */

$dizimo = fn($valor) => $valor * 0.1; // depois da seta seria o return

echo $dizimo(982); // Resultado: 98.2

// Função normal que será transformada em arrow
function somar($n1, $n2) {
	return $n1 + $n2;
};

// Função somar transformada em arrow
$somar = fn($n1, $n2) => $n1 + $n2;

/* Importante salientar que uma função arrow suporta as intervenções que uma 
função normal suporta, seja definir o tipo ou deixar o segundo parâmetro como opcional */

$somar = fn(int $n1, int $n2 = 0) => $n1 + $n2;
