# Funções

Durante o curso já aprendemos algumas funções como `htmlspacialchars()`,`ucwords()`,`var_dump()` então podemos entender funções como palavras chaves para executar algo e podemos passar parâmetros ou não entre os `()`.

O PHP já possui algumas funções definidas, mas também podemos criar as nossas próprias funções.

Sintaxe para criar uma função:

```php

<?php

    function nomedafuncao($parametro, $parametro2){
        
        //seu código aqui
    }
```

Na aula passada vimos que em determinado momento podemos ter a necessidade de exibir algo na tela e encerrar a execução do script logo em seguida, então podemos criar uma função para tornar esse processo mais fácil.

Exemplo:

```php
<?php 

function dd($data){

    echo '<pre>';

    die(var_dump($data));

    echo '</pre>';
}
```
Chamamos a nossa função de "dd" porque exibimos um valor (dump) e logo em seguida "matamos" a execução (die), também usamos um nome genérico para o parâmetro, pois podemos usar essa função para exibir qualquer valor então é mais apropriado usar um nome genérico nessa situação.

Algumas aulas passadas foi apresentado que é uma boa prática separar as responsabilidades do nosso código, então podemos criar um arquivo `functions.php` para as nossas funções. Dessa forma também podemos deixar as funções disponíveis em qualquer lugar do nosso código apenas usando o 'require';


Exemplo:

```php
<?php

require 'functions.php';


$aniamls = [
    'gato',
    'cachorro',
    'elefante'
]

dd($animals);

```