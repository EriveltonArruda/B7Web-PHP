<?php
/* Parâmetros de rename para RENOMEAR um arquivo
1º O caminho até o arquivo que você quer renomear;
2º O novo nome que o arquivo terá;

Lembrando que para que surta efeito, é necessário abrir o arquivo no navegador.
*/

// Renomeando teste para teste2
rename('teste.txt', 'teste2.txt');

/* Parâmetros de rename para MOVER um arquivo
1º O nome do arquivo que quer mover;
2º O destino da pasta onde quero mover o arquivo;
________________________________________________________________________
Mudando o arquivo teste2 da pasta raiz para a pasta com o nome pasta, então
coloco o caminho dessa pasta de destino no segundo parâmetro */
rename('teste2.txt', 'pasta/teste2.txt');

/* Parâmetros de copy para COPIAR um arquivo
1º A origem do arquivo
2º O destino para onde quero colocar a cópia

Nesse exemplo eu estou pegando o arquivo teste2.txt e copiando para 
a minha pasta raiz.
*/
copy('pasta/teste2.txt', 'teste.txt');
