<?php
// $total será o resultado da soma dentro da função.
// Usamos & antes da variável para passar a variável como referência.
function somar($n1, $n2, &$total) {
  $total = $n1 + $n2;
}

$x = 3;
$y = 2;
$soma = 0;
somar($x, $y, $soma); /* soma era 0 e agora se tornou 5 porque entrou como 
referência no parâmetro e dentro da função foi reassignado e agora passou a ser a soma de $n1 + $n2, então a variável fora ($soma) também foi alterada porque 
pegou o valor de $total ao ser passada como parâmetro, $soma basicamente se 
tornou um espelho de $total.
*/

echo "TOTAL: " . $soma; // Resultado: TOTAL: 5;

// 
function somar2($n1, $n2, &$total) {
  $n1 = 10;
  $n2 = 15;
  $total = $n1 + $n2;
}

$x = 3; // $n1 será 3;
$y = 2; // $n2 será 2;
$soma = 0;
somar2($x, $y, $soma); // Aqui soma deixou de ser 0 e recebeu o o valor de       $total que está dentro da função somar.

// Exibindo na tela os valores de cada variável fora da função
echo $x . ' + ' . $y . ' = ' . $soma;

//Resultado:
// 3 + 2 = 25; 
/* Aqui deu 25 porque como $soma é um espelho de $total, $soma recebeu o valor 
de $total que está dentro da função ($total = $n1 + $n2) Ou seja: 25;
Isso quer dizer que quando um parâmetro é referenciado, ele é alterado fora
da função também. */

// O parâmetro da função sort() usa valores como referência, ou seja, a função vai ordenar as variáveis e não vai alterar seu valor.
$lista = [4, 9, 2];

sort($lista);

print_r($lista);
