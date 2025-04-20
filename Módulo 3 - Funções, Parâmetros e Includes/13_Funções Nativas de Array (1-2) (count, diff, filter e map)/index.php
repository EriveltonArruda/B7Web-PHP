<?php
// count() mostra quantos itens temos dentro de um array
$lista = ['nome1', 'nome2', 'nome3', 'nome4'];

echo "TOTAL: " . count($lista); // Resultado: TOTAL: 4;

// array_diff() pega a diferença entre o primeiro e o segundo array e gera um novo array com os itens da primeira lista que não estão na segunda.
/* 
Essa função tem 2 parâmetros:
1° coloco a variável de array com os valores ($lista).
2° a lista que vai ser comparada ($aprovados).
*/

array_diff($lista, $aprovados);

// Exemplo
$lista = ['Erivelton', 'Pedro', 'Paulo', 'José', 'Francisco'];
$aprovados = ['Erivelton', 'Pedro', 'José'];

/* 
Criamos uma nova variável ($reprovados) e assimilamos ela à função com os dois
arrays que serão comparados como parâmetro.
*/

$reprovados = array_diff($lista, $aprovados);

print_r($reprovados);
/*
Resultado:
Array ( [2] => Paulo [4] => Francisco );
*/

// filter() filtra algo no array
/*
Essa função tem dois parâmetros
1° O próprio array
2° é um callback, callback é uma função, essa função pode ser anônima, pode
ser criada fora e ser jogada como parâmetro ou criada no próprio parâmetro
*/

array_filter($variavel, function($item)) {};

$numeros = [10, 20, 24, 91, 18];

$filtrados = array_filter($numeros, function ($item) {
  if ($item < 30) {
    return true;
  } else {
    return false;
  }
});

print_r($filtrados);

/*
Resultado:
Array ( [0] => 10 [1] => 20 [2] => 24 [4] => 18 );
*/

// array_map() executa algo, faz um loop dentro do array e em cada item do array vai rodar a função
/* 
Ela tem dois parâmetros
1° colocamos a função de callback
2° colocamos o array onde a função vai rodar
*/

array_map(function ($item) {}, $numeros);

// Exemplo
$numeros = [10, 20, 24, 91, 18];

$dobrados = array_map(function ($item) {
  return $item * 2;
}, $numeros);

print_r($dobrados);

/*
Resultado: 
Array ( [0] => 20 [1] => 40 [2] => 48 [3] => 182 [4] => 36 )
*/