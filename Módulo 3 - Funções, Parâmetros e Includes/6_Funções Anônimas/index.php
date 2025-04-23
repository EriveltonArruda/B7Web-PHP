<?php
// criamos a variável e dentro da função passamos o parâmetro.
$dizimo = function (int $valor) {/* int é o tipo (de inteiro, para não colocar 
  como string), então só aceitará números inteiros (não é obrigatório para a
  função anônima, mas para esse exemplo será usada.*/
  return $valor * 0.1;
};

//Para chamar essa função apenas chamamos a variável com o valor do parâmetro
echo $dizimo(90); // Resultado: 9;

// Assimilando a variável com a função $dizimo à outra variável
$funcao = $dizimo;

/* Chamando a nova variável com os parâmetros de função, porque como essa nova 
variável agora é uma função (pois assimilou a variável que contém a função, ela funciona como função também. */

echo $funcao(82); // Resultado: 8.2;

// Parâmetro em outra função
/* Estrutura:
Primeiro parâmetro: Valor que receberá a função (10).
Segundo Parâmetro: função que vai agir em cima do primeiro parâmetro. */
$algumaFuncao(10, function () {
  ...
});

/* também poderia armazenar a funcao dentro de uma variável e usar essa 
variável como parâmetro */
$outraFuncao = function (int $valor) {
  ...
};
// Exemplo
algumaFuncao(10, $outraFuncao); /* essa função no parâmetro será usada no número que está como primeiro parâmetro, nesse caso o 10; */