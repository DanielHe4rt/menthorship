# Booleanos

Nessa aula é apresentado os valores booleanos, utilizado para dizer falso: `false` ou verdadeiro: `true`.

Exemplo:

```php

 <?php

 $task = [
     'title' => 'terminar o dever de casa',
     'due' => 'hoje',
     'assigned_to' => 'Thaiane',
     'completed' => false
 ]

```

Quando colocamos o valor booleano `false` para a chave "completed", queremos dizer que essa tarefa ainda não foi realizada e quando ela for concluída podemos dizer que o valor de "completed" é igual a `true`. 

Mas se tentarmos exibir o valor de "completed" não aparecerá nada na nossa tela, para resolver isso podemos verificar o valor e fazer algo a partir disso.

Exemplo:

```php

    //Listando os itens do array
    <ul>

        <li><strong>Status: </strong> <?= $task['completed'] ? 'Completa' : 'Incompleta'; ?>
    </ul>
```

No exemplo acima verificamos se `$task['completed']` é igual a `true` e exibimos que a tarefa está completa, se for igual a `false` exibimos que está incompleta.

### Manipulando os valores o array

Quando exibimos um determinado valor pode ser que a formatação não está adequada, então podemos usar algumas funções para ajustar, como a função `ucwords()` que coloca a primeira letra da palavra em caixa-alta.

Exemplo:

```php

<?php

    echo ucwords($task['title']);

    //resultado: Terminar O Dever De Casa

```