<?php
/* Uma interface basicamente é um guia de implementação de uma classe, um contrato por assim dizer.

Como sabemos, uma classe é algo abstrato, um modelo a ser usado para instanciar (criar) um objeto, 
uma interface é um nível acima da classe, é ainda mais abstrato.

Vamos entender melhor como a interface se faz necessária usando um exemplo prático, a interface só tem um uso específico, 
ela só precisa ser usada na situação do exemplo que vamos usar, se ela for usada para outra coisa além desse exemplo, ela se torna um uso desnecessário.

Então vamos para o exemplo prático, vamos supor que estamos fazendo um sistema de gerenciamento de banco de dados para uma loja virtual, 
vamos criar uma interface, um modelo mental para que os bancos de dados efetivamente funcionem.

Digamos que estamos usando o banco de dados MySQL, com o MySQL podemos manipular os dados, 
então vamos criar uma classe que vai fazer essa manipulação, 
mas antes é necessário saber que um banco de dados geralmente tem os seguintes métodos de manipulação de dados */
class MysqlDB {
  // Leitura
  public function listarProdutos() {
  }

  // Escrita
  public function adicionarProduto() {
  }

  // Alteração
  public function alterarProduto() {
  }

  // Remoção
  public function removerProduto() {
  }
}

$db = new MysqlDB();
$db->adicionarProduto();

/* Vamos supor que troquei de Mysql para Oracle ou estou trocando de banco de dados a todo momento, 
então para cada banco de dados eu vou ter que repetir os métodos, isso porque com as classes tendo os mesmos métodos, 
tudo que tenho que fazer na hora de instanciar um objeto é colocar o nome da classe, certo? */
class OracleDB {
  public function listarProdutos() {
  }

  public function adicionarProduto() {
  }

  public function alterarProduto() {
  }

  public function removerProduto() {
  }
}

// Novo objeto a partir do banco de dados Oracle.
$db = new OracleDB();
$db->adicionarProduto();

/* Perceba que as duas classes estão usando a mesma estrutura, 
somente a implementação entre elas será diferente porque o código utilizado dentro do Mysql é diferente do Oracle, 
mas a função é a mesma, então nesse caso específico é interessante criar a interface. */

interface Database {
  /* quando usamos interface não definimos nada nos métodos, apenas mostramos
  o que cada classe terá, por exemplo: todas as classes de database que forem
  criadas, terão que ter esses três métodos abaixo. */
  public function listarProdutos();
  public function adicionarProduto();
  public function alterarProduto();
  public function removerProduto();
}

// Implementando a interface nas classes de banco de dados que tenho
class MysqlDBData implements Database {
  public function listarProdutos() {
  }

  public function adicionarProduto() {
    echo "Adicionando com MySQL";
  }

  public function alterarProduto() {
  }

  public function removerProduto() {
  }
}

$db = new MysqlDBData();
$db->adicionarProduto();

// Implementando a interface nas classes de banco de dados que tenho
class OracleDBData implements Database {
  public function listarProdutos() {
  }

  public function adicionarProduto() {
    echo "Adicionando com Oracle";
  }

  public function alterarProduto() {
  }

  public function removerProduto() {
  }
}

$db = new OracleDBData();
$db->adicionarProduto();

/* A necessidade dessa interface serve apenas como organização, tipo um contrato, um guia a ser seguido na criação das classes, para entender melhor, vamos supor que vou usar um terceiro banco de dados e contratei uma empresa para criar essa classe com o novo banco de dados, mas por algum motivo o programador responsável pela criação só usou dois métodos e esqueceu de usar o método adicionar produto, ocorrerá um erro porque a interface obriga que tenha o método adiccionar produto. */
class MongoDB implements Database {
  public function listarProdutos() {
  }

  public function alterarProduto() {
  }
}

$db = new MongoDB();
$db->adicionarProduto();
