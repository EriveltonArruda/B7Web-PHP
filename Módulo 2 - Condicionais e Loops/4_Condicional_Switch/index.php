<?php
/* Esse bloco será recriado no Switch
if ($tipo == 'foto') {
  echo 'Exibindo uma foto';
}
if ($tipo == 'video') {
  echo 'Exibindo um video';
}
if ($tipo == 'texto') {
  echo 'Exibindo um texto';
}
*/

// primeiro crio a variável
$tipo = 'instagram';

// em seguida faço a seleção de casos
switch ($tipo) {
  // caso tipo tenha o valor foto, executará o código de foto
  case 'foto':
    echo 'Exibindo FOTO';
    break;
  // caso tipo tenha o valor video, executará o código de video
  case 'video':
    echo 'Exibindo VIDEO';
    break;
  // caso tipo tenha o valor texto, executará o código de texto
  case 'texto':
    echo 'Exibindo TEXTO';
    break;
  // Sempre é bom ter um valor "padrão" para caso seja passado um valor que não está dentro do switch.
  default:
    echo 'Você não inseriu nenhuma das opções, apenas são permitidos: FOTO, VIDEO, TEXTO';
};

/*
Resultado:
Exibindo FOTO;
*/