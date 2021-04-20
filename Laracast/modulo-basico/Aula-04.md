# Aula 04 - PHP e HTML

Começando a integração do HTML com o PHP, temos boas práticas a serem seguidas.

Começando que quando criamos a estrutura de uma aplicação web, com o HTML não devemos misturar o PHP diretamente neste código.

Como aprendemos a abrir a tag PHP com <?php utilizamos ?> para fechar o bloco PHP e como boa prática, caso seja um arquivo com apenas scripts PHP, não fechamos a tag.

Misturar PHP com HTML sofre problemas normalmente por essa abertura e fechamento de tags. Invés de fazer essa abertura e fechamento a cada linha de código que queremos interpretar no HTML, podemos utilizar outros recursos para fazer essa integração.

### URL's e brincando com dados

É comum vermos em url's parâmetros em PHP e muitas vezes não sabemos o que eles significam.

Aqui para nosso exemplo, iremos utilizar o ?name= na URL do site.

Temos na nossa URL o endereço: localhost:8888

Iremos implementar em nosso código o $_GET, ele irá pegar parâmetros passados pela a nossa URL e passar para a variável que quisermos.

Aqui, iremos utilizar este código:

```php
<?php

$name = $_GET['name'];/*aqui passamos dentro dos colchetes [] o parâmetro que o GET
irá pegar, no nosso caso 'name' */

echo "Hello, $name";

?>
```
Na nossa URL iremos deixar da seguinte maneira: localhost:8888?name=

Estamos passando na URL, o parâmetro que o _GET está esperando que é o name. Aqui, ele irá imprimir o nome na tela conforme o parâmetro passado depois do símbolo =

### Outras formas de declarar

No código que passamos anteriormente, é importante dizer que também teríamos outra forma de chegar na resolução deste problema, como por exemplo:

```php
<?= "Hello, " . $_GET['name'];?> /* aqui neste exemplo, temos o mesmo resultado
porém em uma única linha de código <?= é o equivalente a <?php echo */
```

### Problemas com a segurança

Este metódo de declarar pela a URL nos deixa a vulnerável a diversos problemas de segurança. Como você mesmo pode testar, qualquer parâmetro que você passar para a URL nosso código irá aceitar, como por exemplo, direcionar a váriavel $name com href para algum outro link de acesso que o atacante queira.

Isto nos deixa vulnerável a diversos tipos de ataque, como SQL Injection.

Quando tomamos a decisão de receber dados do usuário, temos que arcar com a consequeência e cogitar a possibilidade o que o usuário irá pôr nos inputs de dados e como isso irá complicar a nossa vida.

Para resolver um pouco desta situação, iremos utilizar a função htmlspecialchars()

```php
<?= "Hello, " . htmlspecialchars($_GET['name']);?>
```

Sendo assim, agora, a função $_GET irá imprimir os caracteres especiais junto, assim já resolvendo algumas possíveis manipulações via URL que poderíamos enfrentar.

Ir para: [Aula 05 - Separando a lógica PHP do HTML](Aula-05.md)