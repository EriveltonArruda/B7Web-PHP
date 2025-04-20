<?php

use core\Router;

$router = new Router();

// Rota do Index, aqui será o meu Read
$router->get('/', 'HomeController@index');
// Rota que vai levar para a página de adicionar Usuário
$router->get('/novo', 'UsuariosController@add');
// Como é o método POST, posso deixar o nome da rota igual a rota get.
// vou mandar para o mesmo Controller, só vou mudar o método
$router->post('/novo', 'UsuariosController@addAction');

// usamos a máscara {id} para editar um usuário específico.
// Mando para o método edit.
$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
// essa rota será utilizada no action do formulário de edição.
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');
$router->get('/usuario/{id}/excluir', 'UsuariosController@del');
