<?php
/* Esse código gera erro de variável $sobrenome indefinida
$nome = 'Erivelton';

$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome;

echo $nomeCompleto;
*/

// Resolvendo com operador ternário
/* $nome = 'Erivelton';
$sobrenome = 'Rodrigues';

$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : ' ';

echo $nomeCompleto;
*/

// NULL CAO
/* Imagine que no seu código você criou uma variável com o nome e lá na frente criou uma variável com o nome completo (nome e sobrenome), mas você não criou o sobrenome ainda, isso ocasionará em um erro de variável indefinida em $sobrenome.*/
/*
$nome = 'Erivelton';
$sobrenome = 'Rodrigues';

$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;
*/

// Exemplo sem nome e sem sobrenome utilizando NULL CAO
$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;
