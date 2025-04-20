<?php $render('header'); ?>

<h2>Editar Usuário</h2>

<!-- Como minha rota é dinâmica, vou passar o id do usuario do banco de dados na máscara de {id} -->
<form method="POST" action="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar">
  <label>
    Nome: <br />
    <!-- Como tenho acesso ao banco de dados, ao passar $usuario['nome'], o nome do usuário vai aparecer no formulário -->
    <input type="text" name="name" value="<?= $usuario['nome']; ?>" />
  </label><br /><br />
  <label>
    E-mail: <br />
    <!-- Como tenho acesso ao banco de dados, ao passar $usuario['email'], o email do usuário vai aparecer no formulário -->
    <input type="email" name="email" value="<?= $usuario['email']; ?>" />
  </label><br /><br />
  <label>
    Endereço: <br />
    <!-- Como tenho acesso ao banco de dados, ao passar $usuario['endereco'], o endereço do usuário vai aparecer no formulário -->
    <input type="text" name="endereco" value="<?= $usuario['endereco']; ?>" />
  </label><br /><br />
  <label>
    Número Casa: <br />
    <!-- Como tenho acesso ao banco de dados, ao passar $usuario['numeroCasa'], o numero da casa do usuário vai aparecer no formulário -->
    <input type="number" name="numeroCasa" value="<?= $usuario['numeroCasa']; ?>" />
  </label><br /><br />
  <label>
    Telefone: <br />
    <!-- Como tenho acesso ao banco de dados, ao passar $usuario['telefone'], o telefone do usuário vai aparecer no formulário -->
    <input type="number" name="telefone" value="<?= $usuario['telefone']; ?>" />
  </label><br /><br />

  <input type="submit" value="Salvar" />

</form>

<?php $render('footer'); ?>