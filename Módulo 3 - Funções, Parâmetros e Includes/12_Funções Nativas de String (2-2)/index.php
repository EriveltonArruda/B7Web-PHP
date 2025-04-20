<?php
// strpos() mostra a posição de determinado caractere ou palavra dentro da string
/* 
No primeiro parâmetro colocamos a variável que queremos onde a função vá buscar a string para mostrar a posição.
no segundo parâmetro colocamos a letra que queremos saber a posição que ela 
aparece pela primeira vez.
Lembrando que é case sensitive.
*/

strpos($nomeCompleto, 'o');

// Exemplo
$nomeCompleto = 'Erivelton Rodrigues';
/* A função vai buscar dentro de $nomeCompleto a posição onde aparece a primeira 
letra "o".
*/

$posicao = strpos($nomeCompleto, 'o');
echo $posicao; // Resultado: 7;
/* 
lembre-se que em computador o primeiro valor é sempre o 0, 
espaços também contam.
*/

$nomeCompleto = 'Erivelton Arruda';
/* A função vai buscar dentro de $nomeCompleto a posição onde aparece a primeira letra "a", perceba que a letra "a" está em minúsculo e dentro da variável 
temos um "A" maiúsculo, logo o resultado será inexistente.
*/
$posicao = strpos($nomeCompleto, 'a');
echo $posicao; // Resultado: - 1 ou não retorna nada;

// jeito certo de se trabalhar com essa função
// Exemplo com a posição em > 0
$nomeCompleto = 'Erivelton Rodrigues';

$posicao = strpos($nomeCompleto, 'z');

if ($posicao >= 0) {
  echo "ACHOU!";
} else {
  echo "NÃO ACHOU!";
}

/* 
Resultado:
ACHOU! // Mas não tem z no meu nome, então é um erro.

dentro do if o ideal é colocar -1 na condição porque pelo menos vai ter 0, 
caso fosse colocado 0, a condição do else seria executada porque dentro de um 
if, o 0 e o false se confundem, colocando -1 resolve esse problema.
*/
$nomeCompleto = 'Erivelton Rodrigues';

$posicao = strpos($nomeCompleto, 'o');

if ($posicao > -1) {
  echo "ACHOU!";
} else {
  echo "NÃO ACHOU!";
}
/*
Resultado:
ACHOU! // porque tem a letra "o" na string;
*/

// ucfirst() transforma somente a primeira letra e maiúsculo
$nomeCompleto = 'erivelton';
echo ucfirst($nomeCompleto); // Resultado: Erivelton;

// ucwords() transforma em maiúsculo a primeira letra de cada palavra.
echo ucwords($nomeCompleto); // Resultado: Erivelton Rodrigues De Arruda;

// explode() transforma strings e array
/* 
Parâmetros da função:
1° o que você vai procurar para ser o divisor entre as palavras que estão 
sendo procuradas.
2º a sua variável que contém a string.
*/

explode(' ', $nomeCompleto);

// Exemplo
$nomeCompleto = 'erivelton rodrigues de arruda';

$nomes = explode(' ', $nomeCompleto);

print_r($nomes);

/* 
Resultado:
Array ( [0] => erivelton, [1] => rodrigues, [2] => de, [3] => arruda );
o que aconteceu aqui? como o divisor era um espaço, então onde tinha espaço 
foi passada uma "tesoura" e foi feita a divisão, fazendo com que cada string 
virasse um array.
*/

// number_format() formata os números
/* Parâmetros da função:
1° é o próprio numero (variável);
2° é a quantidade de decimais que vai ter;
3° (opcional) Qual será o símbolo correspondente aos decimais;
4° (Opcional) O símbolo usado para separar os milhares;
*/

number_format($numero, 1, ',', '.');

// Exemplo
$numero = 12913.12;
echo number_format($numero, 2, ',', '.'); // Resultado: 12.913,12