<?php
$tipo = 'foto';

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

switch ($tipo) {
  case 'foto':
    echo "Exibindo uma FOTO";
    break;
  case 'video':
    echo 'Exibindo VIDEO';
    break;
  case 'texto':
    echo 'Exibindo TEXTO';
    break;
  default:
    echo 'Formato inexistente';
}
