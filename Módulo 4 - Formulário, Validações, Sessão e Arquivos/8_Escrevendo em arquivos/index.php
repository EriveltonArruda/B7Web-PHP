<?php
// Texto que será escrito no arquivo txt
$texto = "PHP Não está morto e é ótimo para conseguir a primeira vaga!";

/* Se o arquivo não existir, a função vai criar, 
se o arquivo já existir, a função vai substituir o arquivo.

Essa função tem 2 parâmetros:
1º é o nome do arquivo
2º o conteúdo.

file_put_contents(1º Parâmetro, 2º Parâmetro);
*/

/* como esse arquivo não existe, ele vai ser criado com o nome: nome.txt e terá 
o conteúdo da minha variável $texto */
file_put_contents('nome.txt', $texto);

echo "Arquivo criado com sucesso! <br/>";

// Para que o arquivo seja criado, é necessário abrir a página no navegador.


// Podemos adicionar textos em arquivos que já contém outros textos, por exemplo:
// Lendo o conteúdo de texto.txt
$texto = file_get_contents('texto.txt');
// Adicionando uma nova linha com um novo texto dentro do arquivo texto.txt
$texto .= "\nPHP Não está morto e é ótimo para conseguir a primeira vaga! <br/>";
// Salvando o conteúdo novo no meu arquivo texto.txt junto do texto que já tinha antes
file_put_contents('texto.txt', $texto);

echo $texto;
