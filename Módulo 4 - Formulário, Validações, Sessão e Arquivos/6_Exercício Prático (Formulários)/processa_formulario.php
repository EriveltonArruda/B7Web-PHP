<?php
// Este arquivo tem a função de processar o formulário enviado pelo login.php
session_start();
// Recebendo os dados do campo nome do formulário e armazenando em $nome
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
if (empty($nome)) {
    // Criando a session de erro, se o usuário não preencher o nome, ele vai receber o erro e vai ser redirecionado para o login.php
    $_SESSION['erro'] = 'O nome não foi preenchido.';
    header('location:login.php');
} else {
    // Se o usuário digitar o nome, $_SESSION agora terá o nome que foi digitado e terá acesso ao index.
    $_SESSION['nome'] = $nome;
};
// encaminha o usuário para o index
header('location:index.php');

/* Um adendo sobre a função empty
Ela serve para saber se uma variável é vazia. 
A função empty retornará true (verdadeiro) quando uma variável for vazia e 
false (falso) quando uma variável não for vazia.
*/