<?php
session_start();

// Destruindo a variável
unset($_SESSION['nome']);

// depois da variável ser destruída, o usuário será redirecionado para o login.
header('location:login.php');
