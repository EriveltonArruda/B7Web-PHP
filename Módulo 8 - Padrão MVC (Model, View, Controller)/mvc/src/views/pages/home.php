<?php $render('header'); ?>

<a href="<?= $base; ?>/novo"><button class="btn">Novo Usuário</button></a>

<table border="1" width="100%">
  <!-- Linha que contém os cabeçalhos da tabela -->
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>E-MAIL</th>
    <th>ENDEREÇO</th>
    <th>NÚMERO CASA</th>
    <th>TELEFONE</th>
    <th>AÇÕES</th>
  </tr>
  <!-- Foreach para exibir os dados do banco na tela -->
  <?php foreach ($usuarios as $usuario) : ?>
    <!-- Um linha para cada usuário -->
    <tr>
      <!-- Como no meu banco de dados tenho as tabelas, vou exibir eles na tela -->
      <td><?= $usuario['id']; ?></td>
      <td><?= $usuario['nome']; ?></td>
      <td><?= $usuario['email']; ?></td>
      <td><?= $usuario['endereco']; ?></td>
      <td><?= $usuario['numeroCasa']; ?></td>
      <td><?= $usuario['telefone']; ?></td>
      <td>
        <!-- Botões de ação (editar e excluir) -->
        <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar">
          <img width="25" src="<?= $base; ?>/assets/images/document.png" />
        </a>
        <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
          <img width="25" src="<?= $base; ?>/assets/images/trash.png" />
        </a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>


<?php $render('footer'); ?>