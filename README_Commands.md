# Windows (MS Powershell)

## download Laravel dependencies 

docker run --rm -v ${PWD}:/app composer install

## init Laravel project

docker-compose up -d

docker-compose exec app php artisan key:generate

docker-compose down

## init model and controllers

docker-compose exec app php artisan make:controller IndexController
docker-compose exec app php artisan make:controller UserController


docker-compose exec app php artisan make:model Category --migration
docker-compose exec app php artisan make:model Tag --migration
docker-compose exec app php artisan make:model Post --migration

docker-compose exec app php artisan make:migration create_post_tag_table

docker-compose exec app php artisan migrate

## install admin page

docker run --rm -v ${PWD}:/app composer require tcg/voyager

docker-compose exec app php artisan migrate:reset

docker-compose exec app php artisan voyager:install --with-dummy

