<?php
echo '<pre>';
print_r($_FILES);

/* Para evitar que os arquivos de mesmo nome sejam substituídos, utilizamos um hash.

função md5 para criar um hash, a função rand() vai criar um nome 
aleatório entre 0 e 1000. no final do md5 eu defino o tipo de arquivo '.jpg' 
$nome = md5(time() . rand(0, 1000)) . '.jpg';
*/

/* criando a lista de arquivos de imagem permitidos para usar no parâmetro do 
in_array, o in_array confere se o type está dentro da lista de types que quero aceitar,
estou colocando os mimetypes de arquivos de imagem (jpeg, jpg e png) */
$permitidos = ['image/jpeg', 'image/jpg', 'image.png'];

/* fazendo a verificação do tipo de arquivo, dentro de in_array eu vou procurar
o tipo de arquivo que eu quero, o arquivo está dentro de $_FILE (porque foi
um arquivo de upload) e dentro de ['arquivo'] eu pego o tipo ['type'], como
segundo parâmetro da função eu pego a lista de imagens que serão permitidas,
essa lista está dentro da minha variável $permitidos */
if (in_array($_FILES['arquivo']['type'], $permitidos)) {

  /* se for feito o upload de um arquivo de imagem que tenha os mimetypes
que estão na lista de permitidos, ele vai passar e vai ter um nome gerado */
  $nome = md5(time() . rand(0, 1000)) . '.jpg';

  // em seguida o arquivo será movido da pasta temporária para a pasta arquivos.
  move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/' . $nome);

  // Se tudo deu certo, é exibida a mensagem
  echo "Arquivo salvo com sucesso!";
} else {
  /* Se for colocado um arquivo que não for uma imagem, não será feito 
o upload e o usuário vai receber a seguinte mensagem: */
  echo "Arquivo não permitido!";
}
