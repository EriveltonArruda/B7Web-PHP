<?php
session_start();
?>
<html>

<head>
  <title>Formulário de Login</title>
</head>

<body>
  <h1>Qual seu nome?</h1>

  <form action="processa_formulario.php" method='POST'>
    <input required name='nome' type='text'><br>
    <input type='submit' value='salvar'>
  </form>
</body>

</html>