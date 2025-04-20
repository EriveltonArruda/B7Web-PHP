<?php
// opeador spread copia os itens de um array selecionado.
$bolo1 = ['açúcar', 'farinha de trigo', 'ovo', 'leite', 'fermento em pó'];

// utilizando o spread referenciando o array $bolo1 para pegar os valores de $bolo1 e adicionando o corante, assim $bolo2 terá os mesmos itens de $bolo1 e adicionará o corante.
$bolo2 = [...$bolo1, 'corante'];

// Essa função exibe informação sobre uma variável de uma forma legível para humanos.
print_r($bolo2);

// Os itens serão adicionados conforme a ordem passada, no exemplo abaixo, os itens de $bolo1 virão depois de água morna e antes de corante.
$bolo3 = ["vasilha", "água morna", ...$bolo1, 'corante'];

print_r($bolo3);

// Outro exemplo:
$lista1 = ["Erivelton", "Pedro", "João"];
$lista2 = ["Patricia", "Sabrina", "Melissa"];
// $lista3 terá os itens de $lista1 'Fulano' e $lista2.
// Da mesma forma como no exemplo anterior, também posso colocar outros valores entre os spreads.
$lista3 = [...$lista1, "Fulano", ...$lista2];

print_r($lista3);
