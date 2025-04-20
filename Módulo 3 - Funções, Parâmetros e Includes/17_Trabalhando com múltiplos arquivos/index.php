<?php
// require() importa os arquivos
require('abc.php'); // dará erro pois o arquivo não existe e a aplicação não funcionará
include('abc.php'); // dará erro pois o arquivo não existe, mas a aplicação continuará funcionando
require('config.php');
// variação do require
require_once('header.php'); // impede que duplique
require_once('header.php'); // ao ser usado de novo o php percebeu que já existe um require_once e simplesmente descarta o segundo. 
require('header.php');

echo "NOME DO USUÁRIO: $usuario";
/* 
Perceba que $usuario não existe no index.php, mas existe no arquivo 
config.php
*/

// include()
/*
A principal diferença entre o require e o include é que ao fazer o mesmo procedimento utilizando o include, ele vai gerar um aviso, mas a aplicação continuará acontecendo normalmente.
*/