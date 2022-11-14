<h1 align="center">Squad 5 - Programa de Formação 2022 - Grupo FCamara</i> </p>

<p align="center">
  <img alt="GitHub top language" src="https://img.shields.io/github/languages/top/Squad5-Form22/Orange-Juice.svg">

  <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/Squad5-Form22/Orange-Juice.svg">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/Squad5-Form22/Orange-Juice.svg">
  <a href="https://github.com/Squad5-Form22/Orange-Juice/commits/master">
    <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/Squad5-Form22/Orange-Juice.svg">
  </a>

  <a href="https://github.com/Squad5-Form22/Orange-Juice/issues">
    <img alt="Repository issues" src="https://img.shields.io/github/issues/Squad5-Form22/Orange-Juice.svg">
  </a>
</p>


## Tópicos
* [Descrição do Projeto](#descrição-do-projeto)
* [Ferramentas e Tecnologias](#ferramentas-e-tecnologias)
* [Como executar o projeto](#como-executar)
* [Contribuidores](#contribuidores)

<br>

## Descrição do Projeto

Projeto em desenvolvimento durante o Programa de Formação 2022 do [Grupo FCamara](https://www.fcamara.com.br/). O objetivo do projeto é desenvolver uma plataforma própria do [Orange Evolution](https://digital.fcamara.com.br/orange-evolution), onde as pessoas possam ter acesso de forma mais organizada a trilha que escolheu, podem ver sua evolução conforme consome os conteúdos, e sendo tudo num mesmo lugar.

<br>

## Protótipo

* [Figma](https://www.figma.com/proto/8sK65JAHvYkAq6TuEZAdTX/Squad-5---Orange-Juice?node-id=3%3A2&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=3%3A2)
## Ferramentas e Tecnologias

* [Figma](https://www.figma.com/)
* [HTML](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
* [CSS](https://developer.mozilla.org/pt-BR/docs/Web/CSS)
* [Bootstrap](https://getbootstrap.com/)
* [Laravel 9.x](https://laravel.com/)
* [MySQL](https://www.mysql.com/)
* [Git](https://git-scm.com/) 
* [Docker](https://www.docker.com/)

<br>

## Como executar

### Pré-requisitos
Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas: [Docker](https://www.docker.com/).

<br>

### Rodando a aplicação web 

1. Primeiro, clone o repositório: 

    ```git clone https://github.com/Squad5-Form22/Orange-Juice.git```

    ou

    ```git clone git@github.com:Squad5-Form22/Orange-Juice.git```

2. Acesse a pasta do repositório e realize o build do container: 

    ```cd Orange-Juice```

3. Na pasta **app/** renomeie o arquivo **.env.example** para **.env**

4. No arquivo **.env**, atualize as seguintes variáveis para os dados abaixo:

    ```
    DB_CONNECTION=mysql
    DB_HOST=db
    DB_PORT=3306
    DB_DATABASE=DB_LARAVEL
    DB_USERNAME=root
    DB_PASSWORD=MYSQL_ROOT_PASSWORD
    ```

5. Construa os containers para executar sua aplicação.

    ```docker compose up --build```

    > No linux, se já tiver instalado o Docker, pode ser necessário executar o seguinte comando, ```chmod -R 777 /var/www/php/```

6. Em outro terminal, no mesmo diretório, acesse o container do servidor apache com o bash

    ```docker exec -it php-apache bash```

7. Dê permissão de gravação na pasta `/var/www/php` dentro do servidor apache

    ```chmod -R 777 /var/www/php/```

8. Instale as dependência

    ```composer update```

9. Gere uma `APP_KEY` para sua aplicação

    ```php artisan key:generate```

    > Caso o Git em seu computador esteja configurado para SSH, deve-se [cadastrar um token](https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/creating-a-personal-access-token) para realizar o update

10. Após finalizar, rode as migrations para adicionar as tabelas padrões ao banco de dados

    ```php artisan migrate```

    > Se quiser rodar as seeds do projeto execute o seguinte comando, ```php artisan db:seed```

11. Se tudo estiver correto, a aplicação estará rodando em:
```http://localhost:8000/```

<br>

## Contribuidores

[Cristiano Albino](https://github.com/Kriss-Albius)

[Marcus Mazza](https://github.com/m-mazza)

[Savio Lopes](https://github.com/savio-2-lopes)

[Thalles Sobral](https://github.com/thazsobral)
