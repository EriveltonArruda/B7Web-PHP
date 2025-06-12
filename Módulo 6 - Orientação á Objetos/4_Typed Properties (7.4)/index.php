<?php
/* “Propriedades tipadas” é um recurso que veio a partir do PHP 7.4, 
com ela eu consigo definir uma propriedade da minha classe para receber somente um determinado tipo de valor, 
por exemplo: a minha propriedade likes que simula os likes do facebook obviamente só deve receber números, 
mas digamos que eu definisse uma string para essa propriedade, o que aconteceria?
*/
class Post {
  public $likes = 0;
  public $comments = [];
  public $author;

  public function aumentarLike() {
    $this->likes++;
  }
}

$post1 = new Post();
// Definindo uma string para a propriedade likes (Será aceito)
$post1->likes = "Erivelton";

$post2 = new Post();


echo "POST 1: $post1->likes" . "<br/>";
echo "POST 2: $post2->likes";

// Propriedade tipada
class PostTyped {
  // tipando a propriedade com o valor inteiro (int)
  public int $likes = 0;
  // Só aceita array
  public array $comments = [];
  // Só aceita string
  public string $author;

  public function aumentarLike() {
    $this->likes++;
  }
}

$post1 = new PostTyped();
// Passando uma string em likes, mas likes só aceita número.
$post1->likes = "Erivelton";

$post2 = new PostTyped();


echo "POST 1: $post1->likes" . "<br/>";
echo "POST 2: $post2->likes";

/* Uma observação importante sobre a string é que se eu definir alguma propriedade como string e definir um número à essa propriedade, 
não ocorrerá erro algum, isso porque o PHP tenta reaproveitar o número para poder transformar em uma string com aquele número, por exemplo: */
$post1 = new Post();
// Definindo uma string para author.
$post1->author = "Erivelton \n";
/* Definindo um número junto da string, por isso o (.=) para manter os dois valores 
e assim ficar mais fácil de entender. */
$post1->author .= 20;

$post2 = new Post();


echo "POST 1: $post1->author" . "<br/>";
