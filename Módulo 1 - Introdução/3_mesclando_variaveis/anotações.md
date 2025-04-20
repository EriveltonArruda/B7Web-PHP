// Concatenação de variáveis.
Concatenamos uma variável com outra no PHP utilizando o ponto (.) entre os valores;

Dessa forma os nomes ficam juntos, então adicione um espaço no final da string nome ou um espaço no início da string do sobrenome, nunca nos espaço entre as variáveis concatenadas.

Também podemos fazer uma concatenação tripla.

Aspas duplas servem para concatenar variáveis também, essa é a diferença entre usar aspas simples e duplas, aspas duplas funcionam igual à template strings do Javascript;

A principal diferença entre aspas duplas e simples é que quando colocamos variáveis dentro de aspas simples, é exibido na tela a variável porque o PHP entende que o que está dentro da string é um valor literal e não o valor da variável.

Com aspas duplas podemos concatenar texto e variáveis, as variáveis podem ter strings e números sem problemas.

O PHP consegue entender que se um número estiver dentro de string, ele interpreta como um número.

Ponto (.) concatena
Sinal de + faz soma entre números.

Cuidado ao colocar duas variáveis iguais com nomes diferentes porque o PHP vai substituir o valor anterior na próxima linha.

Se quiser somar os valores das duas variáveis sem substituir, coloque (.=) na segunda vez que chamar $nomeCompleto de novo.
Pode ser .=, +=, \*=, /=;
