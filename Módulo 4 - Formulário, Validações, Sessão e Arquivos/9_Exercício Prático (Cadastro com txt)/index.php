<form method="POST" action="recebedor.php">
  <label>
    Novo nome:
    <br />
    <input type="text" name="nome" />
  </label>

  <input type="submit" value="Adicionar Usuário">

  <h2>Lista de nomes</h2>
  <?php
  // Pegando o arquivo nomes.txt para exibir na tela
  $lista = file_get_contents('nomes.txt');

  echo $lista;
  ?>
</form>