<?php
// Definindo um valor padrão ao parâmetro da função na variável $n3, assim esse parâmetro fica "opcional".
// Definindo um type na variável $n1, assim $n1 aceitará SOMENTE números inteiros.
function somar(int $n1, $n2, $n3 = 0) {
  $total = $n1 + $n2 + $n3;
  return $total;
}

$x = somar(1, 3); // $x será 4;
$y = somar(5, 3, 2); // $n3 deixará de ser 0 e se tornará 2, fazendo assim a    soma de 5 + 3 + 2 = 10;
$w = somar($x, $y); // $w fará a soma de $x e $y (4 + 10);

echo $w; // Resultado: 14;
