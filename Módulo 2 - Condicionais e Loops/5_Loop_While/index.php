<?php
// Esse loop fica rodando infinitamente porque não tem nenhum incremento no loop, ou seja, Número sempre será 0, logo será < 10
/*
$numero = 0;

while($numero < 10) {
  echo "N: ".$numero."<br/>";
}
*/

// Esse while vai funcionar porque tem incremento dentro do loop, a cada loop, $numero receberá + 1 número até chegar em 10, chegando em 10 o loop para porque 10 NÃO é Menor que 10;
$numero = 0;

while ($numero < 10) {
  echo "N: " . $numero . "<br/>";

  $numero += 1;
}

// iterar números
// Adicionar um número à uma variável no loop
$numero = $numero + 1; // a variável receberá o valor atual + 1;
$numero += 1; // pega o valor que já tem e adiciona mais 1;
$numero++; // Adiciona mais um;