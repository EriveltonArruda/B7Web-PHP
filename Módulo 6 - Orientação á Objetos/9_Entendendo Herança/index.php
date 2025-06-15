<?php
// Classe que será herdada
class Post {
  /* Criando as propriedades privadas, ou seja, só poderão ser alteradas
com encapsulamento (set) */
  private int $id;
  private int $likes = 0;

  // Criando os setters de Id
  public function setId($i) {
    // $id vai ser o valor passado no parâmetro.
    $this->id = $i;
  }

  // Criando os getters de Id
  public function getId() {
    return $this->id;
  }

  // Criando os setters Likes
  public function setLikes($n) {
    // $likes vai ser o valor passado no parâmetro.
    $this->likes = $n;
  }

  // Criando os getters de Likes
  public function getLikes() {
    return $this->likes;
  }
}

/* Agora digamos que estou fazendo o facebook e tenho um post que é uma foto, vídeo, texto e etc, eu vou usar essa classe acima como uma classe geral, é como um carro, todo carro tem 4 rodas e tem motor, o que muda é algumas características de um carro para outro, um tem 2 portas, outro tem 4, um tem a mala maior, mas no geral, eles são o mesmo tipo: Um carro.

É exatamente isso que vou fazer agora, vou criar o post de foto, esse post vai ter as mesmas propriedades do Post de classe geral, ou seja, vai ter Id e Likes também, então para eu não ter que reescrever toda a classe, eu simplesmente faço com que o post de fotos HERDE a classe geral dessa forma:

extends significa que vamos usar tudo que tem dentro da classe Post, 
ou seja, herdar a classe Post inteira na classe Foto, 
então vou ter acesso ao id, likes da minha classe Post e etc. */
class Foto extends Post {
  // como foto tem uma Url, vou criar essa Url aqui
  private $url;

  /* Como eu tenho acesso ao $id que está dentro da classe Post que foi 
  herdada pela classe Foto, posso passar o $id no meu constructor, então
  Toda vez que eu instanciar um objeto, ele vai pegar a classe $id que está 
  em Post e assim eu posso alterar o $id. */
  public function __construct($id) {
    $this->setId($id);
  }

  // A propriedade URL dentro da classe vai ser quem em passar no parâmetro
  public function setUrl($u) {
    $this->url = $u;
  }

  public function getUrl() {
    return $this->url;
  }
}

// instanciando um novo objeto com o ID 20
$foto = new Foto(20);

/* Usando métodos que estão na classe Post no objeto que foi criado a partir
da classe Foto e definindo como 12 */
$foto->setLikes(12);

// Definindo a url dentro da classe Foto como google.com
$foto->setUrl('www.google.com');

/* Exibindo na tela o número do ID da foto (esse id está na classe Post, mas 
como foi herdado para Foto, tenho acesso pelo Objeto Foto (que foi criado
pela classe Fotos), exibindo também a quantidade de likes e a URL que está dentro da classe Foto junto com as propriedades que estão na classe Post */
echo "FOTO: #" . $foto->getId() . " - " . $foto->getLikes() . " likes" . " - " . $foto->getUrl();

/* Uma boa prática é separar os arquivos para fazer reaproveitamento de código, por exemplo: Em um arquivo coloca as classes gerais por assim dizer e em outro arquivo coloca as classes que herdarão as propriedades das classes gerais. */