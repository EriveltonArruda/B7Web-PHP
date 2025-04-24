<?php
/* Essa tag organiza os itens linha por linha, se não tivesse colocado essa tag, 
os itens iriam ficar em uma linha só e não ia dar pra visualizar bem */
echo '<pre>';

// mostrando na tela as informações do arquivo quando foi feito o upload usando a variável global $_FILES
print_r($_FILES);

/* Essa função move o arquivo para onde quero, 
parâmetros da função:
1º Onde o arquivo está (está na pasta temporária dentro de arquivo)
2º A pasta onde quero colocar o arquivo

move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/nome do arquivo');
*/

// Pegando a informação do arquivo e usando seu nome.
$nome = $_FILES['arquivo']['name'];
/* movendo o arquivo da pasta temporária para a pasta arquivos e mantendo o 
nome original do arquivo com a variável $nome */
move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/' . $nome);

/*
não é muito legal utilizar o mesmo nome do arquivo que foi feito o upload porque caso seja feito o upload de outro arquivo com o mesmo nome do arquivo que já tenha na pasta, por exemplo: tenho uma imagem com o nome avatar.jpg na pasta arquivo e outra pessoa vai fazer o upload da foto dela e esse arquivo está com o nome avatar.jpg, quando o upload for feito, o arquivo que está dentro da pasta arquivos será substituído por esse novo porque o nome é o mesmo.
*/