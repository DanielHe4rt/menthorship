# Condicionais 

Com condições podemos decidir o que fazer dependendo de uma condição, como foi feito na aula passada:

```php

    //Listando os itens do array
    <ul>

        <li><strong>Status: </strong> <?= $task['completed'] ? 'Completa' : 'Incompleta'; ?>
    </ul>
```

No exemplo da aula passada usamos o operador ternário, mas podemos usar a versão longa desse comando, que é o operador `if/else`.

Exemplo:

```php

<?php

    if($condition){
        //faz alguma coisa.
    }else{
        //faz outra coisa.
    }

```
Se a condição é verdadeira faz algo, se for falsa faz outra coisa. Também podemos verificar se o valor difere de verdadeiro, para isso usamos o sinal `!` antes da condição:

```php

<?php

    //Se DIFERENTE de verdadeiro
    if(!$condition){
        //faz alguma coisa.
    }else{
        //faz outra coisa.
    }
```

Exemplo da aula passa na sua versão longa:

```php

    <ul>
        <li><strong>Status: </strong>
        <?php 
            if($task['completed']){

                echo 'Completa';
            }else{

                echo 'Incompleta';
            }
        ?>
    </ul>
```

Também podemos utilizar a sintaxe alternativa para condições, assim podemos usar tags html de uma forma mais legível.

Exemplo:

```php

    <ul>
        <li><strong>Status: </strong>

        <?php if($task['completed']): ?>

        <li><strong>Completa</strong></li>

        <?php else: ?>

        <li><strong>Incompleta</strong></li>
        <?php endif;?>
    </ul>
```

