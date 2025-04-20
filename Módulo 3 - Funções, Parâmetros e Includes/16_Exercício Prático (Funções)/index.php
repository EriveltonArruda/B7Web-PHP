<?php
/*
O exercício é fazer uma função que vai receber uma string com uma data no formato internacional e essa função vai retornar a data convertida para o padrão nacional e o dia da semana em português.
*/
// SOLUÇÃO 1
// criando a função
function diaDaSemana(string $data) {

  // transformando $data em milisegundo
  $time = strtotime($data);

  // convertendo a data para o padrão nacional utilizando os milisegundos acima
  echo date("d/m/Y - ", $time);

  /* criando o dia que será transformado de inglês para português utilizando 
  o parâmetro 'D', que é uma representação textual de um dia, três letras.
  */
  $dia = date('D', strtotime($data));

  /* Então em um switch eu coloco as três letras em inglês e coloco a tradução 
  delas abaixo. */
  switch ($dia) {
    case 'Sun':
      echo 'Domingo';
      break;
    case 'Mon':
      echo 'Segunda-Feira';
      break;
    case 'Tue':
      echo 'Terça-Feira';
      break;
    case 'Wed':
      echo 'Quarta-Feira';
      break;
    case 'Thu':
      echo 'Quinta-Feira';
      break;
    case 'Fri':
      echo 'Sexta-Feira';
      break;
    case 'Sat':
      echo 'Sábado';
      break;
    default:
      echo 'Nenhum dia';
  }
};

// Chamo a função com a data como parâmetro
diaDaSemana('2023/04/24'); // Resultado: 24/04/2023 - Segunda-Feira


// SOLUÇÃO 2
$data = '2023/04/24';

function diaDaSemanA(string $data) {

  echo date("d/m/Y - ", strtotime($data));

  $dia = date('D', strtotime($data));
  switch ($dia) {
    case 'Sun':
      echo 'Domingo';
      break;
    case 'Mon':
      echo 'Segunda-Feira';
      break;
    case 'Tue':
      echo 'Terça-Feira';
      break;
    case 'Wed':
      echo 'Quarta-Feira';
      break;
    case 'Thu':
      echo 'Quinta-Feira';
      break;
    case 'Fri':
      echo 'Sexta-Feira';
      break;
    case 'Sat':
      echo 'Sábado';
      break;
    default:
      echo 'Nenhum dia';
  }
};

echo diaDaSemanA($data); // Resultado: 24/04/2023 - Segunda-Feira