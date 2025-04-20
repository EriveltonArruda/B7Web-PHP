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
Primeiro parâmetro: Valor que receberá a função.
Segundo Parâmetro: função que vai agir em cima do primeiro parâmetro. */
algumafuncao(10, function() {
	return $valor * 0.1;
});
_____________________________________________________________________________

/* também poderia armazenar a funcao dentro de uma variável e usar essa 
variável como parâmetro */
$funcao2 = function(int $valor){
  return $valor * 0.1;
};
// Exemplo
algumafuncao(10, $funcao2); /* essa função no parâmetro será usada no número que está como primeiro parâmetro, nesse caso o 10; */