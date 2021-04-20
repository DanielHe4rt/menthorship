# Aula 03 - Váriaveis

## Servidor local

Para abrir um servidor local digite a seguinte linha de comando em seu terminal

```php
php -S localhost:8888
```

no navegador `http://localhost:8888`

>lembresse de nomear o arquivo como `index.php` se não geralmente da erro


# Hello World

é a primeira coisa que você tem que fazer ao estar aprendendo uma linguaguem nova e no php não é diferente.


```php
<?php

echo "Hello World!"
```

>é serio se tem que fazer isso se não quiser ser amaldioçoado.


# Váriaveis

váriaveis são usadas para guarda informações.

```php
<?php

$greeting = 'Hello' ;

$name = 'zuko' ;
```
>toda váriavel é declarada pelo `$` seguido do nome da váriavel `=`  'seu valor' 

```php
<?php

$greeting = 'Hello' ;

$name = 'zuko' ;

echo "$greeting, $name" ;

//resultado: Hello, zuko
```
>lembresse sempre de usar aspas duplas (") quando for dar o `echo` se não ocorre um erro de sintaxe.

outro exemplo que se pode fazer com váriaveis é com concatenação `.`

```php
<?php

$greeting = 'Hello' ;

$name = 'zuko' ;

echo $greeting . ', ' . $name ;

//resultado: Hello, zuko
```
outra forma de se exibir uma váriavel de forma mais legível é usando `{}`

```php
<?php

$greeting = 'Hello' ;

$name = 'zuko' ;

echo "{$greeting}, {$name}" ;

//resultado: Hello, zuko
```











 
