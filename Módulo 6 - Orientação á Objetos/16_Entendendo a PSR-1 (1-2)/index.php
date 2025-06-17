<?php
// A PSR-1 é a mais importante porque tem toda a padronização básica de código, abaixo tem um resumo de algumas padronizações importantes.

// - Files MUST use only <?php and <?= tags ⇒ **Os arquivos precisam usar apenas as tags <?php e <?=.** 
// variável para exibir com echo 
$nome = "Erivelton";

/* Fazer isso
<?php echo $nome; ?>;

É a mesma coisa de fazer isso, o resultado é o mesmo.
<?= $nome?;>
*/

// Files MUST use only UTF-8 without BOM for PHP code. ⇒ Arquivos de PHP só podem usar UTF-8 sem BOM. 
/* O arquivo PHP tem um processo de codificação, 
no próprio VSCode mostra a codificação que está sendo usada na parte inferior dele, 
se clicarmos nele temos a opção de selecionar o encoding (codificação). 

É a codificação dos bytes do arquivo, a PSR recomenda que use a UTF-8 sem BOM, 
esse BOM é um byte que é colocado no começo do arquivo, esse byte gera uma dor de cabeça, 
por exemplo: Se você estiver usando um header location, esse byte do UTF-8 com BOM conta como uma impressão na tela, 
isso faz com que o redirecionamento não seja concluído porque o PHP fala que já foi impresso algo na tela.
*/

/* Files SHOULD either declare symbols (classes, functions, constants, etc.) or cause side-effects (e.g. generate output, change .ini settings, etc.) but SHOULD NOT do both. ⇒ Os arquivos DEVEM declarar símbolos (classes, funções, constantes, etc.) ou causar efeitos colaterais (por exemplo, gerar saída, alterar configurações .ini, etc.), mas NÃO DEVEM fazer as duas coisas.

Nesse caso aqui é bem interessante porque a PSR recomenda que arquivos de classes, funções, constantes e etc, sejam colocadas em um arquivo separado e o código de execução em outro arquivo separado, nunca juntos. Por exemplo:

Digamos que eu tenho uma classe chamada Matematica, eu preciso colocar essa classe dentro de um arquivo separado da execução, então eu vou criar um arquivo chamado matematica.php e vou colocar minha classe lá. */
require "matematica.php";

echo "RESULTADO: ";
$m = new Matematica();
echo $m->somar(10, 20);

/* Segundo a PSR, essa é a forma correta de se usar classes, funções e etc, 
um arquivo ficou responsável pela criação das classes e funções e outro arquivo ficou responsável pelos “side-effects”, ou seja, a sua implementação.

Não é uma boa recomendação usar dessa forma abaixo, 
porque em um único arquivo eu estou declarando símbolos e usando esses símbolos, dessa forma funciona normalmente, 
contudo, não é um padrão aceitável. */
class Matematica {
  public function somar($x, $y) {
    return $x + $y;
  }
}

echo "RESULTADO: ";
$m = new Matematica();
echo $m->somar(10, 20);
