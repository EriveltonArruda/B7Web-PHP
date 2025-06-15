<?php
// O exercício é basicamente criar uma classe chamada calculadora e fazer todos os métodos listados abaixo.
require 'calculadora.php';

$calc = new Calculadora();
$calc->add(12); // Somar 12 ao total
$calc->add(2); // Somar 2 ao total
$calc->sub(1); // Subtrair 1 do total
$calc->multiply(3); // Multiplicar 3 do total
$calc->divide(2); // Dividir 2 do total
$calc->add(0.5); // Adicionar 0.5 do total

echo "TOTAL: " . $calc->total(); // O Total deve ser 20;
$calc->clear();