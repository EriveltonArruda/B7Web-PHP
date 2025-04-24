<?php
// Para excluir um arquivo utilizamos o comando unlink, esse comando deleta qualquer arquivo, seja mp3, txt, imagem, arquivo php, contanto que o usuário tenha permissão do sistema para fazer isso.

// Nos parâmetros colocamos o arquivo que queremos deletar.
unlink('nomes.txt');
echo 'Arquivo excluido com sucesso!';

/*
Esse comando deleta apenas arquivos, não deleta pastas, para excluir pastas é necessário ler a pasta, excluir arquivo por arquivo dentro dessa pasta e no final excluir a pasta com outro comando.
*/