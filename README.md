# Squad 5 - Programa de Formação 2022

<br>

## Tópicos

[Descrição do Projeto](#descrição-do-projeto)

[Ferramentas utilizadas na construção do projeto](#ferramentas-utilizadas-na-construção-do-projeto)

[Como executar o projeto](#como-executar-o-projeto)

[Como executar o projeto](#como-executar-o-projeto)

[Contribuidores](#contribuidores)

<br>

## :memo: Descrição do Projeto

Esse projeto está sendo desenvolvido durante o Programa de Formação 2022 do [Grupo FCamara](https://www.fcamara.com.br/). O objetivo do projeto é desenvolver uma plataforma própria do [Orange Evolution](https://digital.fcamara.com.br/orange-evolution), onde as pessoas possam ter acesso de forma mais organizada a trilha que escolheu, podem ver sua evolução conforme consome os conteúdos, e sendo tudo num mesmo lugar.

<br>

## :wrench: Ferramentas utilizadas na construção do projeto

* HTML
* CSS
* Bootstrap
* Laravel 9.x
* MySQL
* Insomnia 
* Git 
* Github
* Docker

## :rocket: Como executar o projeto

<br>

#### Pré-requisitos
Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas: [Docker](https://www.docker.com/).

<br>

### Rodando a aplicação web 

Primeiro clone o repositório: 

```git clone https://github.com/Squad5-Form22/Orange-Juice.git```
ou 
```git clone git@github.com:Squad5-Form22/Orange-Juice.git```

Acesse a pasta do repositório e realize o build do container: 

```cd Orange-Juice```

```docker compose up --build```

Em outro terminal, no mesmo diretório, entre no Docker com este comando

```docker exec -it php-apache bash```

No container, instale as dependência

```composer update```

Na pasta app/ renomeie o arquivo .env.example para .env

Dentro da pasta app/, no .env, atualize as seguintes variáveis para os dados abaixo:

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=DB_LARAVEL
DB_USERNAME=root
DB_PASSWORD=MYSQL_ROOT_PASSWORD
```

Após isto, volte para dentro do container Docker e rode as migrations para adicionar as tabelas padrões ao banco de dados

```php artisan key:generate```

```php artisan ```

Se tudo estiver correto, a aplicação estará rodando em:
```http://localhost:8000```

<br>

## :computer: Contribuidores

[Cristiano Albino](https://github.com/Kriss-Albius)

[Marcus Mazza](https://github.com/m-mazza)

[Savio Lopes](https://github.com/savio-2-lopes)

[Thalles Sobral](https://github.com/thazsobral)