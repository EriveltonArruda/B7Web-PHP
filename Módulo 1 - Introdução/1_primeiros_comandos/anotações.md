Apache recebe a requisição
Manda pro local correto (pasta php1), depois que o apache carregou o arquivo, ele vai procurar algum código pra interpretar, se tiver código php na página (index.php).

Apache chama o PHP pra interpretar o código PHP.
O PHP manda o resultado para o Apache.
O apache junta com o que não é interpretável e manda pro usuário.

Tudo que está entre <?php ?> é código PHP.
