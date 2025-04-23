<?php
// é necessário iniciar uma sessão, se já existir uma sessão na página ele vai recuperar.
session_start();
require('header.php');

/* Para exibir o $_SESSION que está no recebedor.php, precisamos chamar ele aqui no index.

Se $_SESSION['aviso'] existir, vou mostrar ela, essa session está aparecendo
porque ela foi definida no else do meu if do recebedor, então se o usuário 
não colocar as informações corretas e o meu recebedor não validar, 
o $_SESSION['aviso'] será ativado e o erro será exibido aqui no meu index. */
if ($_SESSION['aviso']) {
  echo $_SESSION['aviso'];
  // em seguida eu zero a sessão para que a mensagem saia do index, caso contrário a mensagem ficará sendo exibida sempre.
  $_SESSION['aviso'] = '';
}
?>

<form method="POST" action="recebedor.php"> <!--arquivo para receber form-->
  <label>
    Nome:
    <br />
    <input type="text" name="nome" />
  </label>
  <br />
  <br />

  <label>
    E-mail:
    <br />
    <input type="text" name="email" />
  </label>
  <br />
  <br />

  <label>
    Idade:
    <br />
    <input type="text" name="idade" />
  </label>
  <br />
  <br />

  <input type="submit" value="Enviar" />

</form>