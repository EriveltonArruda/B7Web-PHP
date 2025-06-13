<?php
// Estrutura da função
function somar($n1, $n2) { // Parâmetro dentro dos parênteses
  $total = $n1 + $n2; // Ação da função (somar $n1 + $n2)
  return $total; // Final da função chamando a ação
}

// atribuindo à uma variável
$soma = somar(10, 5); // $n1 assumirá 10 e $n2 assumirá 5
echo "TOTAL: " . $soma . "<br/>"; // exibe na tela o valor da variável que está chamando a função

// Sem atribuir à variável
echo somar(10, 5); // se quiser exibir somente o resultado sem concatenar com string.
echo "TOTAL: " . somar(10, 5); // exibe na tela a string concatenada com a função

/*
Resultado:
TOTAL:
15; // echo de Total.$soma."<br/>";
15; // echo de somar(10, 5);
TOTAL:
15; // echo de Total.somar(10, 5);
*/

// Demonstrando o escopo de bloco, a variável $total existe apenas dentro da função e não fora, dará erro.
$soma = somar(10, 5);
echo "TOTAL: " . $total;

// Armazenando a função em variáveis.
$x = somar(1, 3); // $x vai se tornar o resultado da soma (1+3=4)
$y = somar(5, 3); // $y vai se tornar o resultado da soma (5+3=8)
$w = somar($x, $y); // $w vai se tornar o resultado da soma de $x e $y (4+8=12)

echo $w;// Resultado: 12;