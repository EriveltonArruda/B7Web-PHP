<?php
// ** um construtor é um método que é executado toda vez que um objeto é criado. **

class Post {
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  /* 
  Para criar um construtor é necessário colocar __ antes.

  É possível já criar um objeto com as informações corretas, 
  fazemos isso passando parâmetros no objeto, 
  mas como eu recebo essa informação no código? 
  No construtor, então vou definir um parâmetro no meu construtor, 
  esses parâmetros poderiam seguir a ordem da minha classe (likes, coments, author)

  se deixar o parâmetro como obrigatório, dará erro caso no objeto que for criado sem parâmetro.
  temos duas opções para evitar isso:
  1. Deixando o parâmetro do construtor opcional
  2. Passando um parâmetro obgrigatório como 0 na criação do objeto
  */

  // opção 1: deixando o parâmetro como opcional para evitar erro na criação do objeto
  public function __construct($qtLikes = 0) {
    /* Os likes da classe vão receber os valores do parâmetro do objeto assim 
  que o objeto for criado */
    $this->likes = $qtLikes;
  }

  public function aumentarLike() {
    $this->likes++;
  }
}

/* Na criação do objeto eu passo o parâmetro que será recebido pelo construtor 
  e será adicionado aos likes da minha classe */
$post1 = new Post(25);
$post2 = new Post(); // dará erro porque está sem parâmetro

// Opção 2: Passando um parâmetro obrigatório na criação do meu objeto
$post2 = new Post(0);


echo "POST 1: $post1->likes" . "<br/>";
echo "POST 2: $post2->likes";

/*
O construtor serve basicamente pra isso, pra o que quer que eu precise executar assim que o objeto é criado, 
eu executo dentro do meu construtor, seja auxiliando no preenchimento de informações ou fazendo outra coisa específica.

Por exemplo: Digamos que eu quero saber o ID do post e quero também fazer uma consulta dentro do meu banco de dados assim que o objeto for criado, eu posso fazer isso no meu construtor, no meu construtor eu posso fazer várias coisas específicas e não somente passar variáveis.
*/

class PostBD {
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  /* Como quero pegar a informação do id do post, eu coloco o id do post 
como parâmetro do meu construtor */
  public function __construct($postId) {
    $this->id = $postId;
    // aqui ocorreria a consulta do banco de dados para pegar informações do POST $id
  }

  public function aumentarLike() {
    $this->likes++;
  }
}

// Criando Objeto com um id para o construtor criar o objeto com o id
$postId = new PostBD(1);
$postId2 = new PostBD(0);


echo "POST 1: $post1->likes" . "<br/>";
echo "POST 2: $post2->likes";
