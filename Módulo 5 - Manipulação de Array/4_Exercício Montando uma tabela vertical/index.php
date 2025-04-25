<?php
// O Exercício é criar essa tabela vertical com base nos dados que estão no array abaixo, essa tabela tem duas colunas, uma coluna tem o nome da informação e na outra coluna tem a própria informação, cada linha vai ser uma das informações.
$array = [
  'nome' => 'Bonieky',
  'idade' => 90,
  'empresa' => 'B7web',
  'cor' => 'Azul',
  'profissao' => 'Fazedor de bolo'
];
?>
<!-- Solução: -->
<table border="1">
  <!-- Pegando tanto a chave quanto o valor do array -->
  <?php foreach ($array as $chave => $valor) : ?>
    <!-- A cada loop, será criada uma linha e duas colunas -->
    <tr>
      <!-- duas colunas por loop -->
      <th><?php echo $chave ?></th>
      <td><?php echo $valor ?></td>
    </tr>
  <?php endforeach; ?>
</table>