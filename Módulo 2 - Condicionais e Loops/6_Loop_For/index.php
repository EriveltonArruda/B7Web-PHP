<?php
/* Estrutura do loop for
for(variável, condição, ação) {

}
nos parâmetros temos 3 etapas
$numero = 0; // 1ª etapa: definimos uma variável que receberá o loop
$numero < 10; // 2ª etapa: condição que queremos usar.
$numero += 1; /* ao fim de cada rodada de bloco, ele executará o código da 
terceira etapa e reiniciará caso a condição ainda esteja sendo verdadeira, 
ou seja, a variável começou em 0 e foi incrementado + 1, o loop então retorna à
condição (< 10) e verifica se o novo número é menor que 10, se for, ele vai 
executar o código mais uma vez até que o número seja (> 10) */

for ($numero = 0; $numero < 10; $numero += 1) {
  echo "N " . $numero . "<br/>";
};

// Loop while que será recriado no for
/*
$numero = 0;

while ($numero < 10) {
  echo "N: " . $numero . "<br/>";

  $numero += 1;
}
*/

// Recriando o loop while acima, agora em for
for ($numero = 0; $numero < 10; $numero++) {
  echo "N: " . $numero . "<br/>";
}

// Simplificando o Loop For
for ($i = 0; $i < 10; $i++) {
  echo "N: " . $i . "<br/>";
}
/*
i++ // incrementa algo
i-- // diminui algo
*/