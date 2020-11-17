# Windows (MS Powershell)

docker run --rm -v ${PWD}:/app composer install

docker-compose up -d

docker-compose exec app php artisan key:generate

docker-compose exec app php artisan make:controller IndexController

docker-compose down
