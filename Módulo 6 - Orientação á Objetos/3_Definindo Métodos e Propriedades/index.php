<?php
// Propriedades são as características que uma classe vai ter, 
// consequentemente o objeto também terá quando for criado a partir do modelo que contenha as propriedades.

// Uma classe pode ter vários tipos de propriedades

/*
Quando uma propriedade é pública na classe, podemos acessar essa propriedade de fora da classe, 
que é o que está sendo feito quando foi definida (alterada) a quantidade de likes do meu objeto por exemplo, 
eu só consegui acessar e definir essa propriedade porque ela é pública na minha classe.
*/
class Post {
  public $likes = 0;
  public $comments = [];
  public $author;
}

$post1 = new Post();
// Só foi possível definir um valor à propriedade porque ela é pública
$post1->likes = 3;

$post2 = new Post();
$post2->likes = 10;

// Mesma coisa aqui, só conseguimos acessar porque a propriedade é pública.
echo "POST 1: $post1->likes" . "<br/>";
echo "POST 2: $post2->likes";

// Propriedade Privada
class PostPrivate {
  // Se eu mudar a propriedade de like e colocar como privada, 
  // eu não terei mais acesso à essa propriedade quando eu for exibir na tela com o meu echo.
  // essa propriedade é usada apenas internamente, para não dar acesso ao mundo exterior, assim você protege a sua classe de interferência externa.
  private $likes = 0;
  public $comments = [];
  public $author;
}

$post1 = new PostPrivate();
// Removi a definição que eu havia feito no meu objeto para não atrapalhar.
$post2 = new PostPrivate();

echo "POST 1: $post1->likes" . "<br/>";
echo "POST 2: $post2->likes";

// propriedade Protegida
/* A funcionalidade dela é parecida com a private, não dá acesso ao mundo exterior e é para uso interno, 
se alguém tentar acessar não conseguirá, pois ela está protegida */
class PostProtected {
  protected $likes = 0;
  public $comments = [];
  public $author;
}

$post1 = new PostProtected();
$post2 = new PostProtected();


echo "POST 1: $post1->likes" . "<br/>";
echo "POST 2: $post2->likes";

// MÉTODOS //
class PostMethod {
  public $likes = 0;
  public $comments = [];
  public $author;

  // um método é basicamente uma função dentro da classe, seja pública, privada ou protegida
  public function aumentarLike() {
    // Jeito errado de aumentar os likes porque a variável $post1 não existe dentro da classe, só fora.
    $post1->likes++;
  }
}

$post1 = new PostMethod();
$post2 = new PostMethod();

// Jeito certo de se aumentar os likes de um objeto, usando o $this
class PostMethodRight {
  public $likes = 0;
  public $comments = [];
  public $author;

  public function aumentarLike() {
    // Os likes do próprio item que eu acessar serão incrementados.
    $this->likes++;
  }
}

/* $post1 é seu próprio $this, porque a partir do momento que ele é um 
objeto e esse objeto foi criado a partir do modelo original e o modelo 
original tem o método dentro dele com um $this. */
$post1 = new PostMethodRight();
$post2 = new PostMethodRight();

/* Executando o método de aumentar like. 
Quando faço aumentarLike no objeto $post1, estou executando a função que 
existe na classe original e que foi copiada pra dentro de $post1 
quando esse objeto foi criado, então $this vai ser o próprio item que 
estou referenciando, ou seja, $post1. */
$post1->aumentarLike();
$post1->aumentarLike();
$post1->aumentarLike();
$post1->aumentarLike();
$post1->aumentarLike();

echo "POST 1: $post1->likes" . "<br/>";
echo "POST 2: $post2->likes";
