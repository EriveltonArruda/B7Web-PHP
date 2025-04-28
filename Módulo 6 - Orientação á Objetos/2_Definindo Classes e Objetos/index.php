<?php
/*
Classes são basicamente o modelo, primeiro definimos as características de um objeto que queremos criar, é que nem um carro, primeiro criamos a ideia e o modelo do carro e depois transformamos ele em um carro, com todas as suas características e propriedades, que no caso o carro seria um objeto.

Como resumo simples do que é classe e objeto:
Classe é a ideia, o modelo.
Objeto é o item real que foi feito a partir do modelo.
*/

// Classe que simula um post de Facebook
class Post {
  // todo post começa com 0 likes
  public $likes = 0;
  // como é uma lista de comentários, então passo um array vazio
  public $comments = [];
  /* quem fez o post, como não tem autor ainda porque é uma ideia, então autor 
  não recebe valor. */
  public $author;
}

// Criando um Objeto
$post1 = new Post();
/* Para definir as propriedades eu uso uma seta -> depois da variável e antes 
do nome da propriedade e defino a quantidade daquela propriedade que o objeto vai ter.
por exemplo: o valor de like é 0 na minha classe, quero que o post1 tenha 3 likes. */
$post1->likes = 3;

// criando um novo objeto
$post2 = new Post();
// Definindo a quantidade que determinada propriedade desse objeto vai ter 
$post2->likes = 10;

// consigo acessar a propriedade da variável usando a seta ->
echo "POST 1: $post1->likes" . "<br/>";
echo "POST 2: $post2->likes";
