<?php
$array = [
  'nome' => 'Bonieky',
  'idade' => 90,
  'empresa' => 'B7web',
  'cor' => 'Azul',
  'profissao' => 'Fazedor de bolo'
];

// array_keys() cria um segundo array sem alterar o array original, esse array novo terá apenas as chaves do array que eu passar como parâmetro da função, como essa função vai criar um segundo array, eu preciso armazenar os valores dentro de uma variável.

// armazenando o novo array gerado pelo array_keys na variável $chaves.
$chaves = array_keys($array);
// exibindo o novo array na tela
print_r($chaves);

// O array_keys faz basicamente o seguinte: pega as chaves do array que tô mandando e gera um novo array só com essas chaves.


// array_values() gera um novo array somente com os valores do array associativo que eu passar no parâmetro.
// Foi gerado um novo array com os valores e agora cada valor tem uma chave própria, que antes não tinha.
$valores = array_values($array);
print_r($valores);
