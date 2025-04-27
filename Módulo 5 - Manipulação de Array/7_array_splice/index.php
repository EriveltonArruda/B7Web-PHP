<?php
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

/* 
array_splice() remove itens diretamente no array original, essa função recebe 3 parâmetros, os parâmetros seguem a mesma lógica do array_slice:

Parâmetros da função array_splice()
1º passamos o array que a função vai fazer a operação;
2º Selecionamos a posição do item que queremos tirar do array
3º Selecionamos quantos itens serão removidos a partir da posição selecionada

array_splice($array, 1, 1);
*/

// Removendo 'b' do array
array_splice($array, 1, 1);

print_r($array);

// mantendo somente 'a' e 'b' e removendo os demais itens
array_splice($array, 2);

print_r($array);

// removendo 'c', 'd' e 'e'
array_splice($array, 2, 3);

print_r($array);

// Removendo 'c' e adicionando 'k' no lugar dele
array_splice($array, 2, 1, 'k');

print_r($array);

//  removendo o ‘c’ e o ‘d’ e vai adicionar o ‘k’ na posição que foi passada no segundo parâmetro, ou seja, posição[2].
array_splice($array, 2, 2, 'k');

print_r($array);
