# Mysql (Banco de dados)

Nessa aula vamos aprender como armazenar dados, como no exemplo de tasks precisamos lembrar das informações, quais eram essas atividades, quando elas foram finalizadas, etc. É aqui que entra o banco de dados, há alguns sistemas de gerenciamento como Mysql, SQLite, NOSQL ou MongoDB. Aqui vamos utilizar o Mysql, que é o mais comum.

## MacOS

No sistema operacional MacOS você pode instalar o Mysql através do Homebrew, exatamente como fez com o PHP.

## Windows

Caso você utilize Windows provavelmente instalou alguns dos ambientes de desenvolvimento apresentados (XAMPP,WampServer,MAMP), nesse caso Mysql já está instalado em sua máquina.

**Lembre de iniciar o servidor local**


# Criando um banco de dados


Para começar vamos usar essa linha de comando no terminal para logar no Mysql ` mysql -u root`, vamos utilizar o usuário root. Caso não consiga acessar utilize `mysql -u root -p` para acessar com a senha, normalmente a senha também é root.

## Sintaxe 

Como no PHP, usando mysql também temos que finalizar a linha de comando com `;`. Primeiro passo, checar quais banco de dados já existem, para isso no terminal vamos digitar ` show databases;` assim veremos todos bancos que temos.


Agora vamos criar um banco de dados, normamente o nome do seu banco de dados corresponde com o nome do seu site. Vamos criar um banco de dados de exemplo chamado "mytodo".

No terminal:
```sql
create database mytodo;
```

Usando novamente o comando `show databases` o banco que acabamos de criar também será listado. Agora utilizamos o comando `use` seguido do nome do banco de dados para indicar que é nesse banco que vamos trabalhar.

```sql
use mytodo;
```



### Tabelas 

Tabelas são a representação de elementos, a estrutura de uma tabela consiste em colunas e linhas, onde colunas são os atributos desse elemento e linhas são os registros de elementos.

Como no exemplo do array de tasks, podemos criar uma tabela para armazenar as nossas tarefas, onde cada item do array será uma coluna e cada linha da tabela será uma tarefa diferente.

### Criando uma tabela 

Para criar uma tabela usamos `create table` seguido do nome da tabela e os seus atributos entre parênteses separados por vírgula.

```sql
create table novatabela(atributo1,atributo2);
```

Também é importante ter uma coluna para identificar cada elemento, chamamos essa coluna de "id" e também podemos acrescentar detalhes para as nossas colunas, como o tipo de dado, se é possível registrar um elemento sem um determinado atributo(Null), ou se a coluna é uma primary key (identificador único da tabela), etc.

Exemplo:

```sql
/*vamos cricar uma tabela para nossas tarefas*/

create table todos(id int PRIMARY KEY AUTO_INCREMENT,
description text NOT NULL,
completed boolean NOT NULL);
```
> Definimos um id que é do tipo inteiro com um valor único e é automaticamente incrementado(AUTO_INCREMENT); para description dizemos que é do tipo text, pois não sabemos qual será o tamanho da descrição, e não pode ser NULL; para completed dizemos que é do tipo bollean (true/false) e também não pode ser NULL. 

Podemos consultar quais tabelas já criamos usando ` show tables`, assim veremos todas tabelas contidas em um banco de dados. Para obter mais detalhes de uma tabela usamos `describe nomedatabela;` e será exibido todas as colunas da tabela e os seus detalhes.

Mas como podemos colocar registros em tabelas? Para isso temos o comando `insert into` seguido do nome da tabela, entre parênteses passamos os nomes dos atributos, logo depois usamos a palavra-chave `values` e passamos os valores entre parênteses também.

Exemplo:

```sql
insert into todos(description,completed) values ('Estudar mais sobre banco de dados',false);

/*resultado que indica que foi inserido com sucesso: query OK*/
```
> Não passamos o id porque ele será gerado automaticamente a cada novo insert que for realizado.

Para ver quais registros temos usamos `select * suatabela;` esse comando retornar todos os registros que têm em uma tabela. Mas digamos que só queremos consultar um determinado registro, podemos selecionar pelo seu identificador único.

Exemplo:

```sql

select * from todos where id=1;
```

> Só será exibido as informações do registro que tem o id igual a um.
