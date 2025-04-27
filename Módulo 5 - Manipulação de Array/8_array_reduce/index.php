<?php
$numeros = [1, 2, 3, 4, 5];

/* array_reduce pega o array que você passa pra ela e ai vai executar uma função para cada item dentro do array e vai reduzir para um item só, basicamente faz uma varredura no array.
*/

/* Parâmetros do Reduce
1º Eu passo o array que quero fazer a varredura
2º Coloco o nome da função que vai agir em cima do meu array
*/
$total = array_reduce($numeros, 'total');

function somar($subtotal, $item) {
  /* Estou somando $subtotal + $item porque quero que seja feita a soma dos itens do meu array.
  na primeira varredura da função, $subtotal é 0, então no final da a primeira varredura ele passa a ser 1 (0 + 1 = 1), 
  na segunda varredura o valor dele é 1 e vai somar com 2,
  na terceira varredura ele tem o valor de 3 (2 + 1 = 3) e vai ser somado com 3, 
  na quarta varredura ele tem o valor de 6 e vai ser somado com 4 e na última varredura o valor dele é 10 e vai ser somado com 5. */

  $subtotal += $item; // $subtotal =+ $item é o mesmo de fazer: $subtotal = $subtotal + $item.
  return $subtotal;
}

$total = array_reduce($numeros, 'somar');

// para exemplificar outra forma de usar o reduce, vou usar esse array.
$pessoas = [
  ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
  ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
  ['nome' => 'Beltrana', 'sexo' => 'F', 'nota' => 10],
  ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
  ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
  ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9]
];

// contando quantos homens eu tenho nessa lista
function contar_m($subtotal, $item) {
  // se é um homem
  if ($item['sexo'] === 'M') {
    // $subtotal vai aumentar +1
    $subtotal++;
  }
  /* O return está fora do if porque em algum momento ele vai passar por 
  beltrana e beltrana é mulher, então não vai ser adicionada na minha função */
  return $subtotal;
};

$total_m = array_reduce($pessoas, 'contar_m');

echo "Total de homens: $total_m";

// Soma das notas dos homens
function soma_m($subtotal, $item) {
  // se for homem
  if ($item['sexo'] === 'M') {
    // some $subtotal com as notas.
    $subtotal += $item['nota'];
  }
  return $subtotal;
}

$soma_m = array_reduce($pessoas, 'soma_m');

// Média das notas dos homens
$media_m = $soma_m / $total_m;

echo "Total de homens: $total_m" . "<br/>";
echo "Soma das notas dos homens: $soma_m" . "<br/>";
echo "Média das notas dos homens: $media_m";

/*
Um detalhe importante é que o array_reduce tem um terceiro parâmetro, esse terceiro parâmetro vai basicamente definir o valor de $subtotal que vai ser passado na minha função, sabemos que $subtotal dentro da função começa com o valor 0 por padrão, se eu definir um valor nesse terceiro parâmetro do reduce, na primeira varredura que a minha função fizer, o $subtotal não vai ser mais 0 e vai começar com o valor que eu definir no terceiro parâmetro, por exemplo:
*/

// Total de Homens
function contar_m($subtotal, $item) {
  /* já que meu terceiro parâmetro é 2, na primeira varredura $subtotal já vai
  começar como 2 e não como 0, então o resultado final vai ser alterado 
  porque minha contagem já vai começar como se já tivessem 2 homens */
  if ($item['sexo'] === 'M') {
    /* $subtotal começa com 2 e se encontrar um homem, será adicionado +1, 
  totalizando 3 logo na primeira varredura. */
    $subtotal++;
  }
  return $subtotal;
};

$total_m = array_reduce($pessoas, 'contar_m', 2);
