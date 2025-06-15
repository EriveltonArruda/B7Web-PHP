<?php
/* 
FILTER_INPUT() faz duas coisas automaticamente (pega o campo e também verifica se o campo filtra determinado tipo de coisa, se está preenchido, etc).
Estrutura da função:
1º Parâmetro: definimos qual o tipo de método que foi usado no formulário
(GET ou POST), tem que colocar o INPUT_ antes.
2º Parâmetro: Nome do campo.

FILTER_INPUT(INPUT_POST, "nome");
*/

// pegando a informação do campo nome
$nome = filter_input(INPUT_POST, "nome");

// exibindo o resultado da captura, o resultado vai ser o nome que o usuário colocou no campo nome do formulário.
echo "NOME: " . $nome;

// O código acima foi uma breve explicação de como funciona, abaixo é como usamos ele, fazendo verificação
$nome = filter_input(INPUT_POST, "nome"); // $nome agora vai ser o nome que pegar do campo nome do formulário
// Também quero exibir a idade além do nome
$idade = filter_input(INPUT_POST, "idade");

// pode usar tabela verdade também se quiser, 
// assim só entrará na condição se AMBOS estiverem preenchidos - 
// if ($nome && $idade), mas vamos deixar somente o nome
if ($nome) {
  // Se nome foi preenchido, vai mostrar o nome que foi colocado no campo nome
  echo "NOME:" . $nome;
  echo "IDADE: " . $idade;
} else {
  // Se não for preenchido, vai exibir a mensagem abaixo:
  // echo "NÃO ENVIOU!"; // Removido para usar o redirecionador
  /* Melhorando o else adicionando um redirecionador, é melhor do que deixar a mensagem "NÃO ENVIOU"

  Estrutura da função:
  Dentro de location colocamos para onde será redirecionado.*/
  header("Location: index.php"); // Volta para o formulário se não foram enviados os dados.

  /* sempre coloque um exit depois do header, esse exit vai cancelar a execução de tudo que tenha abaixo, isso porque existem uns hacks que algumas pessoas fazem que eles conseguem acesso ao location mas sem fazer o redirecionamento e ai continuam a execução da aplicação, dessa forma tendo acesso às informações, então usamos o exit para se proteger dessa prática, ao usar o exit o navegador faz o redirecionamento e pausa a aplicação.*/
  exit;
}

/*
Uma observação muito importante sobre a função header, eu só posso fazer a troca de header quando não enviei nenhuma informação para a tela ainda, por exemplo:

Digamos que antes do if foi feito um echo de alguma coisa, só esse fato pode dar problema, porque o redirecionamento tem de ser feito antes de qualquer envio de informação.
*/
