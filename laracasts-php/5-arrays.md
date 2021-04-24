# Entendendo arrays

Nessa aula é apresentado o construtor array, com ele podemos criar uma coleção de dados, representamos um array dessa forma `$animals = [];` . Podemos ter um array de nomes, animais ou qualquer outra coisa. 

Exemplo:

```php
<?php

$animals = [
    'gato',
    'cachorro',
    'ovelha'
];

```
Cada item no array é separado por vírgula,
para fazer algo com cada um desses itens podemos utilizar o construtor foreach.

Exemplo:

```php
<?php

    foreach($animals as $animal){

        // seu código

    }
```

Agora podemos criar uma lista na nossa view que exibe o nome de cada animal que temos no array.

```php

<ul>
    <?php 
        foreach($animals as $animal){

            echo "<li>$animal</li>";
        }
    ?>
</ul>
```

Também podemos usar uma sintaxe alternativa, mas só deve ser utilizada quando estamos colocando PHP no HTML.

```php 

<ul>

    <?php foreach($animals as $animal):?>

        //código html
        <li><?= $animal?></li>

    <?php endforeach; ?>

</ul>
```

## Arrays associativos


Em arrays associativos criamos uma chave indicando o seu valor com o sinal `=>`.

Exemplo:

```php

$person = [
    'idade' => 19,
    'cabelo' => 'Castanho',
    'profissão' => 'desenvolvedor web'
];
```

Para exibir os valores desse array podemos fazer exatamente como o array anterior, mas também podemos exibir as chaves e os seus respectivos valores.

Exemplo:

```php

<ul>

    <?php foreach($person as $key => $val):?>

        <li><strong><?= $key;?></strong> <?= $val;?></li>

    <?php endforeach; ?>
</ul>

```

## Manipulando arrays

Podemos adicionar novas chaves ao array:

```php
<?php

    //array associativo

    $person['nome'] = 'Thaiane';

    //array não associativo

    $animals[] = 'elefante';
```

Também podemos retirar um item do array:

```php

<?php

    unset($person['idade']);

```
### Exibindo um array 

Enquanto programamos pode surgir a necessidade de ver exatamente tudo que está em um array, mas se tentarmos algo como:

```php
<?php

    echo $person;
```

Teremos um erro, pois `echo` sempre espera uma string, que difere de um array. Então para exibir arrays usamos a função `var_dump($seuArray)` . Podemos deixar a exibição um pouco melhor utilizando a tag `<pre></pre>`.


Às vezes podemos exibir algo e parar a execução do script logo em seguida, para isso usamos a função `die()` que ignora tudo que está abaixo dela.

Exemplo:

```php
<?php

    die(var_dump($person));

    //Este echo não será executado
    echo 'Olá mundo';
```