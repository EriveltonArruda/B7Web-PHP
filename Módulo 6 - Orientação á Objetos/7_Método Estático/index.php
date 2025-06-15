<?php
// O método estático é um método que é criado dentro da classe e pode ser usado unicamente externamente.
class Matematica {
  // para criar um método estático só temos que colocar o nome static depois do public e antes do function.
  public static function somar($x, $y) {
    return $x + $y;
  }
}

/* Mas para que serve um método estático? Assim que criarmos um método estático, não é necessário mais instanciar um objeto para depois usar o método que está dentro da classe, para usar uma função estática, tudo que temos que fazer é referenciar a classe à qual o método pertence, por exemplo: */

// Sem método estático
// Preciso instanciar primeiro
$m = new Matematica();
// Usando o método somar que está dentro da classe de Matematica
echo $m->somar(20, 30);

// Com método estático não preciso instanciar
/* Esse (::) diz justamente isso: acesse um método ou propriedade que está
dentro da classe referenciada anteriormente (Matematica) */
echo Matematica::somar(20, 30);

// Também podemos fazer com propriedades
class Property {
  public static string $nome = "Erivelton";
}

/* Para acessar essa propriedade fazemos da mesma forma que fizemos no 
método:
Acesse um método ou propriedade que está dentro da classe referenciada 
anteriormente (Matematica) */
echo Property::$nome;