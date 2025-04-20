<?php

namespace src\controllers;

use \core\Controller;
// Liberando o model de Usuario para ser usado
use \src\models\Usuario;

class UsuariosController extends Controller {

  public function index() {
    $this->render('home');
  }

  public function add() {
    $this->render('add');
  }

  public function addAction() {
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $address = filter_input(INPUT_POST, 'endereco');
    $numeroCasa = filter_input(INPUT_POST, 'numerocasa');
    $phone = filter_input(INPUT_POST, 'telefone');

    if ($name && $email) {
      // Procurando qual usuário tem o email
      $data = Usuario::select()->where('email', $email)->execute();

      // Se não achou nenhum usuário no banco
      if (count($data) === 0) {
        // insere o usuário, a inserção dos dados do usuário é feita dentro de um array no método insert por conta do hydrahon
        Usuario::insert([
          // vinculo o nome do campo do formulário com a variável que pega os dados do formulário
          'nome' => $name,
          'email' => $email,
          'endereco' => $address,
          'numeroCasa' => $numeroCasa,
          'telefone' => $phone
        ])->execute();
        // Assim que inserir os dados no banco, eu redireciono para home
        $this->redirect('/');
        exit;
      }
    }
    $this->redirect('/novo');
  }

  public function edit($args) {
    // Aqui na consulta vai ser feito o seguinte:
    // Selecione em algum usuário em que o id seja o que ele está recebendo no parâmetro 
    $usuario = Usuario::select()->find($args['id']);

    // Agora que tenho a consulta no banco de dados dentro da variável $usuario, posso passar essa variável no meu render e assim terei acesso à ela lá no meu view de edit
    $this->render('edit', [
      'usuario' => $usuario
    ]);
  }

  // Esse método vai receber os dados do usuário além do id.
  public function editAction($args) {
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $address = filter_input(INPUT_POST, 'endereco');
    $numeroCasa = filter_input(INPUT_POST, 'numeroCasa');
    $phone = filter_input(INPUT_POST, 'telefone');

    if ($name && $email) {
      // O update está sendo feito dessa forma porque é assim que é feito o update dentro do Hydrahon.
      Usuario::update()
        // o campo 'nome' do banco de dados vai ser atualizado pelo nome recebido pelo formulário.
        ->set('nome', $name)
        // o campo 'email' do banco de dados vai ser atualizado pelo nome recebido pelo formulário.
        ->set('email', $email)
        ->set('endereco', $address)
        ->set('telefone', $phone)
        ->set('numeroCasa', $numeroCasa)
        // os campos de nome e email serão atualizados pelo id, onde o id será o id recebido pelo parâmetro $args.
        ->where('id', $args['id'])
        ->execute();

      // Terminou de fazer o update, retornará para o home
      $this->redirect('/');
    }
    // Se nome e email não estiverem verificados, será redirecionado para o usuário que está sendo editado, lembre-se que $args['id'] é a máscara {id} da rota.
    $this->redirect('/usuario/' . $args['id'] . '/editar');
  }

  public function del($args) {
    // Delete o id recebido pelo parâmetro.
    Usuario::delete()->where('id', $args['id'])->execute();
    $this->redirect('/');
  }
}
