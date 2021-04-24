# PHP e HTML

Nessa aula aprendemos como utilizar PHP com HTML.

Em um arquivo com extensão `.php` podemos colocar HTML e PHP no mesmo lugar, dessa forma podemos exibir dados dinamicamente na nossa página.

Quando utilizamos PHP e HTML juntos temos que lembrar de sempre fechar o bloco PHP com essa sequência `?>`.

Exemplo:

```php

    <h1><?php echo 'Olá mundo';?></h1>

```

Não colocando a tag de fechamento, vamos ter um erro parecido com este:

```
PHP Parse error:  syntax error, unexpected '<', expecting end of file in 
```

>Em um arquivo que só temos PHP, a tag de fechamento não é necessária.

### Exibindo valores passados pela URL

Em PHP podemos recuperar valores passados pela URL, a estrutura é normalmente assim: `localhost:8888/?name=thaiane` 

Primeiros temos o ponto de interrogação seguido da chave, o sinal de igual e o valor associado. Para exibir esse valor usamos a superglobal ` $_GET`.

Exemplo:

```php

    <h1><?php echo "Olá," . $_GET['name'];?></h1>

```
No exemplo acima usamos concatenação, pois `$_GET` não é uma variável.

Também podemos usar a forma reduzida do comando echo:

```php
    <h1><?= "Olá," . $_GET['name'];?></h1>
```


### Um pouco sobre segurança

Quando estamos construindo um site temos que tomar alguns cuidados, os usuários podem ser mal-intencionados e tentar inserir códigos maliciosos no seu script.

Exemplo:

```
localhost:8888/?name=<a href="http://google.com">thaiane</a>
```
No exemplo acima estávamos esperando o nome do usuário, mas recebemos um link. Podemos impedir isso "limpando" os dados fornecidos pelo usuários. A função `htmlspecialcharts()` pode ser usada nessa caso, dessa forma o link não fica disponível.

```php
<h1><?= "Olá," . htmlspecialcharts($_GET['name']);?></h1>
```

# Separando Lógica PHP da apresentação

É uma boa prática separa as responsabilidades, a maioria dos frameworks segue essa prática, temos uma secção onde preparamos os dados, outra onde renderizamos e exibimos.   

Então, vamos criar um arquivo chamado “index.view.php”, nesse arquivo ficará o nosso código HTML.

Exemplo:

>No nosso arquivo index.php, vamos criar uma variável simples.

```php

<?php

 $greeting = 'Olá mundo';

 ```

>E no nosso arquivo index.view.php vamos exibir essa variável.

```php

<h1><?= $greeting?></h1>
```

Agora precisamos juntar esses dois arquivos, para isso vamos acrescentar um "require" no arquivo index.php

```php
<?php

 $greeting = 'Olá mundo';

 require 'index.view.php';
 ```

Pronto, agora temos as nossas responsabilidades separadas seguindo boas práticas.