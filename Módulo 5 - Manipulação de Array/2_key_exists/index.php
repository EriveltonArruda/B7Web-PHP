<?php
// Essa função serve pra verificar se um array tem determinada chave, o array abaixo será usado para exemplo da função.
$array = [
  'nome' => 'Bonieky',
  'idade' => 90,
  'empresa' => 'B7web',
  'cor' => 'Azul',
  'profissao' => 'Fazedor de bolo'
];

/* Parâmetros da função key_exists();
1º O que está sendo procurado
2º Onde está procurando (array)
*/

// Se existir a chave idade no meu $array
if (key_exists('idade', $array)) {
  // Usa ele
  $idade = $array['idade'];
  // E exibe a idade
  echo $idade . " anos";
  // Se não tiver
} else {
  // Mostra essa mensagem para o usuário.
  echo "não tem idade";
}

// caso mudasse para 'age' dentro do array, não funcionaria porque o key_exists está procurando por 'idade'