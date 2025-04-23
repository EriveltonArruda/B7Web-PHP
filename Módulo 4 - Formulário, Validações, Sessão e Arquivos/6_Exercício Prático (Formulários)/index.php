<?php
/* 
O exercício é criar um arquivo index, esse arquivo vai verificar se existe uma sessão chamada name preenchida, se não existir ele vai pra essa tela de login abaixo.
Qual seu nome?
Sair (Botão)

Ao digitar o nome e clicar em salvar, ele vai redirecionar pra alguma página, vai salvar os dados de sessão desse name e depois ele vai para o index.
*/

session_start();

// Se a sessão vier vazia, ela vai ser redirecionada para o login e lá no login aparecerá o erro que falta o nome
if (empty($_SESSION['nome'])) {
    header('location:login.php');
}
?>

<html>

<head>
    <title>Página secreta!</title>
</head>

<body>
    <!-- Para que a sessão pegue o nome de usuário, é preciso mandar um echo e a sessão, assim se toda a validação deu certo, ela vai aparecer com o nome do usuário porque já foi coletado esse dado no formulário. -->
    <h1>Olá, <?php echo $_SESSION['nome']; ?> - <a href="sair.php">Sair</a></h1>
</body>

</html>