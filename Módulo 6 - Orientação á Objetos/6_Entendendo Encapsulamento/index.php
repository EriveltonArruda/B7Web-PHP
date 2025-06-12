<?php
/* O encapsulamento serve para proteger as propriedades de acessos externos ou de modificações desnecessárias naquele objeto.

Hoje em dia encapsulamento é quase um sinônimo para setter e getter. */

// Sem encapsulamento
class Post {
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  public function aumentarLike() {
    $this->likes++;
  }
}

$post1 = new Post();
// Definindo um valor para a propriedade author sem encapsulamento.
$post1->author = "Erivelton";

$post2 = new Post();
// Definindo um valor para a propriedade author sem encapsulamento.
$post2->author = "Fulano";

// Exibindo a quantidade de likes e quem criou o post.
echo "POST 1: $post1->likes likes - " . $post1->author . "<br/>";
echo "POST 2: $post2->likes likes - " . $post2->author . "<br/>";

// encapsulamento nos permite “setar” e pegar os dados das propriedades
class PostEncapsulated {
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  public function aumentarLike() {
    $this->likes++;
  }

  /* Primeiro criamos o método, esse setAuthor é o que vai definir o autor, 
  então ele será criado com uma variável como parâmetro para que no momento 
  que esse método for chamado e colocarmos o nome do autor no parâmetro... */
  public function setAuthor($n) {
    /* O autor da classe que agora está sem valor, será a variável do parâmetro do método, 
    ou seja, será o valor que definirmos no momento de usarmos o método no objeto. */
    $this->author = $n;
  }

  // Criamos o método getAuthor que sua única função será exibir o autor na tela
  public function getAuthor() {
    /* O autor exibido na tela será o autor que está na classe, que agora será
    o nome que for definido no parâmetro de setAuthor */
    return $this->author;
  }
}

$post1 = new PostEncapsulated();
/* Definindo um autor com o método setAuthor e agora a propriedade author
dentro da minha classe será o valor que eu passar no parâmetro */
$post1->setAuthor('Erivelton');

$post2 = new PostEncapsulated();
$post2->setAuthor('Fulano');

// Exibindo o autor da minha classe com o getAuthor
echo "POST 1: $post1->likes likes - " . $post1->getAuthor() . "<br/>";
echo "POST 2: $post2->likes likes - " . $post2->getAuthor() . "<br/>";

/* Usamos getters e setters Porque dessa forma temos a possibilidade de proteger e tratar aquela informação específica, 
por exemplo: Imagine que na hora de usar o setAuthor, o nome dentro do parâmetro foi usado com letra minúscula e eu quero que a primeira letra do nome do autor seja maiúscula, apenas definindo o author sem usar o encapsulamento eu não tenho controle sobre a informação. */

$post1 = new PostEncapsulated();
// Dessa forma não tenho controle sobre a informação nessa variável
$post1->author = "erivelton";

/* Aqui eu posso ter controle sobre a informação e fazer as devidas alterações 
no método setAuthor que está na minha classe */
$post1->setAuthor('erivelton');

/* Se fosse passado como da forma anterior ($post1->author), eu não tenho controle sobre a variável, 
já quando eu passo o valor como setAuthor, eu tenho controle no meu setAuthor dentro da minha classe 
e dentro dela eu poderia usar uma função para fazer com que a primeira letra fosse maiúscula, por exemplo: */

class PostControl {
  /* Para ter todo o funcionamento de um encapsulamento, é importante criar um set e um get para CADA uma das propriedades, 
assim podemos deixar as propriedades da classe privadas, porque dessa forma, a única forma de alterar a propriedade da minha classe 
é utilizando o set, isso dá uma segurança a mais às minhas informações */
  private int $id;
  private int $likes = 0;
  private array $comments = [];
  private string $author;

  public function aumentarLike() {
    $this->likes++;
  }

  public function setAuthor($n) {
    /* Mesmo se o parâmetro seja digitado com letra minúscula, eu consigo 
  ter controle da informação e fazer a alteração conforme eu precise */
    $this->author = ucfirst($n); // deixando a primeira letra maiúscula
  }
}

/* Assim, podemos fazer com que o set faça as devidas verificações, por exemplo: 
  no meu setAuthor, vou criar uma verificação que só vai aceitar alterações da propriedade author se o nome passado no parâmetro seja >= 3, 
  se não for colocado um nome com mais de 3 letras, meu author não será alterado.*/
class PostName {
  /* Para ter todo o funcionamento de um encapsulamento, é importante criar um set e um get para CADA uma das propriedades, 
  assim podemos deixar as propriedades da classe privadas, porque dessa forma, a única forma de alterar a propriedade da minha classe 
  é utilizando o set, isso dá uma segurança a mais às minhas informações */
  private int $id;
  private int $likes = 0;
  private array $comments = [];
  private string $author;

  public function aumentarLike() {
    $this->likes++;
  }

  public function setAuthor($n) {
    // só aceita alterações da propriedade se o nome do author for >= 3
    if (strlen($n) >= 3) {
      $this->author = ucfirst($n);
    }
  }

  public function getAuthor() {
    return $this->author;
  }
}

$post1 = new PostName();
/* Será lançado um erro avisando que o nome passado tem menos de 3 letras
e por isso não entrou nos critérios definidos no meu método setAuthor. */
$post1->setAuthor('Pi');

$post2 = new PostName();
$post2->setAuthor('Fulano');

/* podemos resolver esse erro acima de duas formas:
  1. colocar author com o valor ' '
  2. deixar o author sem valor na minha propriedade e no getAuthor eu utilizo um Null Cao onde se o nome do author existir, use ele, se não, use a string ‘visitante’.
*/

// Opção 1:
class PostFirstOption {
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  private string $author = ' ';
}

// Opção 2:
class PostSecondOption {
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  private string $author;

  public function getAuthor() {
    return $this->author ?? 'Visitante';
  }
}

/* 
Tanto para setar ou para pegar informações, usando o encapsulamento, tenho acesso à fazer a manipulação certa, 
deixando o objeto do jeito que tem de ser, além de ser protegido, então mesmo que uma informação seja enviada de forma errada, 
ele vai ter condições de filtrar ou rejeitar a informação enviada.

Como costume, sempre que criar uma propriedade, crie um Set e um Get para ela. 
*/