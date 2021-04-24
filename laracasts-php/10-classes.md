# Classes

O conceito de classe é a representação de qualquer elemento no seu projeto como pessoa, produtos, etc.

## Sintaxe

Para definir uma classe usamos a palavra reservada `class` seguida do nome e o sinal `{}`. Continuando no nosso exemplo de tasks podemos criar uma classe.

```php
<?php

class Task {}
```

* Propriedades

    Em uma classe podemos ter propriedades, fazendo uma analogia novamente com o nosso array de tasks, cada item do array poderia ser uma propriedade. Podemos dizer que propriedades são variáveis que pertencem a uma classe.

    Para propriedades definimos visibilidade, com as palavras-chave: protected que significa que essa propriedade não pode ser acessada fora da classe e public que significa que pode ser acessado de qualquer lugar.

* Métodos

    Classes possuem métodos, com sintaxe exatamente como as funções, então quando criamos uma função dentro de uma classe chamamos essa função de método. 

    Métodos também possuem visibilidade, exatamente como as propriedades.



## Adicionando propriedades e métodos

Agora vamos criar algumas propriedades para a nossa classe.

```php

<?php

class Task{

    protected $description;

    protected $completed =  false;
}
```
>Podemos criar propriedades já com valores definidos, é o que fazemos aqui, pois sempre que criamos uma task ela não está completa.

Para manipular a nossa classe, criamos uma instância com o operador `new`, uma instância é um objeto da nossa classe.

```php

<?php

$task = new Task();
```

Agora para definir os valores das nossas propriedades, podemos usar o método especial `__construct()`, que executa determinada ação sempre que a classe for instanciada.

Como exemplo vamos criar o método `__construct()` na nossa classe Task, que vai definir o valor de `$description`, e para acessar elementos da própria classe usamos ` $this->nomedoelemento`.

```php
<?php

    public function __construct($description){

        $this->description = $description;
    }
```
>Dessa forma, temos que passar o valor de $description sempre que criarmos uma instância de Task();

```php

$task = new Task('Estudar mais sobre banco de dados');
```

Agora podemos usar a função `var_dump()` no nosso objeto $task que está recebendo uma instância, para ver qual resultado teremos.

```
object(Task)#1 (2) {
  ["description":protected]=>
  string(33) "Estudar mais sobre banco de dados"
  ["completed":protected]=>
  bool(false)
}
```

Os métodos irá nos ajudar a interagir com nossa classe, podemos criar um método para executar qualquer coisa. Supando que registramos uma task e queremos saber se a task já foi concluída, para isso criamos um método que retorna o valor da nossa propriedade "completed".

```php
<?php

public function isCompleted(){

    return $this->completed;
}
```

Já podemos verificar o status da task, então vamos criar um método para alterar o status para conluída.

```php
<?php

public function complete(){

    $this->completed = true;
}
```

Digamos que queremos registrar 3 task, nesse caso teremos problemas pois os valores serão sobrescritos, para que isso não aconteça criamos um array que recebe instâncias de Task().

```php

$tasks = [
    new Task('Limpar o quarto'),
    new Task('Maratonar O Senhor dos Anéis'),
    new Task('Estudar Clean Code')
];
```
Então tempos uma lista de tarefas, podemos acessar os itens usando o index do array(todo array começa no index zero):

```php

//Completando nossa primeira tarefa

$tasks[0]->Complete();

//Verificando o status da útima tarefa

var_dump($tasks[2]->isCompleted());
```

[Código completo da aula aqui](../classes-exemplo)



