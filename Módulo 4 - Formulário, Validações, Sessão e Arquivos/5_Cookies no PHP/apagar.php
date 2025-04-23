<?php
/* Para apagar um cookie, coloco o nome do cookie, o valor do segundo parâmetro posso colcoar vazio e 
no time() eu coloco - 3600 milisegundos porque é o tempo de 1 minuto em milisegundos */
setcookie('nome', '', time() - 3600);
header("Location: index.php");
exit;

/*
Diferenças entre Session e Cookie

A sessão funciona enquanto o navegador estiver aberto, no momento que o navegador é fechado, a sessão é destruída.
O Cookie fica salvo no seu computador e tem uma validade específica, mesmo desligando e ligando o pc, o Cookie continuará lá enquanto estiver no prazo de validade.
*/