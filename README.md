# PHP Test Job

## Requisitos

- Mysql 8.0
- PHP 8+

# Instalação
Primeiro vamos fazer a instação das dependências
```
cd test-php-job
composer install
```

Copie o arquivo .env.example para .env e altere as variavél de configuração de acordo com a configuração da sua máquina.
Exemplo:
```
APP_URL=http://localhost:8000
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tecnofit_test
DB_USERNAME=root
DB_PASSWORD=root
```

Em seguida vamos subir o servidor com o comando abaixo, e acessar o endpoint `BASE_URL/api/ping` para testar se a aplicação está funcionando:
```
php artisan serve
```
Em caso o servidor esteja funcionando corretamente, pare o servidor com o `CTRL + C`, e execute as migrations e seeders.
```
php artisan migrate
php artisan db:seed
```

Para finalizar, rode o servidor novamente `php artisan serve` e acesse base_url/api/movement/:id/ranking.


# Comandos útils
Subir o servidor `php artisan serve`
Executar as migrations `php artisan migrate`
Executar os seeders `php artisan db:seed`
Executar os testes `php artisan test`
