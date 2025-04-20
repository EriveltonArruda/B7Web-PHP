### Explicação da solução usando ternário:

concatenamos a variável $nomeCompleto com uma condição, essa condição é a
seguinte:

Se ($sobrenome) existir ? $sobrenome será adicionada à variável 
$nomeCompleto : caso contrário será concatenada com nada ' ';

// Exemplo:
$sobrenome ? $sobrenome : ' ';
E antes da condição usamos uma função para saber se a variável é definida, essa função se chama isset() (se existe)

// Código completo
isset($sobrenome) ? $sobrenome : ' ';

### NULL CAO

NULL CAO é uma simplificação do condicional ternário.

No operador NULL CAO colocamos somente a condição negativa depois de ??, as duas interrogações definem um NULL CAO.

### Explicação do exemplo do NULL CAO utilizado

Se a variável sobrenome existir, pegue a própria variável, caso contrário mostre vazio, assim eliminará o erro.
Exemplo:
$nomeCompleto .= $sobrenome ?? '';

A mesma coisa seria se nome e sobrenome não existissem
Se sobrenome existir, ele vai pegar a própria variável, caso contrário mostre vazio, Se nome existir, pegue a variável, caso contrário, mostre na tela "visitante"

Exemplo:
$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobrenome ?? '';
