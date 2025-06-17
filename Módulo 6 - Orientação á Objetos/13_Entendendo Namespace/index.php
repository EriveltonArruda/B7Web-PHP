<?php
/* Namespace é um recurso que foi adicionado a partir do PHP 5.6, 
ele foi criado como uma forma de você conseguir encapsular classes, 
constantes e funções dentro de um grupo para que você consiga usar classes com o mesmo nome dentro da mesma aplicação, 
é como ter várias caixinhas com várias classes com o mesmo nome e usar essas duas classes com o mesmo nome. */

// Aqui tenho classes com o mesmo nome (MinhaClasse)
require 'classe1.php';
require "classe2.php";

/* Aqui eu estou usando a MinhaClasse, mas eu estou usando quem? de onde é a
classe? de classe1 ou de classe2? */
$a = new MinhaClasse();
echo $a->testar();

/* para resolver esse erro precisamos criar namespace na classe1 e classe2.
Mas como eu posso usar uma classe que está dentro de um namespace? 
Simples, eu só coloco o nome do namespace antes da classe que eu vou usar e assim o erro vai sumir e consigo usar a classe selecionada. */

// Assim eu uso MinhaClasse que está no arquivo da classe1
$a = new classe1\MinhaClasse();
echo $a->testar();

// Assim eu uso MinhaClasse que está no arquivo da classe2
$a = new classe2\MinhaClasse();
echo $a->testar();

/* Esse é um dos usos do namespace, futuramente você precisará fazer divisão de pastas, 
digamos que você tem muitas pastas e dentro dessas pastas você tem várias outras pastas e arquivos 
e vai ocorrer de você ter classes com o mesmo nome e precisará fazer essa separação de diretórios, 
o namespace principalmente no PHP é utilizado bastante para fazer divisão de diretórios. */

// puxando arquivo
require "classes/matematica/basico.php";

// Usando a classe Basico.
$basico = new classes\matematica\Basico();

/* Ainda tem outro uso que podemos fazer com o namespace, 
digamos que quero instanciar minha classe só com o nome da classe, posso fazer? 
Sim, simplesmente temos que dizer para o PHP quem é a classe Basico() */
require "classes/matematica/basico.php";

/* Basicamente é um codenome, quando eu uso esse "use", eu estou dizendo para o PHP, 
Use classes\matematica\Basico como se fosse Basico. Assim para de dar erro. */

use classes\matematica\Basico as Basico;

$basico = new Basico();

/* Ainda tem um truque, quando o nome da classe é igual ao codenome, podemos
usar somente o "use" assim: */

use classes\matematica\Basico;

$basico = new Basico();

// quando instanciar um objeto que está em outra pasta, use o codenome que criado para ela.
use classes\matematica\Basico as MatematicaBasica;

// instanciando igual ao codenome
$basico = new MatematicaBasica();
