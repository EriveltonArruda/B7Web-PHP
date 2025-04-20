O Foreach é usado para trabalhar exclusivamente com arrays. Ele faz uma varredura no array.

## Estrutura do Foreach

Na condição do foreach eu seleciono o array e coloco ele como “as” e defino uma variável, nesse caso o array será $ingredientes e essa variável nova $ingrediente vai fazer um loop dentro do array $ingredientes e a cada rodada do loop, $ingrediente vai assumir um valor de cada item, na primeira rodada será açúcar, na segunda será farinha de trigo e assim até o final do array. Como estamos usando o exemplo do bolo, para visualizar os itens que estão dentro do array farei o seguinte: dentro do foreach eu estou colocando para exibir na tela a variável que foi criada e que agora contém os valores dos itens do array.

## Posição do item no foreach

Temos como ver também a posição do item à cada loop que o foreach faz, só temos que criar uma variável $chave (essa chave é o número que está no array, é aquele mesmo número que aparece quando usamos a função print_r( )) e assimilar ela à nova variável $valor (essa assimilação vai fazer com que eu pegue a chave e o valor do array, onde a $chave é o número da posição do array e o $valor é o conteúdo do array) e no bloco dentro do foreach eu concateno a chave com o resultado da variável.
