<h1>Cabeçalho</h1>
<?php
// Para ler o cookie eu uso uma variável global chamada $_COOKIE, como essa variável é um array, eu preciso definir seu nome
if (isset($_COOKIE['nome'])) { // se estiver setada (definida) a variável $_COOKIE, ela aparece, se não, ela na tela não aparece e o erro some
  /* se existir um cookie com o nome 'nome', vou exibi-lo. 
  Vou armazenar esse $_COOKIE dentro de uma variável para concatenar com meu h2 que será exibido na tela 
*/
  $nome = $_COOKIE['nome'];
  // exibindo meu cookie concatenando com um h2.
  echo '<h2>' . $nome . '</h2>';
}
?>