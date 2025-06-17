<?php
/* Namespaces and classes MUST follow an "autoloading" PSR: [PSR-0, PSR-4]. ⇒ Namespaces e classes devem seguir a PSR-4 para autoloading, a PSR-0 foi desabilitada, Autoload ficou para a próxima aula, então será explicado nela. */

/* Class names MUST be declared in StudlyCaps. ⇒ Nomes de classes devem ser declaradas com a primeira letra em Maiúsculo. */
class Matematica {
  public function somar($x, $y) {
    return $x + $y;
  }
};

// Se a classe tem dois nomes, coloque assim:
class MatematicaBasica {
  public function somar($x, $y) {
    return $x + $y;
  }
}

/* Class constants MUST be declared in all upper case with underscore separators. ⇒ 
Classes constantes precisam ser declaradas em MAIÚSCULO e se tiver mais de uma palavra, separadas por underline (_). */

/* Uma constante é uma variável que não muda de valor, 
imagine que vamos ter uma versão na nossa classe Matematica e vamos usar const para definir a versão, 
para seguir a PSR-1 fazemos assim: */
class Matematica {
  const VERSION = "1.0";
  // Se tiver uma constante com mais de uma palavra, faça assim:
  const DATA_APPROVED = "aqui coloco o valor que preciso";

  public function somar($x, $y) {
    return $x + $y;
  }
}

// Toda constante se torna estática automaticamente, então para usar ela fazemos assim:
echo "VERSAO: " . Matematica::VERSION;

/* - Method names MUST be declared in camelCase. ⇒ Métodos precisam ser declarados em camelCase.
camelCase é parecido com o Studlycaps, a diferença é que quando temos um método que precise ter duas palavras, 
colocamos a primeira letra em minúsculo e a segunda em maiúsculo, por exemplo: */
class Listagem {
  public function listarTudo() {
  }
}

/* quando for criar uma classe que tenha diversas variáveis, 
escolha um padrão (seja sturdlycase, snake_case, camelCase) e siga com ele, 
não comece com um padrão em uma variável e vá criando outros padrões dentro da mesma classe. */
// Faça assim:
class MatematicaBasica {
	$primeiroNumero = 1; // camelCase
	$segundoNumero = 2; // camelCase
	$terceiroNumero = 3; // camelCase

  public function somar($x, $y) {
    return $x + $y;
  }

  public function listarTudo() {
    
  }
}

// Não faça assim:
class MatematicaBasica {
	$primeiroNumero = 1; // camelCase
	$segundo_numero = 2; // snake_case
	$TerceiroNumero = 3; // Studlycase

  public function somar($x, $y) {
    return $x + $y;
  }

  public function listarTudo() {
    
  }
}

// Uma recomendação pessoal do professor é a seguinte: Crie as classes com Sturdlycase e os métodos e variáveis com camelCase, assim padroniza tudo.
class MatematicaBasica { // Sturdlycaps
	$primeiroNumero = 1; // camelCase
	$segundoNumero = 2; // camelCase
	$terceiroNumero = 3; // camelCase

  public function somar($x, $y) {
    return $x + $y;
  }

  public function listarTudo() { // camelCase
    
  }
}