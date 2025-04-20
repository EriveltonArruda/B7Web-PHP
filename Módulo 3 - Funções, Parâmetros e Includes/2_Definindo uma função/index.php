<?php
/* 
Aqui estamos somente criando a função, para usá-la, preciso chamar no código 
*/
// criando a função
function subsequente() {
  /* loop que começa em 0 e a cada loop adicionará 1 número até que esse número 
seja menor que 10 (0 a 9) */
  for ($q = 0; $q < 10; $q++) {
    echo $q . "<br/>";
  }

  /* Como vou executar ela 3x, vou colocar uma linha horizontal para dividir os
resultados, no HTML essa linha horizontal é feita com o <hr/>.
*/
  echo "<hr/>";
}

//chamando a função para exibir o resultado na tela, os parênteses indicam que é uma função.
subsequente();
subsequente();
subsequente();

function latir() {
  echo "au au <br/>";
}

// Chamando a função 3x e a cada chamada, será exibido o echo au au.
latir();
latir();
latir();

// Chamando a função em um loop para evitar chamar ela várias vezes
for ($i = 0; $i < 10; $i++) {
  latir();
}
