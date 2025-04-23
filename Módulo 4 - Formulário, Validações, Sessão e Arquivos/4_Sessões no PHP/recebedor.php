<?php
session_start();

$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT);

if ($nome) {
  echo "NOME: " . $nome . "<br/>";
  echo "EMAIL: " . $email . "<br/>";
  echo "IDADE: " . $idade;
} else {
  /* 
salvamos a informação da session na variável global $_SESSION, é Obrigatório o session ser em maiúsculo e ter o nome do array, o nome do 
array vai ser o identificador desse SESSION.

Colocando o aviso na sessão, se o usuário não colocar os itens que são 
necessários para validar, esse erro aparecerá para ele mostrando o que ele 
tem de fazer */
  $_SESSION['aviso'] = "Preencha os itens corretamente!";
  // E será redirecionado para o index.php
  header("Location: index.php");
  exit;
};
