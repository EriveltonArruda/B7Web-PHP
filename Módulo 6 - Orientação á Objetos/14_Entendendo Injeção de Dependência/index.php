<?php
/* Injeção de dependência é basicamente criar uma classe que vai ser o “motor”, 
que vai ter os métodos dentro dela e que vai aceitar classes de fora que tenham esses mesmos métodos 
e assim poder terceirizar os métodos das classes de fora sem ser necessário alterar a classe “Mãe”, a classe que é o “motor”. */

// Classes de exemplo, elas fazem a mesma coisa (soma)
class Basico1 {
  // Digamos que $x seja 10 e $y seja 20
  public function somar($x, $y) {
    return $x + $y;
  }
}

class Basico2 {
  // Digamos que $x seja 10 e $y seja 20
  public function somar($x, $y) {
    $res = $x;
    // Se $y = 20, então o loop vai rodar 20x
    for ($q = 0; $q < $y; $q++) {
      // e a cada conclusão, será adicionado +1 à $x.
      $res++;
    }
    // No final, o resultado dá o mesmo que a classe de soma Basico1.
    return $res;
  }
}

// Classe mais esperta (classe mãe)
class Matematica {
  // aqui vai ficar armazenado a classe Básica
  private $basico;
  // Assim que instanciar essa classe Matematica, ele vai fazer o seguinte:
  // Criou a instância Basico1 e salvou na variável $basico acima.
  public function __construct() {
    $this->basico = new Basico1();
  }

  public function somar($x, $y) {
    /* quando usei esse método somar no echo de $mat abaixo, o método somar
    de Matematica foi dentro da classe Basico1 e usou o método de somar dessa classe */
    return $this->basico->somar($x, $y);
  }
}

// Usando a classe Matematica
$mat = new Matematica();
echo $mat->somar(10, 15);

/* Mas esses exemplos ainda não são injeção de dependência, 
porque injeção de dependência é quando você insere uma classe dentro de outra, 
normalmente é dentro do construtor, mas não precisa necessariamente ser por ele. */

/* Por exemplo, eu vou instanciar no lado de fora a classe que eu quero usar como processo básico, 
porque dentro da classe Matematica eu estou preso aos métodos de dentro dela e se eu quiser outra classe de conta básica, 
eu vou ter que ir dentro da classe Matematica e alterar dentro dela, assim */

class Matematica {
  // Vou instanciar mais abaixo, esse exemplo só mostra a classe Matematica
  // Métodos que existem dentro de Matematica
  private $basico;
  public function __construct() {
    /* Se eu quisesse usar outro método fora o Basico2, eu teria que alterar
  aqui, ou seja, teria que entrar dentro da classe Matematica e instanciar 
  outro objeto. */
    $this->basico = new Basico2();
  }

  public function somar($x, $y) {
    return $this->basico->somar($x, $y);
  }
}

/* Mas e se eu trazer esse processo para o construtor, 
como eu posso fazer isso? Eu posso ir no construtor para receber a variável $b que seria a minha classe de montagem básica, 
e ai eu passo o basico dentro do construtor para $b. */

class Matematica {
  private $basico;
  // $b vai ser a classe que eu passar por fora
  public function __construct($b) {
    // $basico vai ser a classe que entrar no construtor.
    $this->basico = $b;
  }
}

// Agora eu instancio a Basico1.
$basico = new Basico1();
$mat = new Matematica($basico);
echo $mat->somar(10, 15);

// Quero usar Basico2 agora
$basico = new Basico2();
$mat = new Matematica($basico);
echo $mat->somar(10, 15); // Funciona do mesmo jeito.

/* Isso é injeção de dependência, é inserir um objeto que eu quero de fora pra dentro da minha classe, 
estou basicamente importando, importante frisar que não é necessário instanciar a classe como foi feito acima com o $basico = new Basico1, 
posso colocar essa classe já dentro do meu parâmetro de Matematica, basicamente instanciei a classe dentro do parâmetro, 
essa classe vai cair no $b do construtor e ai eu jogo o $b dentro do basico do construtor, 
dessa forma eu não vou mais precisar alterar minha classe Matematica, 
eu simplesmente passo pra ela quem eu quero que ela use como motor de contas básicas. */

class Matematica {
  private $basico;
  /* essa classe que instanciei dentro de Matematica vai cair no $b do construtor 
  e ai eu jogo o $b dentro do basico, dessa forma, 
  a variável $basico será a classe que foi passada no parâmetro de Matematica */
  public function __construct($b) {
    $this->basico = $b;
  }
}

// instanciei a classe dentro do parâmetro
$mat = new Matematica(new Basico1());
echo $mat->somar(10, 15);

// Exemplo prático de banco de dados //

// Obrigando as classes a terem os métodos, nesse caso é só listar()
interface DatabaseInterface {
  public function listar();
}

class Database {
  // criando a $engine que vai receber a classe passada no parâmetro
  private $engine;

  // $eng vai ser a classe que eu passar por fora
  public function __construct($eng) {
    // $engine vai ser a classe que entrar no construtor
    $this->engine = $eng;
  }

  // vai pegar todos os conteúdos e retornar
  public function listarTudo() {
    /* basicamente a minha engine vai listarTudo, 
    então as classes que vou criar fora da classe Database, 
    terão que ter um método listar() dentro, 
    assim quando eu usar listarTudo, a engine vai terceirizar o método listar()
    que está dentro do banco de dados que eu vou usar. */
    return $this->engine->listar();
  }
}

// Uma vez que a engine está pronta, eu posso criar as classes de banco de dados para poder usar minha engine Database.
class MysqlEngine implements DatabaseInterface {
  // Essa função listar() é a que vai ser terceirizada pelo Database.
  public function listar() {
    echo "listando com MySql";
  }
}


class OracleEngine implements DatabaseInterface {
  public function listar() {
    echo "listando com Oracle";
  }
}


class MongoEngine implements DatabaseInterface {
  public function listar() {
    echo "listando com Mongo";
  }
}

// Instanciando Database com a engine no parâmetro
$db = new Database(new MysqlEngine());
/* Quando eu usar o método listarTudo, ele vai pegar todos os dados que tem dentro do Mysql */
$db->listarTudo();

$db = new Database(new OracleEngine());
$db->listarTudo();

$db = new Database(new MongoEngine());
$db->listarTudo();

/* Assim meu Database funciona independente do tipo de banco de dados que eu tiver, 
isso é injeção de dependência, estou injetando uma dependência externa (classe externa) na minha classe Database 
e ai Database usa essa classe normalmente. */

// Implementando na classe Matematica //
interface MatematicaBasica {
  public function somar($x, $y);
}

class Basico1 implements MatematicaBasica {
  public function somar($x, $y) {
    return $x + $y;
  }
}

class Basico2 implements MatematicaBasica {
  public function somar($x, $y) {
    $res = $x;
    for ($q = 0; $q < $y; $q++) {
      $res++;
    }
    return $res;
  }
}

class Matematica {
  private $basico;
  /* Passando a interface no parâmetro do meu construtor, 
  assim $b teria que ser um usuário da interface MatematicaBasica */
  public function __construct(MatematicaBasica $b) {
    $this->basico = $b;
  }

  public function somar($x, $y) {
    return $this->basico->somar($x, $y);
  }
}

$mat = new Matematica(new Basico1());
echo $mat->somar(10, 15);

/* Porque eu coloquei a interface dentro do meu construtor? 
porque para que eu consiga fazer uma injeção, 
a classe injetora precisa ser obrigatoriamente usuária da minha interface, 
se eu criasse outra classe (Basico3) e passasse como injetora na minha classe Matematica, não iria funcionar. */