<?php
// trim() limpa string suja, é muito usada para limpar espaços de formulários e evitar que nosso banco fique com muitos caracteres.
$nomeSujo = '      Erivelton      ';
echo trim($nomeSujo);

$nomeLimpo = trim($nomeSujo);

// strlen() conta a extensão das strings
// (STR = string, LEN = length, length significa extensão).
echo "NOME SUJO: " . strlen($nomeSujo) . "<br/>";
echo "NOME LIMPO: " . strlen($nomeLimpo);

/*
Resultado:
NOME SUJO: 21 caracteres
NOME LIMPO: 9 caracteres
*/

// strtolower() deixa a string em minúsculo
$nome = 'Erivelton Rodrigues';
// dentro da função colocamos a variável que queremos mudar.
echo strtolower($nome); // Resultado: erivelton rodrigues;

// strtoupper() deixa a string em Maiúsculo
// dentro da função colocamos a variável que queremos mudar.
echo strtoupper($nome); // Resultado: ERIVELTON RODRIGUES;

// str_replace() substitui a palavra passada dentro do parâmetro.
/*
Estrutura da função:
o primeiro parâmetro é a palavra que queremos substituir
o segundo parâmetro é a palavra que vai entrar no lugar da anterior
o terceiro parâmetro é onde queremos que a função vá buscar a palavra a ser  
substítuida
*/

// 1º palavra a ser substítuida
// 2º palavra que vai entrar
// variável onde a função vai pegar as palavras

Exemplo:
// troca Rodrigues POR Silva EM $nome
str_replace('Rodrigues', 'Silva', $nome);

$nome = 'Erivelton Rodrigues';

$nomeAlterado = str_replace('Rodrigues', 'Silva', $nome);

echo $nomeAlterado; // Resultado: Erivelton Silva;

// substr() pega uma parte da string
// Estrutura da função:
// 1° parâmetro é a variável que vamos pegar a string.
// 2° parâmetro é a posição onde vai começar a pegar.
// 3º parâmetro é a posição onde termina, a quantidade que quer pegar.

substr($nomeCompleto, 0, 5);
$nomeCompleto = 'Erivelton Rodrigues';

$nome = substr($nomeCompleto, 0, 5);
echo $nome; // Resultado: Erive;

/* Nesse exemplo a posição será alterada, vai começar na posição 3 e vai pegar 
somente 3 caracteres no final.
*/
$nomeCompleto = 'Erivelton Rodrigues';

$nome = substr($nomeCompleto, 3, 3);
echo $nome; // Resultado: vel;

/* Se colocar o segundo parâmetro como negativo, ele vai começar nos últimos 
caracteres (da direita para a esquerda). */
$nome = substr($nomeCompleto, -5, 5);
echo $nome; // Resultado: igues;