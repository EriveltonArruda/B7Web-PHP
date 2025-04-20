<?php
$ingredientes = [
  'açucar',
  'farinha de trigo',
  'ovo',
  'leite',
  'fermento em pó'
];

/* Exemplo Básico de foreach
foreach ($ingredientes as $ingrediente) {
  echo "Item: " . $ingrediente . "<br/>";
}
*/

// Vendo a posição do item utilizando a chave
foreach ($ingredientes as $chave => $valor) {
  // Chamando $chave, eu pego a chave do array em cada loop, [0], [1], etc...
  echo "Item " . $chave . ": " . $valor . "<br/>";
}

// Dessa forma o número da primeira chave será 1 no lugar de 0
foreach ($ingredientes as $chave => $ingrediente) {
  // como será feita uma conta, isolamos $chave dentro de parênteses
  echo "Item " . ($chave + 1) . ": " . $ingrediente . "<br/>";
}


// Usando foreach para mostrar os itens dentro de uma lista
echo '<h2>Ingredientes</h2>';

echo '<ul>';
foreach ($ingredientes as $ingrediente) {
  echo "<li>$ingrediente</li>";
}
echo '</ul>';
