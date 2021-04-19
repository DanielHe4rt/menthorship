# Variáveis


### Subindo um servidor 

Primeiro passo dessa aula é inicializar um servidor web. Para saber qual comando utilizar basta rodar o seguinto comando em seu terminal, `php -h`, que será exibido as opções de linha de comando para utilizar com php.

Para subir um servidor deve-se utilizar -S seguido do endereço e uma porta.

Exemplo:

```
php -S localhost:8888
```

Agora, se criarmos um arquivo index.php, colocando o seguinte código.

```php
<?php
    echo 'Olá mundo';
?>
```
Podemos ver o resultado no navegador, acessando `http://localhost:8888`


### Variáveis 

Para criar variáveis utilizamos o sinal $ seguido do nome da variável.

Exemplo:
```php
<?php
    $animal = 'gato';
    echo $animal;

    //resultado: gato
?>
```

Com PHP podemos exibir um texto junto com o valor de uma variável, tomando cuidado para sempre utilizar aspas duplas.

Exemplos:

```php
<?php
    $name = 'Thaiane';

    //Correto
    echo "Seu nome é $name";

    //Errado

    echo 'Seu nome é $name';
?>
```

No primeiro echo vamos ter esse resultado: `Seu nome é Thaiane`, já no segundo vai ser exibido `Seu nome é $name`, ou seja não veremos o que está dentro da variável e sim o seu nome.

Outra forma de fazer isso é usar contatenação, em PHP a concatenação é feita com um ponto final. Podendo concatenar variáveis com variáveis e variáveis com textos.

Exemplos:

```php
<?php 
    // Aspas simples e concatenação

    $name = 'Thaiane';
    echo 'Seu nome é ' . $name;

    //resultado: Seu nome é Thaiane
?>
```
```php
<?php

    //Concatenando variáveis

    $text = 'Seu nome é';
    $name = 'Thaiane';

    echo $text . ' ' . $name;

    //resultado: Seu nome é Thaiane
?>
```

Outra forma de exibir uma vairiável é colocando `{}` envolta, assim tornando o código mais legível.

Exemplo:

```php
<?php 

    $name = 'Thaiane';

    echo "Seu nome é {$name}";

    //resultado: Seu nome é Thaiane

?>