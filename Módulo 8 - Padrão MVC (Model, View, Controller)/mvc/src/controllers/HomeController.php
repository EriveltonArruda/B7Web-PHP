<?php

namespace src\controllers;

use \core\Controller;
// Chamando o Model Usuario
use \src\models\Usuario;

class HomeController extends Controller {
  public function index() {
    // puxando a lista de usuários
    // Como vou pegar todos os dados, não preciso colocar nenhum comando dentro do select (lembrando que só é feito dessa forma por causa do Query Builder hydrahon)
    $usuarios = Usuario::select()->execute();
    // Uma vez que fiz a consulta acima, pego os dados e exibo no meu View
    $this->render('home', [
      // Uma vez que eu coloco a variável $usuarios no render, eu tenho acesso aos dados lá no meu View home.
      'usuarios' => $usuarios
    ]);
  }
}
