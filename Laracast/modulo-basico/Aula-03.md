# Aula 03 - Váriaveis em PHP

### Abrindo um servidor

Até o momento, para a visualização de nossos códigos, utilizamos o terminal executando o comando "php nomedoarquivo".

Agora iremos iniciar um servidor local para podermos ver o resultado do código diretamente do browser. 

Para isso, no terminal, iremos digitar o comando "php -S endereço:porta". Sendo o -S o parametro passado para o PHP em seguida, digitamos localhost no endereço [Você pode ver mais sobre o que é localhost aqui](https://pt.wikipedia.org/wiki/Localhost) e a porta que iremos utilizar. Para evitar qualquer conflito com outro processo que esteja rodando em nosso computador, iremos utilizar a porta 8888 que normalmente não é usada por outro aplicativo.</br>

### :computer: Váriaveis

Váriaveis são utilizadas para guardar instruções ou informações que pretendemos utilizar mais tarde ou mais de uma vez. Por conta disso, que utilizamos váriaveis e não imprimos o que queremos diretamente com um "echo".

Para começar, como você pode ver invés de passar o "Hello World" diretamente por um echo iremos colocar numa váriavel que recebe um nome que podemos escolher. Por legibilidade do código, precisamos colocar váriaveis que indiquem o que será o conteúdo que ela irá receber. Por padrão, iremos também colocar elas em inglês.

Para começar, em PHP as váriaveis começam com $, então, iremos colocar $greeting (Informando que é uma váriavel com um conteúdo de 'saudação') e ela irá receber com o sinal = (Na programação, este sinal sempre é de RECEBE algo e não de IGUAL como vemos na matemática, temos outro sinal para isso) a nossa string determinada com aspas e o conteúdo dentro 'Hello World'.

Agora alteraremos o echo para ele imprimir nossa váriavel $greeting, ficando echo $greeting;

Dando um F5 em nosso navegador, veremos que o resultado é o mesmo porém agora utilizamos uma váriavel.

---

Precisamos entender o porquê utilizar váriavel invés de imprimir o conteúdo diretamente com um echo.

Para isso iremos alterar o nosso exemplo para $name, vamos deixar o código desta forma:

```php
<?php

$name = 'Lucas Bomfim'; /* da mesma forma do Hello World 
colocaremos nosso conteúdo dentro de aspas simples.*/

echo = "Hello, $name"; /* aqui alteraremos para aspas duplas
 pois queremos que ele interprete a nossa váriavel $name. 
 Caso fosse aspas simples, ele apenas iria imprimir de forma literal o $name.*/
```

Também poderiamos utilizar a concatenação, também muito utilizada. Diferente de outras linguagens, que costumam utilizar o sinal de + para concatenar, em PHP utilizamos o '.' Como no exemplo abaixo:

```php
<?php 

$name = 'Lucas Bomfim';

echo = 'Hello, ' . $name;
```

O resultado que teríamos no navegador seria o mesmo.

A necessidade de utilizar váriaveis pode ser entendida se pensarmos em um sistema mais complexo, onde temos um formulário com um espaço 'Digite o seu nome' e um botão de enviar. Quando o usuário clicasse no botão, apareceria na tela uma saudação com o nome do usuário. Neste caso, não podemos ter um echo imprimindo um nome diretamente, ele irá se alterar a cada usuário.

Deixarei embaixo, três formas diferentes de imprimir as váriaveis.

```php
<?php

$greeting = 'Hello';

$name = 'Lucas Bomfim';

echo $greeting . ', ' . $name; /*imprimiria o Hello concatenado com uma aspa e 
espaço e concatenado com o Nome.*/
```

Poderíamos utilizar também sem a concatenação, como já visto anteriormente:

```php
<?php

$greeting = 'Hello';

$name = 'Lucas Bomfim';

echo "$greeting, $name"; /* aqui utilizamos as aspas duplas "" para informar que iremos
interpretar uma váriavel e não apenas imprimir o conteúdo diretamente na tela
e separado por uma vírgula.*/
```

Poderíamos também utilizar uma forma mais clean de código utilizando as {} nas váriaveis como no exemplo abaixo:

```php
<?php

$greeting = 'Hello';

$name = 'Lucas Bomfim';

echo "{$greeting}, {$name}"; /* aqui utilizamos {} para 
deixar de forma mais legível as váriaveis que serão declaradas*/
```

Nas três formas, teríamos o mesmo conteúdo apresentado, apenas alterando a legibilidade do código para outros devs lerem.

Ir para: [Aula 04 - PHP e HTML](Aula-04.md)