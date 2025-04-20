<?php
$idade = 18;
// (Condição) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;

// if de exemplo para ser reconstruído no ternário.
if ($idade >= 18) {
  echo "Maior de idade";
} else {
  echo "Menor de idade";
}

// Refazendo o if acima com operador ternário
echo ($idade >= 18) ? "Maior de idade" : "Menor de idade";

// Armazenando o ternário dentro de uma variável
$resultado = ($idade >= 18) ? 'Maior de idade' : 'Menor de idade';

echo $resultado;

// Utilizando o ternário com Boolean
$menorDeIdade = ($idade > 18) ? true : false;

// Exibindo valores boolean na tela
if ($menorDeIdade > 18) {
  echo "MAIOR";
} else {
  echo "MENOR";
}
