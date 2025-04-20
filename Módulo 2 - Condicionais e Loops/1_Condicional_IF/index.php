<?php
$idade = 40;

/* Exemplo da idade
SE idade for maior ou igual a 18, ENTÃO
- mostrar na tela "Maior de idade"
CASO CONTRÀRIO
- Mostrar na tela "Menor de idade"
*/

// Exemplo da idade implementado
if ($idade >= 18) {
  echo "Maior de idade";
} else {
  echo "Menor de idade";
}

// Exemplo utilizando carteira de motorista
if ($idade >= 18) {
  echo 'Maior de idade, apto à tirar carteira';
} else {
  echo 'Menor de idade, inapto à tirar carteira';
}

// Resultado: Maior de idade, apto à tirar carteira.

/*
Lista de condicionais

x < y (maior que)
x > y (menor que)

x == y (igual à)
x !=y (diferente de)

x >= y (maior ou igual)
x <= y (menor ou igual)
*/