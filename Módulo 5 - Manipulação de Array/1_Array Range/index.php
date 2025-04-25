<?php
// Array para exemplo
$array = [1, 2, 3];

// range() Cria um array para nós com base nos parâmetros que passamos pra ela.
/* Parâmetros da função range()
1º O item que vai começar (minimo)
2º O item que vai terminar (maximo)

$array = range();
*/

// 3º Parâmetro: quantidade de itens que vai pular (multiplicador)
$array = range(1, 20, 2);

// Usando letras nos parâmetros
$array = range('a', 'g');

// gere um array com números que iniciam em 50 e vão até 20
$array = range(50, 20);

foreach ($array as $item) {
  echo $item . '<br/>';
}

/* 
Essa função é útil quando você precisa criar algum tipo de conta ou algum tipo de sequência, ai não precisa criar um array pra isso, por exemplo: Quero criar um array com os dias do mês.
*/

$array = range(1, 30);

foreach ($array as $item) {
  echo $item . '<br/>';
}
