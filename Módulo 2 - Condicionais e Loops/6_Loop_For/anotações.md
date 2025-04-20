Um loop for funciona exatamente igual a um loop while, a diferença é que ele é mais seguro.

## Estrutura do for

for(variável, condição, ação) {

}

// nos parâmetros temos 3 etapas
numero = 0; // 1ª etapa: definimos uma variável que receberá o loop

numero < 10; // 2ª etapa: condição que queremos usar.

numero += 1; // ao fim de cada rodada de bloco, ele executará o código da
terceira etapa e reiniciará caso a condição ainda esteja sendo verdadeira,
ou seja, a variável começou em 0 e foi incrementado + 1, o loop então retorna à
condição (< 10) e verifica se o novo número é menor que 10, se for, ele vai
executar o código mais uma vez até que o número seja (>= 10)

## Simplificando o loop for

Existe uma forma de resumir esse loop, atribuímos uma variável sozinha que será utilizada somente dentro do loop, geralmente se usa “i” e para incrementar o valor colocamos “++” que é a mesma coisa de usar “+= 1” ou “$i = $i + 1”.

i++ (Incrementa algo)
i-- (diminui algo)
