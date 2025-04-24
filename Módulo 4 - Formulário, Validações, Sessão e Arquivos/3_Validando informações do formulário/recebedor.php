<?php
/*
// Lista de filtros para usar no filter_input e filter_var
VALIDATES:
FILTER_VALIDADE_EMAIL
FILTER_VALIDATE_INT // (valida mas não sanitiza), caso passem 32 anos no campo idade, não receberá dados pois não é feita a sanitização.
FILTER_VALIDATE_FLOAT // Só aceita se for número "Quebrado" 10.50 por exemplo
FILTER_VALIDATE_IP // Para verificar se foi enviado um IP
FILTER_VALIDATE_URL // Validar se foi link real

SANITIZES:
FILTER_SANITIZE_EMAIL // Deixa somente email
FILTER_SANITIZE_STRING // Deixa somente string
FILTER_SANITIZE_SPECIAL_CHARS // Converte caracteres especiais em string, é útil para não rodar códigos maliciosos de hackers, por exemplo:
<script>alert('Você foi H4ck34do!!')</script>;
FILTER_SANITIZE_URL
FILTER_SANITIZE_NUMBER_INT // (sanitiza mas não valida), caso passem 32 anos no campo idade, o texto anos será excluido.
FILTER_SANITIZE_NUMBER_FLOAT // Para números "quebrados" 10.50 por exemplo
*/
$nome = filter_input(INPUT_POST, "nome");

// Precisamos usar um filtro para impedir que alguém digite um número, assim só vai aceitar (nome@dominio).
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

// validando a idade com número INT, só vai ser validado se passar com número inteiro
$idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT);

if ($nome) {
  echo "NOME: " . $nome . "<br/>";
  // Adicionando o email no meu if
  echo "EMAIL: " . $email . "<br/>";
  echo "IDADE: " . $idade;
} else {
  header("Location: index.php");
  exit;
}

/*
Validar informações com o filter_var()
usamos o filter_var( ) para validar uma informação que já temos

$outroEmail = "erivelton_arruda@hotmail.com";
Dentro de filter var colocamos a variável que contém a informação e o filtro
que será aplicado para validar, os filtros são os mesmos do filter_input:

filter_var($sobrenome, FILTER_VALIDATE_EMAIL);

Também podemos usar o filter_var dentro de um if para fazer verificações 
_______________________________________________________________________________

Diferenças entre filter_input() e filter_var()
no filter input temos que pegar a informação e depois validar:

$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

No filter_var já validamos porque já temos a informação:

filter_var($sobrenome, FILTER_VALIDATE_EMAIL);
*/