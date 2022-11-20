
# # CURSO LARAVEL APIS COM CACHE (FEAT. DOCKER)
Repositório do Projeto Prático do curso da especializaTi. Nele foram abordados diversos recursos que auxiliam na performance e otimização de uma API, tais como trabalhar com sessions e cache com o uso do Redis, trabalhar com Eager Load nas consultas, utilizar o Laravel Telescope para monitorar a aplicação, trabalhar com um conceito de arquitetura que separa as camadas em controller + service + respository, uso do PHPUnit  etc.

## Tecnologias / Conceitos utilizadas

- Laravel 8
- Redis
- Docker
- Mysql
- Nginx
- Eager Load
- Arquitetura: Controller + Service + Repository
- Testes nas API's com PHPUnit
- etc.


## Instalação
**0) Levantar o ambiente (PHP+Nginx+Redis+Mysql) com Docker**

`docker-compose up -d`


**1) Baixar e configurar o Laravel**

`
composer install
`

`
cp .env.example .env
`

`
php artisan key:generate
`

`
php artisan migrate
`


**2) Endpoints**
(em breve documentação das APIS)

    
