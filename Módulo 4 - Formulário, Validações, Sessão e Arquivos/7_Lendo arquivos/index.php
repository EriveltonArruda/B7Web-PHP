<?php
/*
Se o arquivo for local, colocamos o caminho do arquivo dentro dos parênteses.
Se o arquivo for externo, colocamos o URL dele dentro do parênteses.

file_get_contents('');
*/

// Pegando o arquivo que contém o texto para ser exibido
$texto = file_get_contents('texto.txt');

// exibindo o texto na tela
echo $texto;


// Podemos manipular o texto usando o explode() //
$texto = file_get_contents('texto.txt');
/* Quebrando o texto por linha com o \n e ao passar $texto no parâmetro do 
explode, meu $texto agora vai virar um array */
$texto = explode("\n", $texto);

// Contando quantas linhas meu texto tem 
echo "LINHAS: " . count($texto);

// Resultado: LINHAS: 4;