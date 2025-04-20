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
