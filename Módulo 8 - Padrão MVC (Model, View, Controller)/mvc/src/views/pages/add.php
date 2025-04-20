<?php $render('header'); ?>

<a href="<?= $base; ?>"><button>Voltar</button></a>

<h2>Adicionar Novo Usuário</h2>

<form method="POST" action="<?= $base; ?>/novo">
  <label>
    Nome: <br />
    <input type="text" name="name" />
  </label><br /><br />
  <label>
    E-mail: <br />
    <input type="email" name="email" />
  </label><br /><br />
  <label>
    Endereço: <br />
    <input type="text" name="endereco" />
  </label><br /><br />
  <label>
    Número Casa: <br />
    <input type="number" name="numeroCasa" />
  </label><br /><br />
  <label>
    Número de Telefone: <br />
    <input type="number" name="telefone" />
  </label><br /><br />

  <input type="submit" value="Adicionar" />

</form>

<?php $render('footer'); ?>