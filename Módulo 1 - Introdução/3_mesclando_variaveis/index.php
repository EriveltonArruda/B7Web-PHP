<?php
$nome = 'Erivelton';
$sobrenome = 'Rodrigues';
// $idade = 32;

// Concatenando variáveis.
/* $nomeCompleto = $nome . $sobrenome;
echo $nomeCompleto; // Retornará EriveltonRodrigues
*/

// Concatenação Tripla
/* $nomeCompleto = $nome . ' ' . $sobrenome;
echo $nomeCompleto; // Retornará Erivelton Rodrigues (Com espaço)
*/

// Concatenação com aspas duplas (funciona igual ao Template String do JS)
/*$nomeCompleto = "$nome $sobrenome";
echo $nomeCompleto; Retornará Erivelton Rodrigues (Com espaço)
*/

// Concatenação com aspas simples pegam o valor literal.
/* $nomeCompletoLiteral = '$nome $sobrenome';
echo $nomeCompletoLiteral; // Retornará $nome $sobrenome
*/

// Concatenando texto com variáveis
/* $frase = "$nome $sobrenome tem $idade anos" . "<br/>";
echo $frase;
*/

// Soma entre variáveis de números
/* 
$x = '3';
$y = 4;

$w = $x + $y;
echo $w;
*/

// Variáveis com mesmo nome mas com valores diferentes
/*
$nomeCompleto = $nome;
$nomeCompleto = $sobrenome; // aqui $nomeCompleto vai ter só o valor de $sobrenome.
echo $nomeCompleto; // $nomeCompleto agora é o sobrenome e não a junção dos dois.
*/

// somando variáveis e mantendo os valores
$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome; // agora $nomeCompleto vai ter o valor de $nome e de $sobrenome
echo $nomeCompleto;
