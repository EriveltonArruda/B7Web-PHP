<?php
require('header.php');
?>

<!-- Formulário utilizado para explicar sobre HTTP Requests -->
<!-- Com o método POST, somos redirecionados para a página que está no action (caso não tenha, permaneceremos no index, mas os dados serão enviados normalmente). -->
<form method="POST" action="recebedor.php"> <!--arquivo para receber form-->
  <label>
    Nome:
    <br />
    <input type="text" name="nome" />
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

<!-- Método GET 
o método GET podemos ver os dados na URL, o que não é interessante para se colocar em um formulário que contenha dados sensíveis, pois isso faria com que qualquer um pegasse os dados, já imaginou colocar seu usuário e senha e eles aparecerem na URL para todo mundo ver? pois é, não seria legal.
-->

<!-- Um detalhe importante a se lembrar é que caso seja criado um formulário sem o método POST ou GET, por padrão os dados serão enviados por GET. -->