<?php
// Coletando informações do meu formulário.
$nomes = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

// Fazendo a verificação   
if ($nomes) { // se houver algum dado na variável $nomes, faça isso:
  /* Lendo o conteúdo de nomes.txt e armazenando o arquivo à variável $lista, 
  dessa forma, lista passará a ter o conteúdo do arquivo de texto */
  $lista = file_get_contents('nomes.txt');

  // Adicionando uma nova linha em $nomes, cada nome adicionado terá uma quebra de linha e será uma lista
  $nomes = "\n<li>" . $nomes . "</li>";

  /* Concateno $nomes com $lista, assim todo nome que for adicionado no formulário, 
  vai ser adicionado dentro de $lista, como estou usando (.=) os dados dentro de lista não serão alterados, 
  mas sim adicionados e tudo que for salvo em $nomes, será adicionado em $lista. */
  $nomes .= $lista;

  /* Salvando o conteúdo novo no meu arquivo nomes.txt junto do texto que já tinha antes, 
  estou usando a variável $nomes porque agora que $nomesfoi concatenada com $lista, 
  ao salvar em nomes o arquivo de $lista será atualizado. */
  file_put_contents('nomes.txt', $nomes);

  // redireciona para o index após adicionar um novo nome.
  header("Location: index.php");
  exit;
} else {
  // Se não houver dados, redireciona para o index
  header("Location: index.php");
  exit;
}
