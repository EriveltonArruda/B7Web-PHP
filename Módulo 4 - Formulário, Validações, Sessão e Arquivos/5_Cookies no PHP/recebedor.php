<?php
session_start();

/* Parâmetros mais importantes do setcookie()
1º nome do cookie
2º valor que vai ficar salvo no cookie
3º Quando esse cookie expira (todo cookie tem prazo de validade), usamos a
função time e colocamos uma data maior do que a atual porque se colocar o cookie
pra expirar agora, ele vai expirar na hora que for executado e não vai funcionar
então preciso colocar um tempo maior do que o tempo atual.

setcookie('nome', $nome, time());
*/

$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT);

if ($nome && $email && $idade) {
  /* #expiracao é a validade do cookie, a representação de 1 dia em milisegundos é 86400, então eu vou multiplicar 
  por 30 para meu cookie ter a validade de 1 mês */
  $expiracao = time() + (86400 * 30);

  /* uso o set cookie, defino seu nome ('nome') , uso a variável onde o cookie 
  vai ficar armazenado ($nome) e em seguida coloco sua validade ($expiracao) */
  setcookie('nome', $nome, $expiracao);

  echo "NOME: " . $nome . "<br/>";
  echo "EMAIL: " . $email . "<br/>";
  echo "IDADE: " . $idade;
} else {
  $_SESSION['aviso'] = 'Preencha os itens corretamente!';

  header("Location: index.php");
  exit;
}
