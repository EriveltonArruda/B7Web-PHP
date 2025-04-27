<?php
// Array de exemplo
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

/* Parâmetros da função slice()
1º O array que quero "cortar";
2º A posição de onde a função vai começar a cortar;
3º Quantos itens quero cortar;

Sobre o terceiro parâmetro, muita gente confunde o funcionamento dele, 
por exemplo: eu quero que ele comece na posição 0 (2º parâmetro), 
ai no terceiro parâmetro eu coloco 2, então ele iria começar na letra ‘a’ e
iria até a posição [2], isso é o que muita gente pensa que funciona assim e 
na verdade não é assim que funciona, o 3º parâmetro é a quantidade de itens 
que serão cortados, como está sendo  passado 2 no parâmetro, o slice vai 
cortar 2 itens, ou seja, ‘a’[0] e ‘b’[1]
*/
$retorno = array_slice($array, 0, 2);

// O terceiro parâmetro nem sempre é necessário, se por acaso quisermos pegar da segunda posição em diante, só precisamos colocar o segundo parâmetro e a função vai pegar da posição 2 até o fim do array.
$retorno = array_slice($array, 2);

print_r($retorno);

// vai começar em 'e' e vai pegar 'e' e 'f'
$retorno = array_slice($array, -2, 2);

print_r($retorno);

/*
Caso alguém chegasse e falasse: pega ai pra mim o penúltimo item de tal array, era só colocar o -2 no segundo parâmetro e 1 no terceiro, assim ele iria começar no penúltimo item e pegaria somente 1 item.
*/
$retorno = array_slice($array, -2, 1);

print_r($retorno);
