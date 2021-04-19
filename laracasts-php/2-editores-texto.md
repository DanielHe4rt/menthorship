# 2. Sugestões de Editores de texto

Nessa aula é apresentado algumas sugestões de editores de texto e IDE, sendo eles:

* Sublime Text

    [Clique aqui para mais informações](https://www.sublimetext.com/)

* Atom

    [Clique aqui para mais informações](https://atom.io/)

* PhpStorm

    Essa é uma IDE premium especificamente para PHP.

    [Clique aqui para mais informalções](https://www.jetbrains.com/pt-br/phpstorm/)


*Lembrando que não é necessário uma IDE para codar em PHP, você pode usar até o bloco de notas*

# Sintaxe

Para começar podemos criar um arquivo chamado index.php e nesse arquivo abriremos a seguinte tag:  `<?php ?>` agora já podemos colocar código dentro desse arquivo, sempre lembrando de acrescentar `;` ao final de cada comando, caso contrário ocorrerá um erro impedindo o código de rodar.

Em PHP utilizamos o comando `echo` para exibir algo na tela.

Exemplos:

```php
<?php

 //Errado

 echo Olá mundo

 //Errado 

 echo Olá mundo;

 //Certo

 echo 'Olá mundo';

?>
```
Nos dois primeiros echos receberemos um erro, pois no primeiro não colocamos `;` e ambos estão sem aspas, logo o PHP entende que estamos tentado exibir algum comando ou função, mas não criamos uma função chamada "Olá mundo".

O terceiro echo possui a sintaxe correta, com o texto entre aspas indicando que é apensa um string e colocamos o `;` sinalizando o final do comando.
