<?php
// O exercício é fazer a mesma coisa do exercício anterior, só que dessa vez tem que ser feito em uma tabela horizontal. Essa tabela tem de ser dinâmica, ou seja, se for adicionado um campo cidade no array, a tabela vai atualizar.

// Array que será utilizado
$array = [
  'nome' => 'Erivelton',
  'idade' => 32,
  'empresa' => 'RdrTech',
  'cor' => 'Azul',
  'profissao' => 'Programador'
];

$chaves = array_keys($array);
$valores = array_values($array);
?>

<!-- Solução -->
<table border="1">
  <tr>
    <!-- as chaves serão os títulos da tabela -->
    <?php foreach ($chaves as $chave) : ?>
      <th><?php echo $chave; ?></th>
    <?php endforeach; ?>
  </tr>
  <tr>
    <?php foreach ($valores as $valor) : ?>
      <td><?php echo $valor; ?></td>
    <?php endforeach; ?>
  </tr>
</table>

<!-- Outra solução -->
<?php
$array = [
  'nome' => 'Erivelton',
  'idade' => 32,
  'empresa' => 'RdrTech',
  'cor' => 'Azul',
  'profissao' => 'Programador'
];
?>

<table border="1">
  <tr>
    <!-- pegando chave e valor do meu array, mas só utilizando a chave no PHP -->
    <?php foreach ($array as $chave => $valor) : ?>
      <th><?php echo $chave; ?></th>
    <?php endforeach; ?>
  </tr>
  <tr>
    <!-- pegando chave e valor do meu array, mas só utilizando o valor no PHP -->
    <?php foreach ($array as $chave => $valor) : ?>
      <td><?php echo $valor; ?></td>
    <?php endforeach; ?>
  </tr>
</table>