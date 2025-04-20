<?php
// Número Absoluto
$numero = -8.4;

echo abs($numero); /* Vai retornar 8.4 pois o número absoluto de um negativo é 
ele mesmo positivo. */

// PI
echo pi(); // Resultado: 3.1415926535898

// Floor (arredonda para baixo)
$numero = 2.7;
echo floor($numero); // Resultado: 2;
/* deu 2 porque não passou de 2 no total, mesmo que tenha dado 2.7, essa função
floor sempre arredondará para baixo;
*/

// Ceil (arredonda para cima)
echo ceil($numero); // Resultado: 4;
/* deu 4 porque passou de 3, mesmo que tenha dado 3.1, essa função ceil sempre 
arredondará para cima, ou seja: 3.1 = 4;
*/

// Natural round()
$numero = 3.4;
echo round($numero); // Resultado 3;
/* o resultado deu 3 porque se for entre 3 e 3.4 dará 3, se o resultado fosse 
de 3.5 até 3.9, seria arredondado para 4.
*/

// Com o round() podemos escolher quantas casas decimais queremos que a função nos retorne, basta colocar no segundo parâmetro
$numero = 12.4287423;

echo round($numero, 2); // Resultado: 12.43;

// Número aleatório
$aleatorio = rand(3, 9); // vai retornar um número aleatório entre 3 e 9;

echo $aleatorio;

//Existem duas funções muito utilizadas em array para saber o máximo e o mínimo que tem dentro do array, são as funções max e min.
// Criamos a lista e em seguida colocamos ela nas funções max e min.
$lista = [1, 4, 9, 8];
echo max($lista); // Exibe 9;
echo min($lista); // Exibe 1;