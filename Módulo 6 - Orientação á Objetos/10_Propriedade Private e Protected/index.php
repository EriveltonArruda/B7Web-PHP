<?php
// Classe de exemplo
class Post {
  protected int $id;
  private int $likes = 0;

  public function setId($i) {
    $this->id = $i;
  }

  public function getId() {
    return $this->id;
  }

  public function setLikes($n) {
    $this->likes = $n;
  }
  public function getLikes() {
    return $this->likes;
  }
}

// nessa classe vou mudar manualmente o valor do id
class Foto extends Post {
  private $url;

  public function __construct($id) {
    // Como tenho acesso às propriedades de Post, posso alterar normalmente aqui
    // Só consigo fazer as alterações porque estou dentro da classe
    $this->id = 900;
  }
  public function setUrl($u) {
    $this->url = $u;
  }

  public function getUrl() {
    return $this->url;
  }
}

$foto = new Foto(20);
$foto->setLikes(12);
$foto->setUrl('www.google.com');
// Não consigo alterar fora da classe.
$foto->id = 700;


class PostPrivate {
  // Se colocar como private, não posso alterar mais
  private int $id;
  private int $likes = 0;

  // Método Público
  public function setId($i) {
    $this->id = $i;
  }

  // Método Público
  public function getId() {
    return $this->id;
  }

  // Método Público
  public function setLikes($n) {
    $this->likes = $n;
  }

  // Método Público
  public function getLikes() {
    return $this->likes;
  }
}

class FotoPrivate extends PostPrivate {
  private $url;

  public function __construct($id) {
    // Não funciona mais porque não é a classe Mãe.
    $this->id = 900;
  }
  public function setUrl($u) {
    $this->url = $u;
  }

  public function getUrl() {
    return $this->url;
  }
}

/* Quando uma propriedade é definida como Private, ela só pode ser alterada dentro da classe que a criou (PostPrivate), então qualquer outra classe que herdar (FotoPrivate) as propriedades da classe mãe (PostPrivate), não poderão fazer alterações nas propriedades privadas, somente na classe mãe (PostPrivate).

Mas porque eu posso usar a propriedade setLikes fora da minha classe Post e também consigo usar o setId dentro do meu construct? Simples, porque o método setLikes é um método público, então eu consigo alterar ele de fora da minha classe, se o método fosse protected eu não conseguiria. */

$foto = new FotoPrivate(20);
// Meu método setLikes é público, então consigo alterar ele de fora da classe
$foto->setLikes(12);
$foto->setUrl('www.google.com');
// Não consigo alterar fora da classe.
$foto->id = 700;


/* Existe também um detalhe importante, podemos sobrescrever um método que foi herdado na classe que herdou as propriedades da classe mãe, por exemplo: Se eu definir meu setLikes como protected na classe Mãe (Post) e quiser recriar ele como público na minha classe filha (Foto), eu posso fazer assim: */

class PostSob {
  private int $id;
  private int $likes = 0;

  public function setId($i) {
    $this->id = $i;
  }

  public function getId() {
    return $this->id;
  }

  // setLikes está protegido na classe mãe
  protected function setLikes($n) {
    $this->likes = $n;
  }

  public function getLikes() {
    return $this->likes;
  }
}

class FotoSob extends PostSob {
  private $url;

  public function __construct($id) {
    $this->setId($id);
  }
  // Aqui estou sobrescrevendo o método da classe mãe
  public function setLikes($n) {
    echo "Chamou!";
  }

  public function setUrl($u) {
    $this->url = $u;
  }

  public function getUrl() {
    return $this->url;
  }
}

/* Mesmo que eu tenha estendido Post em Foto, eu posso recriar métodos e propriedades que eu tenha herdado, ele vai simplesmente substituir, o que vai prevalecer é o da classe que você vai estar usando, por exemplo: */

$foto = new FotoSob(20);
// Como aqui eu usei o setLikes da classe FotoSob, é ele quem vai prevalecer
$foto->setLikes(12);
$foto->setUrl('www.google.com');
