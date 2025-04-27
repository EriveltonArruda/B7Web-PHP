<?php
$array = ['Erivelton', 32, 'Café', 'azul'];

// podemos organizar assim
$nome = $array[0];
$idade = $array[1];
$bebida = $array[2];
$cor = $array[3];

/* mas essa função faz o mesmo e ainda economiza 4 linhas e evita de criar 4 variáveis
coloco as variáveis referentes aos valores dentro de list() e depois do 
igual eu coloco o array que eu vou organizar os itens. */
list($nome, $idade, $bebida, $cor) = $array;

/*
$nome vai ser "Erivelton";
$idade vai ser 32;
$bebida vai ser "café"
$cor vai ser "azul".
*/

// Isso se chama desconstruir um array