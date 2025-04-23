<?php
session_start();
require('header.php');

if ($_SESSION['aviso']) {
  echo $_SESSION['aviso'];
  $_SESSION['aviso'] = '';
}
?>

<form method="POST" action="recebedor.php"> <!--arquivo para receber form-->
  <hr />
  <a href="apagar.php" style="display: inline-block; border: 1px solid; border-radius: 5px; padding: 5px; text-decoration: none; color: #fff; background-color: red;">Apagar Cookie</a>
  <br />
  <br />
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