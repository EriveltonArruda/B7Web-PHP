<?php
// Polimorfismo age da mesma forma que interface, para entender melhor sobre polimorfismo, vou usar o exemplo abaixo
class Quad {
}

class Circ {
}

// No quadrado tenho que mandar largura e altura
$quadrado = new Quadrado(5, 5);
// No círculo eu tenho que mandar o raio do círculo
$circulo = new Circulo(7);

// Adicionando os objetos no array
$objetos = [
  $quadrado,
  $circulo
];

/* digamos que eu queira mostrar a área de cada um desses objetos, 
eu não quero saber que objeto é esse (círculo ou quadrado), eu só quero saber o tipo e a área dele, 
então vou criar um loop foreach para pegar o tipo e área de cada objeto do array, 
vou usar os métodos getTipo para pegar o tipo e getArea para pegar a área. */

// vou pegar o objeto da vez e a cada loop vou pegar o tipo e a area do objeto.
foreach ($objetos as $objeto) {
  // Variável com o método que vai pegar o tipo do objeto.
  $tipo = $objeto->getTipo();
  // Variável com o método que vai pegar a área do objeto.
  $area = $objeto->getArea();
  echo "AREA " . $tipo . ": " . $area . "<br/>";
}

/* Perceba que quadrado e circulo TEM que ter o tipo e a área, 
vou precisar criar esses dois métodos em cada uma das classes, já que eles tem de ter e são métodos obrigatórios, 
eu vou criar uma interface para obrigar as classes a terem os métodos e vou implementar essa interface nas classes, 
começando pelo quadrado, dentro das classes eu vou criar os métodos getTipo e getArea. */
interface Forma {
  public function getTipo();
  public function getArea();
}

// Implementando a interface Forma na minha classe
class Quadrado implements Forma {
  // Criando as variáveis que serão usadas no getArea de quadrado.
  private $largura;
  private $altura;

  /* criando o construtor para mandar os dois dados (largura e altura), assim
as variáveis de largura e altura criadas antes do construtor serão 
executadas para serem utilizadas no getArea() */
  public function __construct($l, $a) {
    $this->largura = $l;
    $this->altura = $a;
  }

  public function getTipo() {
    // Se é pra retornar só o tipo, vou colocar uma string com o tipo
    return "quadrado";
  }

  public function getArea() {
    // Para saber a área de um quadrado, multiplico a largura pela altura.
    return $this->largura * $this->altura;
  }
}

/* para implementar o círculo eu preciso primeiro de tudo criar o raio, 
em seguida passar esse raio no meu construct para toda vez que eu for usar o getArea, 
o raio já poderá ser usado, vou criar a função getTipo e a getArea, na função getArea eu preciso calcular a área de um círculo. */

// Implementando a interface Forma na minha classe
class Circulo implements Forma {
  // Criando o raio que será recebido no construct
  private $raio;

  // Recebendo o raio para ser executado em getArea()
  public function __construct($r) {
    $this->raio = $r;
  }

  public function getTipo() {
    // Se é pra retornar só o tipo, vou colocar uma string com o tipo
    return "circulo";
  }

  public function getArea() {
    /* Para pegar a área de um círculo é Pi * raio² (ao quadrado).
      o php tem uma função nativa de Pi, usaremos ela */
    return pi() * ($this->raio * $this->raio);
  }
}

/* Mas o que isso tem a ver com polimorfismo? para entender melhor vamos dar uma olhada na minha implementação que é meu foreach, 
isso porque polimorfismo diz respeito à implementação, no meu foreach eu quero pegar o tipo e a area do objeto, 
como tanto a classe quadrado quanto a classe círculo tem o getTipo() e o getArea(), 
isso é polimorfismo (poli = vários, morfismo = forma), ou seja, várias classes diferentes tem a mesma forma, 
ou o mesmo método pode pertencer a diferentes classes. */

foreach ($objetos as $objeto) {
  $tipo = $objeto->getTipo();
  $area = $objeto->getArea();
  echo "AREA " . $tipo . ": " . $area . "<br/>";
}
