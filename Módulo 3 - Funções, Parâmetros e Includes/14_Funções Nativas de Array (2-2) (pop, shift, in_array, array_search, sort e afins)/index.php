<?php
// array_pop remove o último item do array
// essa função recebe o parâmetro por referência 
array_pop($numeros);

// Exemplo
// array que será utilizado
$numeros = [10, 20, 24, 91, 18];

array_pop($numeros);

print_r($numeros);
/*
Resultado:
Array ( [0] => 10 [1] => 20 [2] => 24 [3] => 91 ) // 18 foi removido;
*/

// array_shift() remove o primeiro item do array, também recebe o parâmetro por referência
array_shift($numeros);

print_r($numeros);
/*
Resultado:
Array ( [0] => 20 [1] => 24 [2] => 91 [3] => 18 )
*/

// in_array() faz uma verificação dentro do array
/* 
Estrutura da função
1º Parâmetro: colocamos o que queremos procurar (nesse caso o número 91) 
2º Parâmetro: colocamos o array que queremos fazer a varredura.
*/
if (in_array(91, $numeros));

// Exemplo
$numeros = [10, 20, 24, 91, 18];

if (in_array(91, $numeros)) {
  echo "EXISTE";
} else {
  echo "NÃO EXISTE!";
}
/*
Resultado:
EXISTE
*/

// Outro exemplo
$nomes = ["João", "Maria", "Francisco", "Silvia"];

if (in_array("João", $nomes)) {
  echo "EXISTE";
} else {
  echo "NÃO EXISTE!";
}
/*
Resultado:
EXISTE
*/

// array_search() faz uma pesquisa dentro do array, existe uma diferença entre ele e o in_array
/*
in_array = usado pra saber se tem dentro do array
array_search = além de verificar se tem dentro do array, ainda vai mostrar 
a posição do item
*/

$numeros = [10, 20, 24, 91, 18];
// atribuímos o array_search à uma variável
$pos = array_search(91, $numeros);

echo $pos; // Resultado: 3;

// sort(), rsort(), asort() e arsort() são usadas para ordenar os itens dentro do array, sendo a ordem crescente por padrão.
// sort( ) // Ordem crescente (padrão)
// rsort( ) // Ordem decrescente
// Ordem Crescente
$numeros = [10, 20, 24, 91, 18];

sort($numeros);

print_r($numeros);
/*
Resultado: 
Array ( [0] => 10 [1] => 18 [2] => 20 [3] => 24 [4] => 91 )
*/

// Ordem decrescente
$numeros = [10, 20, 24, 91, 18];

rsort($numeros);

print_r($numeros);
/*
Resultado: 
Array ( [0] => 91 [1] => 24 [2] => 20 [3] => 18 [4] => 10 )
*/

// asort( ) // Ordem crescente com chaves relacionadas (padrão)
// arsort( ) // Ordem decrescente com chaves relacionadas
// Ordem Crescente com chave relacionada
$numeros = [10, 20, 24, 91, 18];

asort($numeros);

print_r($numeros);
/*
Resultado: 
Array ( [0] => 10 [4] => 18 [1] => 20 [2] => 24 [3] => 91 )
*/

// Ordem Decrescente com chave relacionada
$numeros = [10, 20, 24, 91, 18];

arsort($numeros);

print_r($numeros);
/*
Resultado:
Array ( [3] => 91 [2] => 24 [1] => 20 [4] => 18 [0] => 10 )
*/
// implode() transforma um array em string
/*
Parâmetros da função
1° cola para juntar os itens
2° o array que contém as strings
*/

implode(' ', $nomes);

// Exemplo
$nomes = ['Erivelton', 'Rodrigues', 'de', 'Arruda'];

$nome = implode(' ', $nomes);

echo $nome;
/*
Resultado:
Erivelton Rodrigues de Arruda
*/