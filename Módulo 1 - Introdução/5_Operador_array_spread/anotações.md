### Oque faz?

Array Spread basicamente copia os itens de um array selecionado.
Por exemplo: temos 2 receitas de bolo e os dois bolos tem os mesmos ingredientes, porém no segundo bolo terá um valor adicional que é o corante, claro que você pode ir no array anterior, copiar os dados, colar no novo array e adicionar o novo item, porém o método spread já faz isso e ainda evita que tenhamos código repetido.

### Como usar o Spread

A única coisa que temos que fazer é ir no array que queremos colar o conteúdo ($bolo2) e dentro dele colocar reticências (…) referenciar o array que queremos copiar e então adicionamos o novo valor, dessa forma $bolo2 terá os valores de $bolo1 + o item que queremos adicionar.

Os itens serão adicionados conforme a ordem passada, no exemplo abaixo, os itens de $bolo1 virão depois de água morna e antes de corante.
$bolo2 = [ "vasilha", "água morna", ...$bolo1, 'corante' ];
