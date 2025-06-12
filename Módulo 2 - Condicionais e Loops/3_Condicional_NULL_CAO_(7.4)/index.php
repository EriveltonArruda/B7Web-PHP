<?php
/* Esse código gera erro de variável $sobrenome indefinida
$nome = 'Erivelton';

$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome;

echo $nomeCompleto;
*/

// Resolvendo com operador ternário
/* 
$nome = 'Erivelton';
$sobrenome = 'Rodrigues'; // Adicionado posteriormente

$nomeCompleto = $nome;

Se ($sobrenome) existir ? $sobrenome será adicionada à variável $nomeCompleto 
: caso contrário será concatenada com nada ' ';
$nomeCompleto .= isset($sobrenome) ? $sobrenome : ' ';

echo $nomeCompleto;

Utilizando o operador ternário dessa forma faz com que o erro desapareça caso você tenha esquecido de definir a variável.
*/

/* NULL CAO é uma simplificação do condicional ternário
 
Imagine que no seu código você criou uma variável com o nome e lá na frente criou uma variável com o nome completo (nome e sobrenome), 
mas você não criou o sobrenome ainda, isso ocasionará em um erro de variável indefinida em $sobrenome.

$nome = 'Erivelton';
$sobrenome = 'Rodrigues'; // Adicionado posteriormente

$nomeCompleto = $nome;

No operador NULL CAO colocamos somente a condição negativa depois de ??, as duas interrogações definem um NULL CAO.
se sobrenome existir, ele vai pegar a própria 
variável, caso contrário ele usará a condição negativa. 

Como antes era necessário colocar a variável duas vezes na condição, o Null CAO resolveu isso. 
Se a variável existir, use-a, se não, use a condição negativa:
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;
*/

// Exemplo sem nome e sem sobrenome utilizando NULL CAO
$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;
