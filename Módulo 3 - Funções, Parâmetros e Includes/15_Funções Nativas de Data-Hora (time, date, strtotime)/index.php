<?php
// No PHP trabalhamos com data em milisegundos desde a data 0
//data 0 é 01/01/1970 - A função time() dá o valor em milisegundos

echo time();
/*
Resultado:
1673987986
*/

// date() exibe a data real
/* 
Parâmetros da função
1° Formato de exibição da data (padrão brasileiro d/m/Y),
exibição da hora (H:i:s). Existe uma diferença entre o Y e o y, no Y o ano 
sai completo (exemplo: 2023) já no y o ano sai abreviado (ex: 23);
2° Quantidade de time() que queremos
*/

date('d/m/y', 0);

/* 
No exemplo abaixo estou usando só um parâmetro, ou seja, data e hora, nesse 
caso a hora entra como extensão do primeiro parâmetro e a função mostrará 
o dia, mês, ano e hora do dia que foi usada.
*/
echo date('d/m/y H:i:s');
/*
Resultado:
17/01/23 21:44:07
*/

// strtotime() formata o padrão da data conforme queremos, isso porque quando trabalhamos com banco de dados, a data é sempre salva no padrão internacional
// Padrão internacional (Y/m/d) - $data = '2020-03-07';
// Essa função transforma a string em time em milisegundos
strtotime();

$data = '2020-03-07';

$time = strtotime($data);

// foi usado o time em 0 para especificar a data padrão.
echo date('d/m/Y', 0); // Resultado: 01/01/1970

$data = '2020-03-07'; // Padrão internacional (Y/m/d)

// nossa data convertida em milisegundos
$time = strtotime($data);

// convertendo para padrão brasileiro usando $time como segundo parâmetro.
echo date('d/m/Y', $time); // Resultado: 07/03/2020 (formatado d/m/Y)

// refatorando
$data = '2020-03-07';
echo date('d/m/Y', strtotime($data));
