<?php
// Uma função recursiva basicamente significa uma função que executa ela mesma internamente. 

// Função que vai dividir o número por 2 usando ela mesma até chegar em 0
// criação da função com um parâmetro
function dividir($numero) {
  // variável ($metade) que vai fazer a divisão da variável de parâmetro ($numero)
  $metade = $numero / 2;
  echo $metade . "<br/>";

  /* controle dentro da função com números inteiros.
Após a divisão acima, se a variável $metade for acima de 0, então ela vai
repetir a função até que chegue em 0 (a função round() vai arredondar o resultado)*/
  if (round($metade) > 0) {
    dividir($metade);
  };
};

dividir(100);
